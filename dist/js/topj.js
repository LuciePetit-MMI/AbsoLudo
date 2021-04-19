var btns = document.querySelectorAll('#topj h1 > div');
var userTop = document.querySelector('#user_top');
var absoTop = document.querySelector('#absoludo_top');


function clickedOnBtn(){
    const btn = this;
    //Show user top
        if (btn===user_title){
            //change active class
            btn.classList.add('active');
            btn.nextElementSibling.classList.remove('active');
            //show game user top
            userTop.classList.add('show');
            userTop.classList.remove('hidden');
            //hide game absoludo top
            absoTop.classList.add('hidden');
            absoTop.classList.remove('show');
        }

    //Show absoludo top
        if (btn===absoludo_title){
            //change active class
            btn.classList.add('active');
            btn.previousElementSibling.classList.remove('active');
            //show game absoludo top
            absoTop.classList.add('show');
            absoTop.classList.remove('hidden');
            //hide game user top
            userTop.classList.add('hidden');
            userTop.classList.remove('show');
        }
}


for (let i=0; i<btns.length; i++){
    const btn = btns[i];
    btn.addEventListener('click', clickedOnBtn);
}