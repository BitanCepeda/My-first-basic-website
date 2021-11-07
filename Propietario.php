<?PHP
$cedula = $_POST["ced"];
$nombres = $_POST["nom"];
$apellidos = $_POST["ape"];
$direccion = $_POST["dir"];
$genero = $_POST["sexo"];
$sangre = $_POST["rh"];
$telefono = $_POST["tel"];
$correo= $_POST["emai"];

echo "<br>", "Datos del propietario: ",  "<br>", $cedula, "<br>", $nombres, "<br>", $apellidos, "<br>", $direccion, "<br>", $genero, "<br>", $sangre, "<br>", $telefono, "<br>", $correo;                                                                                                                                                                                                                                                                                                                   

$conexion=pg_connect("host=localhost user=postgres port=5432 dbname=finca password=123456"); 


$sql3="insert into propietario (cedula_de_propietario, nombres, apellidos, direccion, sexo, rh, telefono, correo) values ('$cedula','$nombres','$apellidos','$direccion','$genero','$sangre','$telefono','$correo')";




	$result = pg_query($conexion, $sql3);											
?>
