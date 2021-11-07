<?PHP

			
$cedula = $_POST["ced"];
$cedulapro = $_POST["cedepar"];
$nombresaf = $_POST["nomaf"];
$apellidosaf = $_POST["apeaf"];
$direccionaf = $_POST["diraf"];
$telefonoaf = $_POST["telaf"];
$sangreaf = $_POST["rhaf"];
$edadaf = $_POST["edadaf"];
$correoaf= $_POST["emaiaf"];
$paren = $_POST["paren"];


echo "<br>", "Datos del Afiliado: ",  "<br>", $cedula, "<br>", $cedulapro, "<br>", $nombresaf, "<br>", $apellidosaf, "<br>", $direccionaf, "<br>", $telefonoaf, "<br>", $sangreaf, "<br>", $edadaf, "<br>", $correoaf, "<br>", $paren;                                                                                                                                                                                                                                                                                                                   

$conexion=pg_connect("host=localhost user=postgres port=5432 dbname=finca password=123456"); 


$sql3="insert into Afiliado (cedula_de_afiliado, cedula_de_empleado, nombres, apellidos, direccion, telefono, rh, edad, correo, parentesco) values ('$cedula','$cedulapro','$nombresaf','$apellidosaf','$direccionaf','$telefonoaf','$sangreaf','$edadaf','$correoaf','$paren')";

$result = pg_query($conexion, $sql3);											
							
?>