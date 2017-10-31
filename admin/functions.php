<?php
function load_admin_template( $name ) {
	$file = '';

	// Ubicación absoluta a carpeta public.
	$dir = dirname( __FILE__ );

	// Construir la ubicación absoluta de $name.
	$file = $dir . '/templates/' . $name . '.php';

	// Chequeo si el archivo existe.
	if ( file_exists( $file ) ) {
		include $file;
	}
}
