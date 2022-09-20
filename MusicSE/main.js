const skwP = document.querySelector('.welcome_skw-p');
const skwS = document.querySelector('.welcome_skw-s');
const navDrop = document.querySelector('.menu-sticky_show');
const navUl = document.querySelector('.items');

window.addEventListener('scroll', () => {
    const offsetP = -15 + window.scrollY/45;
    const offsetS = 15 + window.scrollY/-45;

    skwP.style.transform = "skewY("+ offsetP +"deg)";
    skwS.style.transform = "skewY("+ offsetS +"deg)";
});

window.addEventListener('scroll', () => {
    const textllax = document.querySelector('.welcome_main_title');
    const offsetY = window.scrollY ;

    textllax.style.top = offsetY * 0.3  + 'px';

});

navDrop.addEventListener('click', () => {
    navUl.classList.toggle("open");
});