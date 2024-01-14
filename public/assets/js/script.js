document.addEventListener("DOMContentLoaded", function () {
    var btnMostrarModal = document.getElementById("mostrarModalBtn");
    var modal = document.getElementById("miModal");
    var btnCerrarModal = document.getElementById("cerrarModal");

    btnMostrarModal.addEventListener("click", function () {
        modal.style.display = "block";
    });

    btnCerrarModal.addEventListener("click", function () {
        modal.style.display = "none";
    });

    window.addEventListener("click", function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    });
});
