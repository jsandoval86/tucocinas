var $ = jQuery = require('jquery'),
	bootstrap = require('bootstrap')

var sideBar = jQuery('#sideBar')

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