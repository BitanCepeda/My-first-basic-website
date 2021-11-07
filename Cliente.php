<?PHP

$cedulacl = $_POST["cedco"];
$nombrescl = $_POST["nomco"];
$apellidoscl = $_POST["apeco"];
$tipocl = $_POST["tipo"];
$direccioncl = $_POST["dirco"];
$correocl= $_POST["emaic"];
$cedprop= $_POST["cedprop"];
$telefonocl = $_POST["telc"];

echo "<br>", "Datos del cliente: ",  "<br>", $cedulacl, "<br>", $nombrescl, "<br>", $apellidoscl,"<br>", $tipocl, "<br>", $direccioncl, "<br>", $correocl, "<br>", $cedprop, "<br>", $telefonocl;                                                                                                                                                                                                                                                                                                                  

$conexion=pg_connect("host=localhost user=postgres port=5432 dbname=finca password=123456"); 


$sql3="insert into comprador (cedula_de_comprador, nombres, apellidos, tipo, direccion, correo, cedula_de_propietario, telefono) values ('$cedulacl','$nombrescl','$apellidoscl','$tipocl','$direccioncl','$correocl','$cedprop','$telefonocl')";




	$result = pg_query($conexion, $sql3);

?>