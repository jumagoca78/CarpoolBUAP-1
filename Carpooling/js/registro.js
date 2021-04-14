var chechkboxConductor = document.getElementById('conductorCheck'),
    menu = document.getElementById('conductorDiv');

mostrarDatos.addEventListener('click', function (e) {
    e.preventDefault();
    menu.classList.add('active');
})

cerrarDatos.addEventListener('click', function (e) {
    e.preventDefault();
    menu.classList.remove('active');
})