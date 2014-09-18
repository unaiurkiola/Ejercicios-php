<html>
<body>

<?php
// http://stackoverflow.com/questions/3135068/is-int-cannot-check-get-in-php
$num = isset($_GET['filas']) ? (int) $_GET['filas'] : 0;

if(!is_int($num) || $num <= 0){
    echo "Debe insertar un numero";
} else {
    echo '<table border="1">';
    for ($x=0;$x<$num;$x++) {
        echo "<tr><td>Jill</td><td>Smith</td></tr>";
    }
    echo '</table>';
}
?>

</body>
</html>