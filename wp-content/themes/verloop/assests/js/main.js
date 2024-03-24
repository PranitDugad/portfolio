document.addEventListener("DOMContentLoaded", function() {
    const hamMenu = document.querySelector('.ham-menu');
    const navMenu = document.querySelector('.nav-menu');

    hamMenu.addEventListener('click', function() {
      navMenu.classList.toggle('active');
    });
  });