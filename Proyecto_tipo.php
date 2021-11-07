<?PHP

$iden = $_POST["ident"];
$tipo = $_POST["tpo"];
$nombre = $_POST["nomb"];


echo "<br>", "Datos del tipo de proyecto: ", "<br>",$iden, "<br>", $tipo, "<br>", $nombre;
;    
                                                                                                                                                                                                                                                                                                               

$conexion=pg_connect("host=localhost user=postgres port=5432 dbname=finca password=123456"); 


$sql3="insert into proyecto_tipo (id_proyecto, tipo_de_proyecto, nombre_de_proyecto) values ('$iden','$tipo','$nombre')";

$result = pg_query($conexion, $sql3);											
?>