<?php
require dirname( __FILE__ ) . '/functions.php';
require dirname( __FILE__ ) . '/public/functions.php';

if ( ! empty( $_GET['page'] ) ) {
	$template = $_GET['page'];
} else {
	$template = 'content';
}

load_template( $template );
