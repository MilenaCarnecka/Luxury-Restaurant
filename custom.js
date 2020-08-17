//var slider = tns({
//        container: '.slider-container', //keiti tik tas kas yra 'ciaa'
//        items: 3,
//        slideBy: 'page',
//        autoplay: true, 
//        mouseDrag: true,
//        autoplayButtonOutput: false,
//        navPosition: "bottom",
//        navAsThumbnails: true,
//        controlsText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
//    });

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("testimonial");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}


function readAbout() {
  let dots = document.getElementById("dots");
  let moreText = document.getElementById("more");
  let btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "READ MORE";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "READ LESS";
    moreText.style.display = "inline";
  }
}

//$(document).ready(function(){
//    $('#res').click(function(){
//        $("html, body").animate({ scrollBottom: 0 }, 800);
//    });
//}
        
        
        /*MENU*/


  
    

function breakfast() {
    let BreakfastMenu = document.getElementById("breakfast");
  let btnBreakfast = document.getElementById("BreakfastBtn");
    let All = document.getElementsByClassName("all");
    let btnLunch = document.getElementById("LunchBtn");
let LunchMenu = document.getElementById("lunch");
    if(BreakfastMenu.style.display === "none") {
        BreakfastMenu.style.display = "flex";
        LunchMenu.style.display = "none";
          for (let i = 0; i < All.length; i++) {
            All[i].style.display = "none";
  }   
    }
}



function lunch() {
let BreakfastMenu = document.getElementById("breakfast");   
let btnLunch = document.getElementById("LunchBtn");
let LunchMenu = document.getElementById("lunch");
    
    if(LunchMenu.style.display === "none"){
        LunchMenu.style.display = "flex";
        BreakfastMenu.style.display = "none";
    }
}


function all() {
    let All = document.getElementsByClassName("all");
    let btnAll = document.getElementById("AllBtn");  
    let LunchMenu = document.getElementById("lunch");
    let Lox = document.getElementById("lunch");
    let BreakfastMenu = document.getElementById("breakfast"); 
        for (let i = 0; i < All.length; i++) {
            if(All[i].style.display === "none") {
            All[i].style.display = "flex";
        }
        BreakfastMenu.style.display = "none";
        LunchMenu.style.display = "none";
    }
}

    
    