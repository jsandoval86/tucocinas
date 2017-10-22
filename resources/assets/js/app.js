var $ = jQuery = require('jquery'),
	bootstrap = require('bootstrap')

var sideBar = jQuery('#sideBar')

$('#menu-button').click(function () {
	sideBar.toggle()
})