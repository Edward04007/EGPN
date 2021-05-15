const FormDisc = document.querySelector('.FormDisc')

document.querySelector('.dis').addEventListener('click', () =>{

    FormDisc.classList.add('mostrar')

})
document.querySelector('.close1').addEventListener('click', () =>{
    FormDisc.classList.remove('mostrar')
})
