// const BTN_INIT_SELECT = document.querySelectorAll('.iniciar_combate_select');
// for (let button of BTN_INIT_SELECT) {
//   button.addEventListener('click', iniciarCombateSelect);
//   console.log(BTN_INIT_SELECT)
// }

// const BTN_DELET_SELECT = document.querySelectorAll('.eliminar-registro-tabla');
// for (let button of BTN_DELET_SELECT) {
//   button.addEventListener('click', confirmaEliminarRegistro);
// }

// async function iniciarCombateSelect() {
//   const { value: Deportista } = await Swal.fire({
//     title: 'Selecciona un deportista para iniciar el registro de datos',
//     input: 'radio',
//     inputOptions: {
//       'Neil Sims': 'Deportista #1',
//       'Diego Franco': 'Deportista #2'
//     },
//     inputValidator: (value) => {
//       if (!value) {
//         return 'Por favor selecciona un deportista'
//       }
//     }
//   });
//   if (Deportista) {
//     Swal.fire({
//       html: `Haz seleccionado: ${Deportista}`,
//       confirmButtonText: 'Iniciar Combate',
//     });
//   }
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
