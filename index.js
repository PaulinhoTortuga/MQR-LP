//header-color
document.addEventListener("scroll", function() {
    if(window.scrollY > 50) {
        document.querySelector(".header").classList.add("header_scrolled");
    } else {
        //remove the background property so it comes transparent again (defined in your css)
       document.querySelector(".header").classList.remove("header_scrolled");
    }
});
//burger-menu
window.addEventListener('DOMContentLoaded', () => {
    const nav = document.querySelector('.header_nav'),
          navItems = document.querySelectorAll('.header_nav_item')
          burgerBtn = document.querySelector('.burger_btn')

          burgerBtn.addEventListener('click', () => {
              burgerBtn.classList.toggle('burger_btn_active')
              nav.classList.toggle('active')
          });

          navItems.forEach(item => {
              item.addEventListener('click', () => {
                burgerBtn.classList.toggle('burger_btn_active')
                nav.classList.toggle('active')
              })
          })
})