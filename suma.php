<?php
function suma( $nums ) {
	$resultado = 0;

	foreach ( $nums as $num ) {
		$resultado += $num;
	}

	echo $resultado;
}

function mayor( $nums ) {
	$mayor = 0;

	foreach ( $nums as $num ) {
		if ( $num > $mayor ) {
			$mayor = $num;
		}
	}

	echo $mayor;
}

$numeros = array( 8, 78, 45, 3, 10, 80, 77 );

echo 'El número más alto en la lista es ';
mayor( $numeros );

// echo 'El resultado de la suma es ';
// suma( $numeros );
