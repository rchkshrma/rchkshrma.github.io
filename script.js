const listContainer = document.getElementById('numberList');
const newNumberInput = document.getElementById('newNumber');
const addButton = document.getElementById('addButton');

// Function to update the HTML list
function updateList(numbers) {
    listContainer.innerHTML = ''; // Clear existing list
    numbers.forEach(number => {
        const listItem = document.createElement('li');
        listItem.textContent = number.trim(); // Remove leading/trailing spaces
        listContainer.appendChild(listItem);
    });
}

// Read and parse CSV file
function loadCSV() {
    fetch('numbers.csv')
        .then(response => response.text())
        .then(data => {
            const numbers = data.split(',');
            updateList(numbers);
        })
        .catch(error => console.error('Error loading CSV:', error));
}

loadCSV(); // Load initial list

// Add a new number to the CSV
addButton.addEventListener('click', () => {
    const newNumber = newNumberInput.value;
    if (newNumber !== '') {
        fetch('numbers.csv', {
            method: 'POST',
            headers: {
                'Content-Type': 'text/plain',
            },
            body: newNumber,
        })
        .then(response => {
            if (response.ok) {
                newNumberInput.value = ''; // Clear input field
                loadCSV(); // Update the list with the new number
            } else {
                console.error('Failed to add number:', response.statusText);
            }
        })
        .catch(error => console.error('Error adding number:', error));
    }
});
