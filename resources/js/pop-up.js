const FormDisc = document.querySelector(".FormDisc");
const FormProf = document.querySelector(".FormProf");

document.querySelector(".dis").addEventListener("click", () => {
    FormDisc.classList.add("mostrar");
});
document.querySelector(".close1").addEventListener("click", () => {
    FormDisc.classList.remove("mostrar");
});

document.querySelector(".prof").addEventListener("click", () => {
    FormProf.classList.add("mostrar");
});

document.querySelector(".close").addEventListener("click", () => {
    FormProf.classList.remove("mostrar");
});
