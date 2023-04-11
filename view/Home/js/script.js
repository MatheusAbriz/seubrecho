const { nodeName, get } = require("jquery");


function menuShow() {
    let menuMobile = document.querySelector('.mobile-menu');
    if (menuMobile.classList.contains('open')) {
        menuMobile.classList.remove('open');
        document.querySelector('.icon').src = "../home/img/menu/menu.png";
    } else {
        menuMobile.classList.add('open');
        document.querySelector('.icon').src = "../home/img/menu/close.png";
    }
}

mobileNavBar.init();

function fecharCookies(){
    var cookies = document.getElementById('cookies');
    cookies.style.opacity = "0";
}
document.cookie = "name=oeschger; SameSite=None; Secure";
document.cookie = "favorite_food=tripe; SameSite=None; Secure";

function showCookies() {
  const output = document.getElementById('cookies')
  output.textContent = `> ${document.cookie}`
}




