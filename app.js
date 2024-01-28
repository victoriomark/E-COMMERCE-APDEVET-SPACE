const Menu_Nav = document.querySelector(".Menu_Nav")
const NavLinks = document.querySelector("nav")
const Heart = document.querySelectorAll(".card button .fa-heart")

Heart.forEach((x)=>{
      x.addEventListener("click",()=>{
           x.classList.toggle("IsActiveHeart")
      })
})




//FUNCTION FOR NAV-MENU
Menu_Nav.addEventListener("click",()=>{
     NavLinks.classList.toggle("activeNav")
})