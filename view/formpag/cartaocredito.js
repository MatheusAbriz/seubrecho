const { nodeName, get } = require("jquery");

function menuShow() {
    let menuMobile = document.querySelector('.mobile-menu');
    if (menuMobile.classList.contains('open')) {
        menuMobile.classList.remove('open');
        document.querySelector('.icon').src = "img/menu/menu.png";
    } else {
        menuMobile.classList.add('open');
        document.querySelector('.icon').src = "img/menu/close.png";
    }
}

mobileNavBar.init();

const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#exampleInputPassword1');

togglePassword.addEventListener('click', function (e) {
  // toggle the type attribute
  const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
  password.setAttribute('type', type);
  // toggle the eye slash icon
  this.classList.toggle('fa-eye-slash');
});
const togglePassword2 = document.querySelector('#togglePassword2');
const password2 = document.querySelector('#exampleInputPassword2');

togglePassword2.addEventListener('click', function (e) {
  // toggle the type attribute
  const type = password2.getAttribute('type') === 'password' ? 'text' : 'password';
  password2.setAttribute('type', type);
  // toggle the eye slash icon
  this.classList.toggle('fa-eye-slash');
});