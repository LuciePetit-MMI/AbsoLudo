var btns = document.querySelectorAll('h1 > div');
var userTop = document.querySelector('#user_top');
var absoTop = document.querySelector('#absoludo_top');


function clickSurBouton(){
    const btn = this;
    //ajoute .courant au slide suivant
        if (btn===user_title){
            btn.classList.add('active');
            btn.nextElementSibling.classList.remove('active');
            userTop.classList.add('show');
            userTop.classList.remove('hidden');
            absoTop.classList.add('hidden');
            absoTop.classList.remove('show');

        }

    //ajoute .courant au slide precedent
        if (btn===absoludo_title){
            btn.classList.add('active');
            btn.previousElementSibling.classList.remove('active');
            absoTop.classList.add('show');
            absoTop.classList.remove('hidden');
            userTop.classList.add('hidden');
            userTop.classList.remove('show');

        }
}


for (let i=0; i<btns.length; i++){
    const btn = btns[i];
    btn.addEventListener('click', clickSurBouton);
}