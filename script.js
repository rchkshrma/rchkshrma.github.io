// Read and parse CSV file
fetch('numbers.csv')
    .then(response => response.text())
    .then(data => {
        const numbers = data.split(',');

        // Create an HTML list
        const listContainer = document.getElementById('numberList');
        numbers.forEach(number => {
            const listItem = document.createElement('li');
            listItem.textContent = number.trim(); // Remove leading/trailing spaces
            listContainer.appendChild(listItem);
        });
    })
    .catch(error => console.error('Error loading CSV:', error));
