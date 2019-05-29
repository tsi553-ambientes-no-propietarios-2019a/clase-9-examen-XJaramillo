<?php 
include('common/utils.php');

if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>
	<h2>Registro</h2>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
	<form action="php/process_registration.php" method="post">
		<div>
			<label>Nombre:</label>
			<br><br>
			<input type="text" name="name" required="required">
		</div>
		<div>
        <label>Rol: </label>
			<select name="role" required="required">
				<option value=" ">Seleccionar</option>
				<option value="administrador">Administrador</option>
				<option value="cliente">Cliente</option>
				<label>...</label>
			</select>
		</div>
		<div>
			<label>Username</label>
			<input type="text" name="username" required="required">
		</div>
        <div>
			<label>Password</label>
			<input type="password" name="password" required="required">
		</div>
        <div>
			<label>Confirmar contraseña</label>
			<input type="password" name="con_pass" required="required">
		</div>
		<div>
			<button>Registrarme</button>
		</div>
	</form>
</body>
</html>