window.addEventListener('load', function() {
  const preloader = document.querySelector('.preloader');
  const content = document.querySelector('.content');
  
  setTimeout(function() {
    preloader.style.display = 'none';
    content.style.display = 'block';
  },0); // Change 0 to the desired time in milliseconds for the preloader to display
});
