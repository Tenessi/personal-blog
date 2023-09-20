import './bootstrap';

document.addEventListener('DOMContentLoaded', function() {
    const Burger = document.querySelector('.header__burger');
    const Sidebar = document.querySelector('.sidebar');
    const Background = document.querySelector('.main__sidebar');

    Burger.addEventListener('click', function() {
        Sidebar.classList.toggle("sidebar__active")
        Background.classList.toggle('main__sidebar_active')
    });

})






