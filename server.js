const express = require('express');
const fetch = require('node-fetch');

const app = express();
const PORT = process.env.PORT || 3000;

const GITHUB_TOKEN = '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';
const REPO_OWNER = 'rchkshrma';
const REPO_NAME = 'rchkshrma.github.io';
const FILE_PATH = 'numbers.csv'; // Update with your file path

app.use(express.json());

app.post('/api/addNumber', async (req, res) => {
    const { number } = req.body;

    const url = `https://api.github.com/repos/${REPO_OWNER}/${REPO_NAME}/contents/${FILE_PATH}`;
    
    const response = await fetch(url, {
        method: 'GET',
        headers: {
            Authorization: `Bearer ${GITHUB_TOKEN}`,
        },
    });

    const fileData = await response.json();

    // Modify the CSV data to add the new number
    const csvData = new TextDecoder().decode(Buffer.from(fileData.content, 'base64'));
    const updatedCSVData = `${csvData},${number}`;
    const updatedContent = Buffer.from(updatedCSVData).toString('base64');

    // Update the file on GitHub
    await fetch(url, {
        method: 'PUT',
        headers: {
            'Content-Type': 'application/json',
            Authorization: `Bearer ${GITHUB_TOKEN}`,
        },
        body: JSON.stringify({
            message: 'Add number to CSV',
            content: updatedContent,
            sha: fileData.sha,
        }),
    });

    res.sendStatus(200);
});

app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});
