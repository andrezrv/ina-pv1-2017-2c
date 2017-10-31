<?php
if ( ! empty( $_POST['username'] ) && ! empty( $_POST['name'] ) && ! empty( $_POST['password'] ) && ! empty( $_POST['email'] ) ) {
	insert_user(
		$_POST['username'],
		$_POST['name'],
		$_POST['password'],
		$_POST['email']
	);
}
?>

<form action="" method="post">
	<p>
		<label>Nombre completo</label><br />
		<input type="text" name="name" value="">
	</p>

	<p>
		<label>Nombre de usuario</label><br />
		<input type="text" name="username" value="">
	</p>

	<p>
		<label>Email</label><br />
		<input type="email" name="email" value="">
	</p>

	<p>
		<label>Contraseña</label><br />
		<input type="password" name="password" value="">
	</p>

	<p>
		<input type="submit" name="" value="Crear usuario">
	</p>
</form>

<?php
$users = get_users();
?>

<table>
	<tr>
		<th>Nombre completo</th>
		<th>Nombre de usuario</th>
		<th>Email</th>
	</tr>

	<?php
	foreach ( $users as $user ) {
		?>
		<tr>
			<td><?php echo $user['name']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['email']; ?></td>
		</tr>
		<?php
	}
	?>

</table>
