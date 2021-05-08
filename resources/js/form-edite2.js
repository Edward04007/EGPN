const cd = document.querySelector('.CD')
const cp = document.querySelector('.CP')
const del = document.querySelector('.delete')
const close = document.querySelector('.close')
const input = document.querySelector('#input')
const input2 = document.querySelector('#input2')
const input3 = document.querySelector('#input3')
const close1 = document.querySelector('.close1')
const button = document.querySelector('.button')
const button2 = document.querySelector('.button2')
const button3 = document.querySelector('.button3')

cd.addEventListener('click', ()=>{
    del.classList.add('mostrar-flex')
})

close1.addEventListener('click', ()=>{
    del.classList.remove('mostrar-flex')
})

input.addEventListener('focus', () =>{

    button.classList.add('mostrar')

})

input.addEventListener('blur', () =>{

    setTimeout(timeRemove, 5000)

})

input2.addEventListener('focus', () =>{

    button2.classList.add('mostrar')

})
input2.addEventListener('blur', () =>{

    setTimeout(timeRemove2, 5000)

})
input3.addEventListener('focus', () =>{

    button3.classList.add('mostrar')

})
input3.addEventListener('blur', () =>{

    setTimeout(timeRemove3, 5000)

})

function timeRemove(){

    button.classList.remove('mostrar')
}
function timeRemove2(){

    button2.classList.remove('mostrar')
}
function timeRemove3(){

    button3.classList.remove('mostrar')
}
