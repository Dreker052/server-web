const button = document.getElementById('action-button');
const textElement = document.getElementById('dynamic-text');

button.addEventListener('click', function() {
    
    textElement.innerHTML = `Hello, World!`;
    textElement.style.color = '#28a745';
});