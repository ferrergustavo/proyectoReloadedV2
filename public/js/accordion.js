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