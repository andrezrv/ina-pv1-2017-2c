<?php
// Todos los archivos que producen HTML
// están en public/templates.

// Buscar e incluir un archivo .php
// que está dentro de public/templates.
function load_template( $name ) {
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
