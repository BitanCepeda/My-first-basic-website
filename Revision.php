<?PHP

$iden = $_POST["ident"];
$inicio = $_POST["fech"];
$dias = $_POST["durre"];
$ingeniero = $_POST["cedingre"];


echo "<br>", "Datos de revision de proyecto: ", "<br>", $iden ,"<br>", $inicio, "<br>", $dias, "<br>", $ingeniero;


$conexion=pg_connect("host=localhost user=postgres port=5432 dbname=finca password=123456"); 


$sql3="insert into revision_del_proyecto (numero_revision_proyecto, fecha, duracion, cedula_de_empleado) values ('$iden','$inicio','$dias','$ingeniero')";

$result = pg_query($conexion, $sql3);											
?>