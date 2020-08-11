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
        
        
        
        
        
        