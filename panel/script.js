const header = document.getElementById('header');

window.addEventListener('scroll', ()=>{
    if (window.scrollY > 900){
        header.classList.add('scroll');
    }

    if (window.scrollY < 900){
        header.classList.remove('scroll');
    }
});