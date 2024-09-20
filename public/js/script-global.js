// Sidebar toggle functionality
const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
    const sidebar = document.querySelector("#sidebar");
    sidebar.classList.toggle("expand");

    // Cerrar todos los dropdowns cuando el sidebar colapsa
    if (!sidebar.classList.contains('expand')) {
        document.querySelectorAll('.collapse.show').forEach(function (dropdown) {
            dropdown.classList.remove('show');  // Oculta todos los dropdowns abiertos
        });
    }
});
