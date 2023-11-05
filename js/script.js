let navbar = document.querySelector('.header .flex .navbar');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
   profile.classList.remove('active');
}

let profile = document.querySelector('.header .flex .profile');

document.querySelector('#user-btn').onclick = () =>{
   profile.classList.toggle('active');
   navbar.classList.remove('active');
}

window.onscroll = () =>{
   profile.classList.remove('active');
   navbar.classList.remove('active');
}





// slider part

var swiper = new Swiper(".home-slider", {
   autoplay:{
     delay:7500,
     disableOnInteraction:false,
   },
   grabCursor:true,
   loop: true,
   centeredSlides:true,
   navigation: {
     nextEl: '.swiper-button-next',
     prevEl: '.swiper-button-prev',
   },
 });
 
 
 var swiper = new Swiper(".menu-slider", {
   grabCursor:true,
   loop: true,
   autoHeight:true,
   centeredSlides:true,
   spaceBetwwen:20,
   pagination: {
     el: '.swiper-pagination',
     clickable:true,
   },
 });




