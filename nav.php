<?php
$links = array(
	array(
		'title' => 'Inicio',
		'href'  => 'index.php',
	),
	array(
		'title' => 'Blog',
		'href'  => 'index.php?page=blog',
	),
	array(
		'title' => 'Nosotros',
		'href'  => 'index.php?page=nosotros',
	),
	array(
		'title' => 'Contacto',
		'href'  => 'index.php?page=contacto',
	),
);

// Escribir proceso acá.

function navegacion( $links ) {
	echo '<nav><ul>';
	foreach ( $links as $value ) {
		echo '<li><a href="' . $value['href'] . '">' . $value['title'] . '</a></li>';
	}
	echo '</ul></nav>';
}

navegacion( $links );

/*
1) A partir del array $lista, crear un proceso que imprima el siguiente código HTML:

<nav>
	<ul>
		<li><a href="index.php">Inicio</a></li>
		<li><a href="index.php?page=blog">Blog</a></li>
		<li><a href="index.php?page=nosotros">Nosotros</a></li>
		<li><a href="index.php?page=contacto">Contacto</a></li>
	</ul>
</nav>

2) Una vez impreso el código, reformular el proceso como una función.
3) Una vez creada la función, reformular el proceso como una clase.
*/
