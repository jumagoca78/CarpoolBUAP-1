/* Handles the data driver visibility */

var mostrarDatos = document.getElementById('conductorCheck'),
    menu = document.getElementById('conductorDiv');
    cerrarDatos = document.getElementById('pasajero');      

mostrarDatos.addEventListener('click', function (e) {
    e.preventDefault();
    menu.classList.add('active');
})

cerrarDatos.addEventListener('click', function (e) {
    e.preventDefault();
    menu.classList.remove('active');
});
