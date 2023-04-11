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