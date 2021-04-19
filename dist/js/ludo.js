var btns = document.querySelectorAll('#library h2');
var sections = document.querySelectorAll('#library section');
var indicators = document.querySelectorAll('#library button');


function clickedOnBtn(){

    for(let i=0; i<btns.length; i++){
        btns[i].className= "";
    }

    var btn = this;
    //show have section
    if (btn===have_title){
        //change active class
        btn.classList.add('active');
        //show game user top
        for(let i=0; i<sections.length; i++){
            var section = sections[i];

            if(section===have_section){
                section.classList.add('show');
                section.classList.remove('hidden');

                for(let i=0; i<indicators.length; i++){
                    var indicator = indicators[i];

                    if(indicator.classList.contains('have_section')){
                        indicator.classList.add('hidden');
                    }
                    else{
                        indicator.classList.remove('hidden');
                    }
                }
            } 
            else{
                section.classList.remove('show');   
                section.classList.add('hidden');
            }
        }
    }

    //show played section
    if (btn===played_title){
        //change active class
        btn.classList.add('active');
        //show game user top
        for(let i=0; i<sections.length; i++){
            var section = sections[i];

            if(section===played_section){
                section.classList.add('show');
                section.classList.remove('hidden');

                for(let i=0; i<indicators.length; i++){
                    var indicator = indicators[i];

                    if(indicator.classList.contains('played_section')){
                        indicator.classList.add('hidden');
                    }
                    else{
                        indicator.classList.remove('hidden');
                    }
                }
            }
            else{
                section.classList.remove('show');
                section.classList.add('hidden');
            }
        }
    }

    //show want section
    if (btn===want_title){
        //change active class
        btn.classList.add('active');
        //show game user top
        for(let i=0; i<sections.length; i++){
            var section = sections[i];

            if(section===want_section){
                section.classList.add('show');
                section.classList.remove('hidden');

                for(let i=0; i<indicators.length; i++){
                    var indicator = indicators[i];

                    if(indicator.classList.contains('want_section') || indicator.classList.contains('have_section')){
                        indicator.classList.add('hidden');
                    }
                    else{
                        indicator.classList.remove('hidden');
                    }
                }
            }
            else{
                section.classList.remove('show');
                section.classList.add('hidden');
            }
        }
    }
}


for (let i=0; i<btns.length; i++){
    const btn = btns[i];
    btn.addEventListener('click', clickedOnBtn);
}