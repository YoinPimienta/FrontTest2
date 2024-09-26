// Seleccionar los elementos del DOM
const themeToggle = document.getElementById("themeToggle");
const body = document.body;
const nav = document.querySelector("nav");
const menuToggle = document.querySelector(".menu-toggle");
const modal = document.getElementById("loginModal");
const openModalBtn = document.getElementById("openModal");
const closeModal = document.querySelector(".close");

// Cambiar el tema claro/oscuro
themeToggle.addEventListener("change", () => {
    body.classList.toggle("dark");
});

// Abrir/cerrar sidebar al hacer clic en el botón del menú
menuToggle.addEventListener("click", () => {
    nav.classList.toggle("open");
});

// Cerrar el sidebar si se hace clic fuera de él
document.addEventListener("click", (event) => {
    if (!nav.contains(event.target) && !menuToggle.contains(event.target)) {
        nav.classList.remove("open");
    }
});

// Mostrar el modal de login
openModalBtn.addEventListener("click", () => {
    modal.style.display = "block";
});

// Cerrar el modal cuando se haga clic en la 'X'
closeModal.addEventListener("click", () => {
    modal.style.display = "none";
});

// Cerrar el modal si se hace clic fuera del contenido del modal
window.addEventListener("click", (event) => {
    if (event.target === modal) {
        modal.style.display = "none";
    }
});
