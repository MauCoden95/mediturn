/*Fecha y hora*/
function actualizarFechaHora() {
    const elementoFechaHora = document.getElementById("date-hour");
    const fechaHoraActual = new Date();
    const opcionesFechaHora = { year: 'numeric', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', second: 'numeric' };
    const fechaHoraFormateada = fechaHoraActual.toLocaleDateString('es-ES', opcionesFechaHora);

    elementoFechaHora.textContent = fechaHoraFormateada;
  }

  // Llama a la función inicialmente para mostrar la fecha y hora actual
  actualizarFechaHora();

  // Configura una actualización periódica cada segundo
  setInterval(actualizarFechaHora, 1000);





/*Boton abrir y cerrar*/
const btnClose = document.querySelector('.btn_close');
const btnAdd = document.querySelector('.btn_add');
const formCreate = document.querySelector('#form_create');


if(btnClose){
    btnClose.addEventListener('click', () => {
        formCreate.style.top = '-100rem';
    });
}

if(btnAdd){
    btnAdd.addEventListener('click', () => {
        formCreate.style.top = '0';
    });
}
