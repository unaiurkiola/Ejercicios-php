<html>
<body>



<?php
$filas=0;
if(isset($_GET["filas"])) {
	if(is_int($_GET["filas"])) {
$filas=	$_GET["filas"];
}
}
for ($x=0; $x<$filas; $x++) {
 ?>


<table border="2px">
<tr>
<td>Unai</td><td>Urkiola</td>
</tr>





<?php
}

?>


</table>
</body>
</html>
