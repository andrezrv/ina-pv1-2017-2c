<?php
require dirname( __FILE__ ) . '/includes/functions.php';
require dirname( __FILE__ ) . '/admin/functions.php';

db_init();

/*if ( ! empty( $_GET['page'] ) ) {
	$template = $_GET['page'];
} else {
	$template = 'content';
}*/

load_admin_template( 'users' );
