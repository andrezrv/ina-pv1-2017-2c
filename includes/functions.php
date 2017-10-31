<?php
function db_init() {
	global $db_connection;

	$db_connection = mysqli_connect( 'localhost', 'root', 'root', 'pv1' );
}

function get_users() {
  global $db_connection;

  $result = mysqli_query( $db_connection, "SELECT * FROM users" );

  $rows = array();

  if ( mysqli_num_rows( $result ) ) {
    while ( $row = mysqli_fetch_assoc( $result ) ) {
      $rows[] = $row;
    }
  }

  return $rows;
}

function get_user( $id ) {
	global $db_connection;

	$result = mysqli_query( $db_connection, "SELECT * FROM users WHERE id = $id" );

	$row = array();

	$num_rows = mysqli_num_rows( $result );

	if ( $num_rows ) {
		// Extrae solo el primer elemento y lo asigna a $row.
		$row = mysqli_fetch_assoc( $result );
	}

	return $row;
}

function insert_user( $username, $name, $password, $email ) {
  global $db_connection;

  $query = "INSERT INTO users (username, name, password, email) VALUES ('$username', '$name', '$password', '$email')";

  if ( mysqli_query( $mysqli, $query ) ) {
    echo "El usuario se insertó correctamente";
  }
}
