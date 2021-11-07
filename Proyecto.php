<?PHP

$iden = $_POST["ident"];
$inicio = $_POST["fech"];
$final = $_POST["fechf"];
$dias = $_POST["dur"];
$costo = $_POST["cost"];
$cantidad = $_POST["empl"];
$director = $_POST["dir"];
$cedpro = $_POST["cedproppo"];
$invertir = $_POST["dine"];
$metodo= $_POST["met"];

echo "<br>", "Datos del proyecto: ", "<br>", $iden ,"<br>", $inicio, "<br>", $final, "<br>", $dias, "<br>", $costo, "<br>", $cantidad, "<br>", $director, "<br>", $cedpro, "<br>", $invertir, "<br>", $metodo;    
                                                                                                                                                                                                                                                                                                              

$conexion=pg_connect("host=localhost user=postgres port=5432 dbname=finca password=123456"); 


$sql3="insert into proyecto (id_proyecto, fecha_inicial, fecha_final, dias_gastados, costo_materia, numero_trabajadores, director, cedula_de_propietario, dinero_a_invertir, metodo) values ('$iden','$inicio','$final','$dias','$costo','$cantidad','$director','$cedpro','$invertir','$metodo')";

$result = pg_query($conexion, $sql3);											
?>
