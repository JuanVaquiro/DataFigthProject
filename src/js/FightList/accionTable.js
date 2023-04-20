export function iniciarCombateSelect(item) {
  return async function () {
    const { value: Deportista } = await Swal.fire({
      title: 'Selecciona un deportista para iniciar el registro de datos',
      input: 'radio',
      inputOptions: {
        1: `${item.deportista1}`,
        2: `${item.deportista2}`
      },
      inputValidator: (value) => {
        if (!value) {
          return 'Por favor selecciona un deportista'
        }
      }
    });
    if (Deportista) {
      Swal.fire({
        html: `Haz seleccionado al deporsista #${Deportista}`,
        confirmButtonText: 'Iniciar Combate',
        showCancelButton: true,
        cancelButtonText: 'Cancelar',
      }).then((result) => {
        if (result.isConfirmed) {
          window.location = `./../control/?combate=${item.id}&deportista=${Deportista}`
        }
      })
    }
  }
}


// const BTN_DELET_SELECT = document.querySelectorAll('.eliminar-registro-tabla');
// for (let button of BTN_DELET_SELECT) {
//   button.addEventListener('click', confirmaEliminarRegistro);
// }

// function confirmaEliminarRegistro() {
//   const swalButtons = Swal.mixin({
//     customClass: {
//       confirmButtonColor: '#c72e2e',
//       cancelButtonColor: '#d33',
//     }
//   });

//   swalButtons.fire({
//     title: 'Estas seguro de Eliminar este registro?',
//     text: "!No podrás revertirlo!",
//     icon: 'warning',
//     showCancelButton: true,
//     confirmButtonColor: '#c72e2e',
//     confirmButtonText: 'Si, Eliminar!',
//     cancelButtonText: 'No, cancelar!',
//     reverseButtons: true
//   }).then((result) => {
//     if (result.isConfirmed) {
//       Swal.fire({
//         toast: true,
//         title: 'Registro Eliminado',
//         icon: 'success',
//         position: 'top-end',
//         showConfirmButton: false,
//         timer: 1000
//       })
//     }
//   });
//   return swalButtons;
// }
