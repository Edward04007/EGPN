const pop = document.querySelector('.pop-up')
const input = document.querySelector('#input')
const legend = document.querySelector('#legend')
const inputPass = document.querySelector('#hidden1')
const inputPhoto = document.querySelector('#hidden0')

document.querySelector('.prof').addEventListener('click', () =>{
    input.name = "userProf"
    inputPhoto.type = "url"
    inputPass.type = "password"
    pop.classList.add('mostrar')
    legend.innerHTML = "Adicionar Professor"
    input.placeholder = "Nome do professor(a)"
})

document.querySelector('.dis').addEventListener('click', () =>{
    input.name = "disc"
    inputPass.type = "hidden"
    inputPhoto.type = "hidden"
    pop.classList.add('mostrar')
    input.placeholder = "Disciplina"
    legend.innerHTML = "Adicionar Disciplina"
})

document.querySelector('.close').addEventListener('click', () =>{
    pop.classList.remove('mostrar')
})
