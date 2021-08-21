<!--<form action="controlador/CtrlLogin.php" method="POST">
    <label for="usu">Usuario:</label>
    <input type="text" name="usu" id="usu" autofocus>

    <label for="pass">Contraseña:</label>
    <input type="password" name="pass" id="pass">

    <input type="submit" value="Iniciar sesión">
</form>-->


<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>Axie Infinity hola</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
	<body>
<form action="controlador/CtrlLogin.php" class="box" method="POST">
    <div><img  class="avatar" src="img/Logo.jpg" alt="Logo de Inicio"></div>
        <h1>Inicio de sesion</h1>
        
        <input type="text" name="usu" id="usu" placeholder="Correo"autofocus>
        <input type="password" name="pass" id="pass" placeholder="Contraseña">
        
        <input type="submit" name="" value="Iniciar sesión">

</form>
</body>
</html>