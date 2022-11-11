/* BurgerMenu Controler */

let burgerButton = document.getElementById('burgerButton');
let navLinks = document.getElementById('navLinks');
let main = document.getElementById('main');


burgerButton.title = "inactive";  
burgerButton.addEventListener('click', ()=> {
    
    if(burgerButton.title === "inactive"){
        burgerButton.src = "./assets/close.svg"; 
        burgerButton.title ="active";  
        navLinks.classList.remove('navLinks');     
        navLinks.classList.add('navLinksMovile');  
        main.style.visibility= "hidden";
           
    }else{
        burgerButton.src = "./assets/burger.svg";
        burgerButton.title ="inactive"; 
        navLinks.classList.remove('navLinksMovile');     
        navLinks.classList.add('navLinks'); 
        main.style.visibility = "visible";
    }    
})


