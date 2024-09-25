// script.js

document.getElementById('contactForm').addEventListener('submit', function(event) {
    let name = document.querySelector('input[name="name"]').value;
    let email = document.querySelector('input[name="email"]').value;
  
    if (name === '' || email === '') {
      event.preventDefault(); // Prevent form submission
      alert('Please fill all fields.');
    }
  });
  






  // script.js

// Function to toggle between dark and light mode
function toggleTheme() {
  const body = document.body;
  const themeToggleBtn = document.getElementById('theme-toggle');

  // Toggle the 'dark-mode' class on the body
  body.classList.toggle('dark-mode');

  // Save the theme preference in localStorage
  if (body.classList.contains('dark-mode')) {
    localStorage.setItem('theme', 'dark');
    themeToggleBtn.textContent = 'Light Mode';
  } else {
    localStorage.setItem('theme', 'light');
    themeToggleBtn.textContent = 'Dark Mode';
  }
}

// Function to load the saved theme preference on page load
function loadTheme() {
  const savedTheme = localStorage.getItem('theme');
  const body = document.body;
  const themeToggleBtn = document.getElementById('theme-toggle');

  if (savedTheme === 'dark') {
    body.classList.add('dark-mode');
    themeToggleBtn.textContent = 'Light Mode';
  } else {
    body.classList.remove('dark-mode');
    themeToggleBtn.textContent = 'Dark Mode';
  }
}

// Add event listener to the theme toggle button
document.getElementById('theme-toggle').addEventListener('click', toggleTheme);

// Load the saved theme on page load
loadTheme();
