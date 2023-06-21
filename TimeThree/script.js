document.addEventListener('DOMContentLoaded', function() {
  var toggleButton = document.querySelector('.toggle-button');
  var sidebar = document.querySelector('.sidebar');

  toggleButton.addEventListener('click', function() {
    sidebar.classList.toggle('open');
  });
});