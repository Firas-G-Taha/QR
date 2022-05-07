var timeOut = 0;
var eventsIndex = 0;
var offersIndex = 0;
var autoOn = true;

autoSlides('events');
autoSlides('offers');

function autoSlides(slidesClass) {
    timeOut = timeOut - 20;
    
    if (autoOn == true && timeOut < 0) {
        showSlides(slidesClass);

    }
    setTimeout(function(){
        autoSlides(slidesClass);
    }, 20);
}

function prevSlide(slidesClass) {
    timeOut = 4000;

    var slides = document.getElementsByClassName(slidesClass);
    var dots = document.getElementsByClassName("dot");

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        dots[i].className = dots[i].className.replace(" active", "");
    }
    if(slidesClass == 'events'){
        eventsIndex--;
        
        if (eventsIndex > slides.length) {
            eventsIndex = 1
        }
        if (eventsIndex == 0) {
            eventsIndex = slides.length
        }

        slides[eventsIndex - 1].style.display = "block";
        dots[eventsIndex - 1].className += " active";

    }
    if(slidesClass == 'offers'){
        offersIndex--;
        
        if (offersIndex > slides.length) {
            offersIndex = 1
        }
        if (offersIndex == 0) {
            offersIndex = slides.length
        }
        slides[offersIndex - 1].style.display = "block";
        dots[offersIndex - 1].className += " active";
    }
}

function showSlides(slidesClass) {
    timeOut = 4000;

    var slides = document.getElementsByClassName(slidesClass);
    var dots = document.getElementsByClassName("dot");

    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        dots[i].className = dots[i].className.replace(" active", "");
    }
    if(slidesClass == 'events'){
        eventsIndex++;
    
        if (eventsIndex > slides.length) {
            eventsIndex = 1
        }
        slides[eventsIndex - 1].style.display = "block";
        dots[eventsIndex - 1].className += " active";

    }

    if(slidesClass == 'offers'){
        offersIndex++;
    
        if (offersIndex > slides.length) {
            offersIndex = 1
        }
        slides[offersIndex - 1].style.display = "block";
        dots[offersIndex - 1].className += " active";
    }
}

function hamburger() {
    var x = document.getElementById("myLinks");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }

  



//   swipe

let touchstartX = 0
let touchendX = 0

const sliders = document.querySelectorAll('.events2  ');
function handleGesture() {
    if(touchstartX - touchendX > 30){
        showSlides('events');
    }else if(touchstartX - touchendX < -30){
        prevSlide('events');
    }
}

sliders.forEach(slider => {
    
    slider.addEventListener('touchstart', e => {
        touchstartX = e.changedTouches[0].screenX
    })
    
    slider.addEventListener('touchend', e => {
        touchendX = e.changedTouches[0].screenX
        handleGesture()
    })
});