<?PHP

$cedula = $_POST["cedc"];
$cedpro = $_POST["cedpro"];
$nombres = $_POST["nomc"];
$apellidos = $_POST["apec"];
$direccion = $_POST["dirc"];
$telefono = $_POST["telc"];
$sangre = $_POST["rhc"];
$edad = $_POST["edac"];
$correo= $_POST["emaic"];

echo "<br>", "Datos del Agricultor: ",  "<br>", $cedula, "<br>", $cedpro, "<br>", $nombres, "<br>", $apellidos, "<br>", $direccion, "<br>", $telefono, "<br>", $sangre, "<br>", $edad, "<br>", $correo;    
                                                                                                                                                                                                                                                                                                               

$conexion=pg_connect("host=localhost user=postgres port=5432 dbname=finca password=123456"); 


$sql3="insert into empleado_agricola (cedula_de_empleado, cedula_de_propietario, nombres, apellidos, direccion, telefono, rh, edad, correo) values ('$cedula','$cedpro','$nombres','$apellidos','$direccion','$telefono','$sangre','$edad','$correo')";




	$result = pg_query($conexion, $sql3);											
?>
