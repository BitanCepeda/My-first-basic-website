<?PHP

$cedula = $_POST["cedi"];
$cedulapro = $_POST["cedprop"]; 
$nombres = $_POST["nomi"];
$apellidos = $_POST["apei"];
$direccion = $_POST["diri"];
$telefono = $_POST["teli"];
$sangre = $_POST["rhi"];
$edad = $_POST["edai"];
$correo= $_POST["emaii"];

echo "<br>", "Datos del ingeniero: ",  "<br>", $cedula, "<br>", $cedulapro, "<br>", $nombres, "<br>", $apellidos, "<br>", $direccion, "<br>", $telefono, "<br>", $sangre, "<br>", $edad, "<br>", $correo;                                                                                                                                                                                                                                                                                                                   

$conexion=pg_connect("host=localhost user=postgres port=5432 dbname=finca password=123456"); 


$sql3="insert into ingeniero (cedula_de_empleado, cedula_de_propietario, nombres, apellidos, direccion, telefono, rh, edad, correo) values ('$cedula','$cedulapro','$nombres','$apellidos','$direccion','$telefono','$sangre','$edad','$correo')";




	$result = pg_query($conexion, $sql3);											
?>