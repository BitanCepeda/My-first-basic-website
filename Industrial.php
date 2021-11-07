<?PHP

$cedula = $_POST["cedin"];
$cedpro = $_POST["cedprop"];
$nombres = $_POST["nomin"];
$apellidos = $_POST["apein"];
$direccion = $_POST["dirin"];
$telefono = $_POST["telin"];
$sangre = $_POST["rhin"];
$edad = $_POST["edain"];
$correo= $_POST["emain"];

echo "<br>", "Datos del empleado industrial: ",  "<br>", $cedula, "<br>", $cedpro, "<br>", $nombres, "<br>", $apellidos, "<br>", $direccion, "<br>", $telefono, "<br>", $sangre, "<br>", $edad, "<br>", $correo;    
                                                                                                                                                                                                                                                                                                               

$conexion=pg_connect("host=localhost user=postgres port=5432 dbname=finca password=123456"); 


$sql3="insert into empleado_industrial (cedula_de_empleado, cedula_de_propietario, nombres, apellidos, direccion, telefono, rh, edad, correo) values ('$cedula','$cedpro','$nombres','$apellidos','$direccion','$telefono','$sangre','$edad','$correo')";


	$result = pg_query($conexion, $sql3);											
?>
