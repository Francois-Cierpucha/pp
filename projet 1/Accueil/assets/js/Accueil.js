// Navbar
window.onscroll = function() {navbarFunction()}
let navbar = document.getElementById('navbar')
let sticky = navbar.offsetTop;
function navbarFunction(){
  if (window.pageYOffset >= sticky) {
    navbar.classList.add('sticky');
  }else{
    navbar.classList.remove('sticky');
  };
};
