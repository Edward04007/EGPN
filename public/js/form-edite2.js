/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./resources/js/form-edite2.js ***!
  \*************************************/
var cd = document.querySelector('.CD');
var cp = document.querySelector('.CP');
var del = document.querySelector('.delete');
var close = document.querySelector('.close');
var input = document.querySelector('#input');
var input2 = document.querySelector('#input2');
var input3 = document.querySelector('#input3');
var close1 = document.querySelector('.close1');
var button = document.querySelector('.button');
var button2 = document.querySelector('.button2');
var button3 = document.querySelector('.button3');
cd.addEventListener('click', function () {
  del.classList.add('mostrar-flex');
});
close1.addEventListener('click', function () {
  del.classList.remove('mostrar-flex');
});
input.addEventListener('focus', function () {
  button.classList.add('mostrar');
});
input.addEventListener('blur', function () {
  setTimeout(timeRemove, 5000);
});
input2.addEventListener('focus', function () {
  button2.classList.add('mostrar');
});
input2.addEventListener('blur', function () {
  setTimeout(timeRemove2, 5000);
});
input3.addEventListener('focus', function () {
  button3.classList.add('mostrar');
});
input3.addEventListener('blur', function () {
  setTimeout(timeRemove3, 5000);
});

function timeRemove() {
  button.classList.remove('mostrar');
}

function timeRemove2() {
  button2.classList.remove('mostrar');
}

function timeRemove3() {
  button3.classList.remove('mostrar');
}
/******/ })()
;