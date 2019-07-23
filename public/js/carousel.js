window.addEventListener('load',cargar)

function cargar(){

    //---- Slider----//
    
    const slider = document.querySelector('.slider');

    console.log(slider);

    const slides = document.querySelector('.slider_');

    console.log(slides);

    const sliderLeft = document.querySelector('.control-left');
    
    console.log(sliderLeft);

    const sliderRight = document.querySelector('.control-right');

    console.log(sliderRight);


    function slideLeft() {
        
        let activeSlide = document.querySelector('.slider-active'); 
    
        let previousSlide = activeSlide.previousElementSibling;
    
        if (previousSlide !== null){
            activeSlide.classList.add('slider-hidden');
            activeSlide.classList.remove('slider-active');

        previousSlide.classList.remove('slider-hidden');

        previousSlide.classList.add('slider-active');
    }else{

        activeSlide.classList.add('slider-hidden');

        activeSlide.classList.remove('slider-active');

        slider.lastElementChild.classList.remove('slider-hidden');

        slider.lastElementChild.classList.add('slider-active');
    }
}


function slideRight() {
   
    let activeSlide = document.querySelector('.slider-active');
   
    let nextSlide = activeSlide.nextElementSibling;
   
    if (nextSlide !== null) {
     activeSlide.classList.add('slider-hidden');
   
     activeSlide.classList.remove('slider-active');
   
     nextSlide.classList.remove('slider-hidden');
   
     nextSlide.classList.add('slider-active');
    } else {
     
     activeSlide.classList.add('slider-hidden');
   
     activeSlide.classList.remove('slider-active');
   
     slider.firstElementChild.classList.remove('slider-hidden');
   
     slider.firstElementChild.classList.add('slider-active');
    }
   };

        

    sliderLeft.addEventListener('click', slideLeft);

    sliderRight.addEventListener('click', slideRight);

   

   //-------------- Con Botones del teclado--------------//

   document.onkeyup = function(evento){
    if(event.keyCode==39){
        slideRight();
    }else if(event.keyCode==37){
        slideLeft();
    }
    };

}