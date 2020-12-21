// const corouselslide = document.querySelector('.corousel-slide');
// const corouselImages =document.querySelector('.corousel-slide img');

// //button
// const prevbtn = document.querySelector('#prevbtn');
// const nextbtn = document.querySelector('#nextbtn');

// //counter
// let counter = 1;
// const size = corouselImages[0].clientWidth;

// corouselslide.style.transform = 'translateX(' + ( -size * counter) + 'px)';

// //button
// nextbtn.addEventListener('click',function(){
//     corouselslide.style.transition = "transform 0.4s ease.in.out"
//     counter++;
//     corouselslide.style.transform = 'translateX(' + ( -size * counter) + 'px)';
// });

var slide_index = 1;  
displaySlides(slide_index);  

function nextSlide(n) {  
    displaySlides(slide_index += n);  
}  

function currentSlide(n) {  
    displaySlides(slide_index = n);  
}  

function displaySlides(n) {  
    var i;  
    var slides = document.getElementsByClassName("showSlide");  
    if (n > slides.length) { slide_index = 1 }  
    if (n < 1) { slide_index = slides.length }  
    for (i = 0; i < slides.length; i++) {  
        slides[i].style.display = "none";  
    }  
    slides[slide_index - 1].style.display = "block";  
}  
// Navbar Responsive //
jQuery( document ).ready( function($) {
    $( window ).scroll( function () {
      if ( $(document).scrollTop() > 150 ) {
        // Navigation Bar
        $('.navbar').removeClass('fadeIn');
        $('body').addClass('shrink');
        $('.navbar').addClass('animated fadeInDown');
      } else {
        $('.navbar').removeClass('fadeInDown');
        $('body').removeClass('shrink');
        $('.navbar').addClass('animated fadeIn');
      }
    });
  });
// Navbar Responsive //