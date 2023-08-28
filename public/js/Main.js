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
const formAdd = document.querySelector('.form_add');
const btnSave = document.querySelector('.save');


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


if (btnAdd) {
    btnSave.addEventListener('click', () => {
        let inputs = formAdd.querySelectorAll("input");
    
        inputs.forEach(function(input) {
            input.value = "";
        });
    });   
    
    
}















/*SweetAlert*/
document.addEventListener('livewire:load', function () {
    Livewire.on('save_pacient_success', function () {
        Swal.fire('Éxito', 'El paciente se guardo correctamente', 'success');
    });
});



function showSuccessAlert(message) {
    Swal.fire({
        icon: 'success',
        title: 'Éxito',
        text: message
    });
}










/*Borrar Formulario*/
const createPacientForm = document.querySelectorAll('#createPacientForm input');
const btncreatePacientForm = document.querySelector('#buttonCreatePacientForm');



if (btncreatePacientForm) {
    btncreatePacientForm.addEventListener('click', ()=> {
        createPacientForm.forEach(function(input) {
            input.value = "";
        })
    })
}