<?PHP

$nombre = $_POST["nomma"];
$cantidad = $_POST["canma"];
$precio = $_POST["precmat"];
$iden = $_POST["ident"];


echo "<br>", "Datos de materia prima: ", "<br>", $nombre ,"<br>", $cantidad, "<br>", $precio, "<br>", $iden;
   
                                                                                                                                                                                                                                                                                                              

$conexion=pg_connect("host=localhost user=postgres port=5432 dbname=finca password=123456"); 


$sql3="insert into materia_prima (nombre, cantidad, precio, id_proyecto) values ('$nombre','$cantidad','$precio','$iden')";

$result = pg_query($conexion, $sql3);											
?>