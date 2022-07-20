

let cercle = document.getElementsByClassName('cercle')[0];
let cercle_a = document.getElementById('cercle-a')
let body = document.getElementsByTagName('body')[0]
let menu = document.getElementsByClassName('menu')[0]

var y_cercle = window.scrollY + cercle.getBoundingClientRect().top + 25
var x_cercle = window.scrollX + cercle.getBoundingClientRect().left + 25

cercle_a.addEventListener('click', event => {
    console.log(cercle_a.classList[0])
    
    if (cercle_a.classList[0] === "active"){

        cercle_a.parentElement.style.background = 'transparent'
        cercle_a.style.color = 'rgb(10, 10, 49)'

        body.style.background = 'rgb(209, 247, 247)'

        menu.parentElement.style.animation = '1s slideOutUp forwards ease'

        cercle_a.textContent = '%'


        cercle_a.classList.remove('active')
        cercle_a.classList.add('inactive')
    }else{

        cercle_a.parentElement.style.background = 'rgb(10, 10, 49)'
        cercle_a.style.color = 'white'
        
        body.style.background = 'rgb(17, 17, 71)'

        menu.parentElement.style.animation = '1s slideInUp forwards ease'

        cercle_a.textContent = 'X'

        cercle_a.classList.remove('inactive')
        cercle_a.classList.add('active')

        
    }
})

document.onmousemove = function(){
    if ( event.clientX - x_cercle < 100 && -100 < event.clientX - x_cercle && event.clientY - y_cercle < 100 && -100 < event.clientY - y_cercle){
        /*console.log(event.clientX - x_cercle, x_cercle - event.clientX, ',', event.clientY - y_cercle, event.clientY - y_cercle)*/
        
        let x = event.clientX * 100 / window.innerWidth - 90 + '%';
        let y = event.clientY * 100 / window.innerHeight - 10 + '%';



        cercle.style.transform = 'translate(' + x + "," + y + ')';
        y_cercle = window.scrollY + cercle.getBoundingClientRect().top + 25
        x_cercle = window.scrollX + cercle.getBoundingClientRect().left + 25
    }else{
        cercle.style.transform = 'translate(' + 0 + "," + 0 + ')';
    }
    
}