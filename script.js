const newNumberInput = document.getElementById('newNumber');
const addButton = document.getElementById('addButton');

addButton.addEventListener('click', () => {
    const newNumber = newNumberInput.value;
    if (newNumber !== '') {
        fetch('/api/addNumber', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ number: newNumber }),
        })
        .then(response => {
            if (response.ok) {
                newNumberInput.value = ''; // Clear input field
            } else {
                console.error('Failed to add number:', response.statusText);
            }
        })
        .catch(error => console.error('Error adding number:', error));
    }
});
