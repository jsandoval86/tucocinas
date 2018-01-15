var $ = jQuery = require('jquery'),
	bootstrap = require('bootstrap'),
	bootbox = require('bootbox')

var sideBar = jQuery('#sideBar')
var botonesConfirmacion = {
	confirm: {
		label: 'Ok',
		className: 'btn-success-confirm'
	},
	cancel: {
		label: 'No',
		className: 'btn-default'
	}
}

$('#menu-button').click(function () {
	sideBar.toggle()
})

/**
* codigo por: https://www.abeautifulsite.net/whipping-file-inputs-into-shape-with-bootstrap-3
* disparar un evento cuando se cargue una imagen a un input
*/
$(document).on('change', ':file', function() {

		var input = $(this),
			numFiles = input.get(0).files ? input.get(0).files.length : 1,
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');

		input.trigger('fileselect', [numFiles, label]);

});

/**
* Remplazar El label del input file por el nombre del archivo
*/
$(':file').on('fileselect', function(event, numFiles, label) {
	var inputFile = $(this)
	var labelInputFile = $('#recetaSubirImagen')
		.find('#nombreArchivo')

	labelInputFile.html(
		label
	)

});

/**
* Eliminar ingrediente
*/
$('.receta-ingredientes-item-borrar').on('click', function(){
	console.log('asasas')
	var MESSAGE = 'Quieres borrar este ingrediente?'
	// Abrir ventana de confirmación
	bootbox.confirm({
		size: 'small',
		message: MESSAGE,
		buttons: botonesConfirmacion,
		callback: function(result) {
			if(result) {
				console.log('Borrando ingrediente...')
			}
		}
	})
})
