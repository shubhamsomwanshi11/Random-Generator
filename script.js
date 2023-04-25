document.addEventListener('DOMContentLoaded', function () {

    // get toggle button and sidebar
    var toggleButton = document.querySelector('.toggle-sidebar');
    var sidebar = document.querySelector('.sidebar');
  
    // add event listener to toggle button
    toggleButton.addEventListener('click', function () {
      // toggle sidebar active class
      sidebar.classList.toggle('is-active');
      // toggle is-hidden-desktop class on toggle button
      toggleButton.classList.toggle('is-hidden-desktop');
    });
  
    // get navbar burger button
    var navbarBurger = document.querySelector('.navbar-burger');
  
    // add event listener to navbar burger button
    navbarBurger.addEventListener('click', function () {
      // toggle is-active class on navbar burger button
      navbarBurger.classList.toggle('is-active');
      // toggle is-active class on navbar menu
      document.querySelector('#navbar-menu').classList.toggle('is-active');
    });
  
  });
 q  