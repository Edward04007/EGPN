const cd = document.querySelector(".CD");
const cp = document.querySelector(".CP");
const del = document.querySelector(".delete");
const close = document.querySelector(".close");
const input = document.querySelector("#input");
const close1 = document.querySelector(".close1");
const button = document.querySelector(".button");
const create = document.querySelector(".create");

cd.addEventListener("click", () => {
    del.classList.add("mostrar-flex");
});

cp.addEventListener("click", () => {
    create.classList.add("mostrar-flex");
});

close.addEventListener("click", () => {
    create.classList.remove("mostrar-flex");
});

close1.addEventListener("click", () => {
    del.classList.remove("mostrar-flex");
});

input.addEventListener("focus", () => {
    button.classList.add("mostrar");
});

input.addEventListener("blur", () => {
    setTimeout(timeRemove, 5000);
});

function timeRemove() {
    button.classList.remove("mostrar");
}
