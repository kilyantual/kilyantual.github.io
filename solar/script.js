const header = document.getElementById('header');
var equipe = false
var maison1 = document.getElementById('maison1')
var maison2 = document.getElementById('maison2')

window.addEventListener('scroll', ()=>{
    if (window.scrollY > 900 || window.scrollY < 2100){
        header.classList.add('scroll');
    }

    if(window.scrollY < 900 || window.scrollY > 2100){
        header.classList.remove('scroll');
    }
});

function changer_maison(){
    
    if (equipe == false){
        maison1.style.display = 'block'
        maison2.style.display = 'none'
    }else{
        maison2.style.display = 'block'
        maison1.style.display = 'none'
    }
}

var slider = document.getElementById('slidereco')

var val_importante1 = document.getElementById('val_importante1')
var val_importante2 = document.getElementById('val_importante2')
var val_importante3 = document.getElementById('val_importante3')
var val_importante4 = document.getElementById('val_importante4')


setInterval(()=>{
    maison1.style.opacity = slider.value + '%'
    val_importante1.innerHTML = 3000 - slider.value*30
    val_importante2.innerHTML = slider.value*10
    val_importante3.innerHTML = slider.value*15
    val_importante4.innerHTML = slider.value*40
},10)