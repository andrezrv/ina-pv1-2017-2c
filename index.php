<?php
require dirname( __FILE__ ) . '/includes/functions.php';
require dirname( __FILE__ ) . '/public/functions.php';

db_init();

$users = get_users();

// var_dump( $users );

/*foreach ( $users as $user ) {
	echo 'Nombre de usuario: ' . $user['username'] . '<br />';
	echo 'Email: ' . $user['email'] . '<br />';
}

die();*/

if ( ! empty( $_GET['page'] ) ) {
	$template = $_GET['page'];
} else {
	$template = 'content';
}

load_template( $template );
