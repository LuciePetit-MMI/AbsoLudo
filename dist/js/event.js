//----------open event's details 

var events = document.querySelectorAll('.event_list_item');

function showDetails (){
    // Show details
    this.classList.toggle('event_list_item_open');
}

for (let i=0; i<events.length; i++){
    const event = events[i];
    event.addEventListener('click', showDetails);
}

//----------change section showed

var btnTitles = document.querySelectorAll('#calendar h1 > div');
var calendar = document.querySelector('#agenda');
var participated = document.querySelector('#participated');


function clickSurBouton(){
    const btnTitle = this;
    //ajoute .active au slide suivant
        if (btnTitle===agenda_title){
            btnTitle.classList.add('active');
            btnTitle.nextElementSibling.classList.remove('active');
            calendar.classList.add('show');
            calendar.classList.remove('hidden');
            participated.classList.add('hidden');
            participated.classList.remove('show');
        }

    //ajoute .active au slide precedent
        if (btnTitle===participated_title){
            btnTitle.classList.add('active');
            btnTitle.previousElementSibling.classList.remove('active');
            participated.classList.add('show');
            participated.classList.remove('hidden');
            calendar.classList.add('hidden');
            calendar.classList.remove('show');
        }
}


for (let i=0; i<btnTitles.length; i++){
    const btnTitle = btnTitles[i];
    btnTitle.addEventListener('click', clickSurBouton);
}

//----------slider months
    function changeSlide(){
        const button = this;
        let slideActif = document.querySelector('.actif');
        let slideActifPart = document.querySelector('.actif_participated');
    //slider agenda
        //add class .actif next slide
            if (button===next){
                slideActif.classList.remove('actif');
                slideActif.nextElementSibling.classList.add('actif');
            }

        //add class .actif prev slide
            if (button===prev){
                slideActif.classList.remove('actif');
                slideActif.previousElementSibling.classList.add('actif');
            }
    //slider participated
        //add class .actif_participated next slid
            if (button===next_participated){
                slideActifPart.classList.remove('actif_participated');
                slideActifPart.nextElementSibling.classList.add('actif_participated');
            }
        //add class .actif_participated prev slid
            if (button===prev_participated){
                slideActifPart.classList.remove('actif_participated');
                slideActifPart.previousElementSibling.classList.add('actif_participated');
            }
    }

//clic on button
    const sliderBtns = document.querySelectorAll(".slider_btn");
    for (let i=0; i<sliderBtns.length; i++){
        const sliderBtn = sliderBtns[i];
        sliderBtn.addEventListener('click', changeSlide);
    }