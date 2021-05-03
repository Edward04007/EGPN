/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!************************************!*\
  !*** ./resources/js/form-edite.js ***!
  \************************************/
var cd = document.querySelector('.CD');
var cp = document.querySelector('.CP');
var del = document.querySelector('.delete');
var input = document.querySelector('#input');
var close = document.querySelector('.close');
var close1 = document.querySelector('.close1');
var button = document.querySelector('.button');
var create = document.querySelector('.create');
cd.addEventListener('click', function () {
  del.classList.add('mostrar-flex');
});
cp.addEventListener('click', function () {
  create.classList.add('mostrar-flex');
});
close.addEventListener('click', function () {
  create.classList.remove('mostrar-flex');
});
close1.addEventListener('click', function () {
  del.classList.remove('mostrar-flex');
});
input.addEventListener('focus', function () {
  button.classList.add('mostrar');
});
input.addEventListener('blur', function () {
  button.classList.remove('mostrar');
});
/******/ })()
;