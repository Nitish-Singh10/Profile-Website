const header = document.querySelector("header");

window.addEventListener("scroll",function(){
    header.classList.toggle("sticky",window.scrollY > 120);
});

let menu = document.querySelector('.menu');
let nav = document.querySelector('.navigation');

menu.onclick = () => {
    nav.classList.toggle('active');
};

window.onscroll = () => {
    nav.classList.remove('active');
};