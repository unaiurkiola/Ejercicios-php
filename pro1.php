<html>
<head>
<title>PRUEBA 1</title>
</head>

<body>
<form action="pro1.html" method="post">
Buenas <?php echo $_POST["nombre"]; ?>!
Su registro ha finalizado con los siguentes datos:  <br />
Edad: <?php echo $_POST["edad"];?> <br />
E-Mail: <?php echo $_POST["mail"];?> <br />
Telefono: <?php echo $_POST["telefono"];?> <br />
Direccion: <?php echo $_POST["direccion"];?> <br /><br />
<input type="submit" value="Volver a llenar el formulario">
</form>
</body>
</html>