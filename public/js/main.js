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

    //-------------------------Boton Shop-----------------------------------//

        let show_sidebar = document.querySelector('.shop_Icon');
        let mySidebar = document.querySelector('.shop_display')
        let close_sidebar = document.querySelector('.closebtn');
        let container = document.querySelector('.slideshow');

        show_sidebar.onclick = function(){
            mySidebar.style.width = "40%";
            container.style.opacity = "0.5";
        }

        close_sidebar.onclick = function(){
            mySidebar.style.width = "0";
            container.style.opacity = "1";
        }

    }

  //------- Accordion Navbar-------//

    let accordions = document.getElementsByClassName('accordion_button');
    console.log(accordions);
    for(let i = 0; i < accordions.length;i++){
        accordions[i].onclick = function(){
            let content = this.nextElementSibling;
            console.log(content);

        if(content.style.maxHeight){
            content.style.maxHeight = null ;
        }else{
            content.style.maxHeight = 200 +"px";
        }
        }

    }

    