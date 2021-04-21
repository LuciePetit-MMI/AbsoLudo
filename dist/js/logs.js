let listIndicateurs = document.querySelectorAll(".form a");
let formPart = document.querySelector("#form-particulier");
let formPro = document.querySelector("#form-pro");
let formSignIn = document.querySelector("#form-signin");

function showForm(){
    "use strict";
    const lien = this;
    const selecteurDuSlide = lien.getAttribute("href");
    console.log(selecteurDuSlide)
    if(selecteurDuSlide=="#pro"){
        console.log('formulaire pro');
        formPart.classList.add('hidden');
        formPro.classList.remove('hidden');
        formSignIn.classList.add('hidden');
    }
    if(selecteurDuSlide=="#particulier"){
        console.log('formulaire particulier');
        formPart.classList.remove('hidden');
        formPro.classList.add('hidden');
        formSignIn.classList.add('hidden');
    }
    if(selecteurDuSlide=="#signin"){
        console.log('formulaire connexion');
        formSignIn.classList.remove('hidden');
        formPro.classList.add('hidden');
        formPart.classList.add('hidden');
    }
}


for (let i=0; i<listIndicateurs.length; i++){
    console.log('entrer boucle for');
    const indicateur = listIndicateurs[i];
    indicateur.addEventListener('click', showForm);
}