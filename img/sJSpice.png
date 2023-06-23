/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')

/*===== MENU SHOW =====*/
if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
    })
}

/*===== MENU HIDDEN =====*/
if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu')
    })
}
/*=============== DROPDOWN HIDDEN ===============*/ 
function toggleDropdown(event) {
    event.preventDefault();
    var dropdown = document.getElementById("recipe-dropdown");
    dropdown.style.display = (dropdown.style.display === "block") ? "none" : "block";
  }

  function toggleDropdown(event) {
    event.preventDefault();
    var dropdown = document.getElementById("recipe-dropdown");
    dropdown.classList.toggle("show");
}
  
/*=============== CHANGE BACKGROUND HEADER ===============*/
const scrollHeader = () =>{
    const header = document.getElementById('header')
    this.scrollY >= 50 ? header.classList.add('bg-header') 
                       : header.classList.remove('bg-header')
}
window.addEventListener('scroll', scrollHeader)

/*=============== SHOW SCROLL UP ===============*/ 
const scrollUp = () =>{
	const scrollUp = document.getElementById('scroll-up')
	this.scrollY >= 350 ? scrollUp.classList.add('show-scroll')
						: scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

/*=============== DARK LIGHT THEME ===============*/ 
const themeButton = document.getElementById('theme-button')
const darkTheme = 'dark-theme'
const iconTheme = 'ri-contrast-2-line'

const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'ri-contrast-2-fill' : 'ri-contrast-2-line'


if (selectedTheme) {
 
  document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
  themeButton.classList[selectedIcon === 'ri-contrast-2-fill' ? 'add' : 'remove'](iconTheme)
}

themeButton.addEventListener('click', () => {

    document.body.classList.toggle(darkTheme)
    themeButton.classList.toggle(iconTheme)

    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})

/*=============== POPULAR RECIPE BUTTONS ===============*/ 
const repbutton1 = document.getElementById("repbutton1")
repbutton1.addEventListener("click", function(){
    window.location.href=repbutton1.getAttribute("href");
});

const repbutton2 = document.getElementById("repbutton2")
repbutton2.addEventListener("click", function(){
    window.location.href=repbutton2.getAttribute("href");
});

const repbutton3 = document.getElementById("repbutton3")
repbutton3.addEventListener("click", function(){
    window.location.href=repbutton3.getAttribute("href");
});

const repbutton4 = document.getElementById("repbutton4")
repbutton4.addEventListener("click", function(){
    window.location.href=repbutton4.getAttribute("href");
});