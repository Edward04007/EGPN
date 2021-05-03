/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************!*\
  !*** ./resources/js/pop-up.js ***!
  \********************************/
var pop = document.querySelector('.pop-up');
var input = document.querySelector('#input');
var legend = document.querySelector('#legend');
var inputPass = document.querySelector('#hidden1');
var inputPhoto = document.querySelector('#hidden0');
document.querySelector('.prof').addEventListener('click', function () {
  input.name = "userProf";
  inputPhoto.type = "text";
  inputPass.type = "password";
  pop.classList.add('mostrar');
  legend.innerHTML = "Adicionar Professor";
  input.placeholder = "Nome do professor(a)";
});
document.querySelector('.dis').addEventListener('click', function () {
  input.name = "disc";
  inputPass.type = "hidden";
  inputPhoto.type = "hidden";
  pop.classList.add('mostrar');
  input.placeholder = "Disciplina";
  legend.innerHTML = "Adicionar Disciplina";
});
document.querySelector('.close').addEventListener('click', function () {
  pop.classList.remove('mostrar');
});
/******/ })()
;