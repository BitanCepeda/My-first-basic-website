<html>
  <head>
	<title>Consultar datos a mi SGBD</title>
	<meta charset="UTF-8">
	<link href="Estilo.css" rel=StyleSheet type=text/css >
	<link href="Estilo2.css" rel=StyleSheet type=text/css >
	</head>
  <body>
  <img src="cacao1.jpg";></img>

<hr/>
  <p id="tit">Consultando bases de datos</p>
<hr/>

<h2>Propietario</h2>

   <?PHP
//Primero hacemos las conexiones
$conexion =pg_connect("host=localhost user=postgres port=5432 dbname=finca  password=123456"); 
//hacemos la consulta de los valores que llenaran el combo 
$result = pg_query("select * from propietario");

?>
<p>	
<!--Creamos el select con el atributo name "cedeprop" que identificara el archivo registrar.php-->
<?PHP
while($row = pg_fetch_array($result)) { 
//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para empleado agrícola
$nombre = $row["nombres"] ; //Asignamos a la variable el campo que queremos guardar
$apellidos = $row["apellidos"] ; //Asignamos a la variable el campo que queremos guardar
$cedula = $row["cedula_de_propietario"] ; //Asignamos a la variable el campo que queremos guardar
$direccion = $row["direccion"] ;
$sexo = $row["sexo"];
$rh = $row["rh"];
$telefono = $row["telefono"];
$correo = $row["correo"];
echo " ".$nombre." /".$apellidos."  / ".$cedula_de_propietario."  / ".$direccion." /  ".$sexo."  / ".$rh." /  ".$telefono." /  ".$correo."<br>";  
//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
} //Cerramos el ciclo 
?>
</p>
<hr/>

<h2>Clientes</h2>

   <?PHP
//Primero hacemos las conexiones
$conexion =pg_connect("host=localhost user=postgres port=5432 dbname=finca  password=123456"); 
//hacemos la consulta de los valores que llenaran el combo 
$result = pg_query("select * from comprador");

?>
<p>	
<!--Creamos el select con el atributo name "cedeprop" que identificara el archivo registrar.php-->
<?PHP
while($row = pg_fetch_array($result)) { 
//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para empleado agrícola
$nombre = $row["nombres"] ; //Asignamos a la variable el campo que queremos guardar
$apellidos = $row["apellidos"] ; //Asignamos a la variable el campo que queremos guardar
$cedula = $row["cedula_de_comprador"] ; //Asignamos a la variable el campo que queremos guardar
$direccion = $row["direccion"] ;
$tipo = $row["tipo"];
$cedulapro = $row["cedula_de_propietario"];
$telefono = $row["telefono"];
$correo = $row["correo"];
echo " ".$nombre." /".$apellidos."  / " .$cedula." /".$cedulapro."  / ".$direccion." /  ".$tipo." /  ".$telefono." /  ".$correo."<br>";  
//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
} //Cerramos el ciclo 
?>
</p>
<hr/>

<h2>Agricultor</h2>

   <?PHP
//Primero hacemos las conexiones
$conexion =pg_connect("host=localhost user=postgres port=5432 dbname=finca  password=123456"); 
//hacemos la consulta de los valores que llenaran el combo 
$result = pg_query("select * from empleado_agricola");

?>
<p>	
<!--Creamos el select con el atributo name "cedeprop" que identificara el archivo registrar.php-->
<?PHP
while($row = pg_fetch_array($result)) { 
//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para empleado agrícola
$nombre = $row["nombres"] ; //Asignamos a la variable el campo que queremos guardar
$apellidos = $row["apellidos"] ; //Asignamos a la variable el campo que queremos guardar
$cedula = $row["cedula_de_empleado"] ; //Asignamos a la variable el campo que queremos guardar
$direccion = $row["direccion"] ;
$rh = $row["rh"];
$sueldo = $row["sueldo"];
$edad = $row["edad"];
$cedulapro = $row["cedula_de_propietario"];
$telefono = $row["telefono"];
$correo = $row["correo"];
echo " ".$nombre." /".$apellidos."  / " .$cedula." /".$cedulapro."  / ".$direccion." /  ".$rh." /  ".$sueldo. " / ".$edad. " / ".$telefono." /  ".$correo."<br>";  
//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
} //Cerramos el ciclo 
?>
</p>
<hr/>

<h2>Industrial</h2>

   <?PHP
//Primero hacemos las conexiones
$conexion =pg_connect("host=localhost user=postgres port=5432 dbname=finca  password=123456"); 
//hacemos la consulta de los valores que llenaran el combo 
$result = pg_query("select * from empleado_industrial");

?>
<p>	
<!--Creamos el select con el atributo name "cedeprop" que identificara el archivo registrar.php-->
<?PHP
while($row = pg_fetch_array($result)) { 
//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para empleado agrícola
$nombre = $row["nombres"] ; //Asignamos a la variable el campo que queremos guardar
$apellidos = $row["apellidos"] ; //Asignamos a la variable el campo que queremos guardar
$cedula = $row["cedula_de_empleado"] ; //Asignamos a la variable el campo que queremos guardar
$direccion = $row["direccion"] ;
$rh = $row["rh"];
$edad = $row["edad"];
$cedulapro = $row["cedula_de_propietario"];
$telefono = $row["telefono"];
$correo = $row["correo"];
echo " ".$nombre." /".$apellidos."  / " .$cedula." /".$cedulapro."  / ".$direccion." /  ".$rh." / ".$edad. " / ".$telefono." /  ".$correo."<br>";  
//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
} //Cerramos el ciclo 
?>
</p>
<hr/>

<h2>Ingeniero</h2>

   <?PHP
//Primero hacemos las conexiones
$conexion =pg_connect("host=localhost user=postgres port=5432 dbname=finca  password=123456"); 
//hacemos la consulta de los valores que llenaran el combo 
$result = pg_query("select * from ingeniero");

?>
<p>	
<!--Creamos el select con el atributo name "cedeprop" que identificara el archivo registrar.php-->
<?PHP
while($row = pg_fetch_array($result)) { 
//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para empleado agrícola
$nombre = $row["nombres"] ; //Asignamos a la variable el campo que queremos guardar
$apellidos = $row["apellidos"] ; //Asignamos a la variable el campo que queremos guardar
$cedula = $row["cedula_de_empleado"] ; //Asignamos a la variable el campo que queremos guardar
$direccion = $row["direccion"] ;
$rh = $row["rh"];
$edad = $row["edad"];
$cedulapro = $row["cedula_de_propietario"];
$telefono = $row["telefono"];
$correo = $row["correo"];
echo " ".$nombre." /".$apellidos."  / " .$cedula." /".$cedulapro."  / ".$direccion." /  ".$rh." / ".$edad. " / ".$telefono." /  ".$correo."<br>";  
//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
} //Cerramos el ciclo 
?>
</p>
<hr/>

<h2>Afiliado</h2>

   <?PHP
//Primero hacemos las conexiones
$conexion =pg_connect("host=localhost user=postgres port=5432 dbname=finca  password=123456"); 
//hacemos la consulta de los valores que llenaran el combo 
$result = pg_query("select * from afiliado");

?>
<p>	
<!--Creamos el select con el atributo name "cedeprop" que identificara el archivo registrar.php-->
<?PHP
while($row = pg_fetch_array($result)) { 
//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para empleado agrícola
$nombre = $row["nombres"] ; //Asignamos a la variable el campo que queremos guardar
$apellidos = $row["apellidos"] ; //Asignamos a la variable el campo que queremos guardar
$cedula = $row["cedula_de_empleado"] ; //Asignamos a la variable el campo que queremos guardar
$direccion = $row["direccion"] ;
$rh = $row["rh"];
$edad = $row["edad"];
$cedulapro = $row["cedula_de_afiliado"];
$telefono = $row["telefono"];
$correo = $row["correo"];
$parentesco =$row["parentesco"];

echo " ".$nombre." /".$apellidos."  / " .$cedulapro." /".$cedula."  / ".$parentesco. " / ".$direccion." /  ".$rh." / ".$edad. " / ".$telefono." /  ".$correo."<br>";  
//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
} //Cerramos el ciclo 
?>
</p>
<hr/>

<h2>Proyecto</h2>

   <?PHP
//Primero hacemos las conexiones
$conexion =pg_connect("host=localhost user=postgres port=5432 dbname=finca  password=123456"); 
//hacemos la consulta de los valores que llenaran el combo 
$result = pg_query("select * from proyecto");

?>
<p>	
<!--Creamos el select con el atributo name "cedeprop" que identificara el archivo registrar.php-->
<?PHP
while($row = pg_fetch_array($result)) { 
//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para empleado agrícola
$id = $row["id_proyecto"] ; //Asignamos a la variable el campo que queremos guardar
$inicio = $row["fecha_inicial"] ; //Asignamos a la variable el campo que queremos guardar
$final = $row["fecha_final"] ; //Asignamos a la variable el campo que queremos guardar
$dias = $row["dias_gastados"] ;
$costo = $row["costo_materia"];
$trabaj = $row["numero_trabajadores"];
$director = $row["director"];
$cedula = $row["cedula_de_propietario"];
$dinero = $row["dinero_a_invertir"];
$metodo =$row["metodo"];

echo " ".$id." /".$inicio."  / " .$final." /".$dias."  / ".$costo. " / ".$trabaj." /  ".$director." / ".$cedula. " / ".$dinero." /  ".$metodo."<br>";  
//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
} //Cerramos el ciclo 
?>
</p>
<hr/>

<h2>Tipo de proyecto</h2>

   <?PHP
//Primero hacemos las conexiones
$conexion =pg_connect("host=localhost user=postgres port=5432 dbname=finca  password=123456"); 
//hacemos la consulta de los valores que llenaran el combo 
$result = pg_query("select * from proyecto_tipo");

?>
<p>	
<!--Creamos el select con el atributo name "cedeprop" que identificara el archivo registrar.php-->
<?PHP
while($row = pg_fetch_array($result)) { 
//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para empleado agrícola
$id = $row["id_proyecto"] ; //Asignamos a la variable el campo que queremos guardar
$tipo = $row["tipo_de_proyecto"] ; //Asignamos a la variable el campo que queremos guardar
$nombre = $row["nombre_de_proyecto"] ; //Asignamos a la variable el campo que queremos guardar


echo " ".$id." /".$tipo."  / " .$nombre."<br>";  
//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
} //Cerramos el ciclo 
?>
</p>
<hr/>

<h2>Revision</h2>

   <?PHP
//Primero hacemos las conexiones
$conexion =pg_connect("host=localhost user=postgres port=5432 dbname=finca  password=123456"); 
//hacemos la consulta de los valores que llenaran el combo 
$result = pg_query("select * from revision_del_proyecto");

?>
<p>	
<!--Creamos el select con el atributo name "cedeprop" que identificara el archivo registrar.php-->
<?PHP
while($row = pg_fetch_array($result)) { 
//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para empleado agrícola
$id = $row["numero_revision_proyecto"] ; //Asignamos a la variable el campo que queremos guardar
$fecha = $row["fecha"] ; //Asignamos a la variable el campo que queremos guardar
$duracion = $row["duracion"] ; //Asignamos a la variable el campo que queremos guardar
$cedula = $row["cedula_de_empleado"];

echo " ".$id." /".$fecha."  / " .$duracion." /".$cedula."<br>";  
//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
} //Cerramos el ciclo 
?>
</p>
<hr>

<h2>Materia prima</h2>

   <?PHP
//Primero hacemos las conexiones
$conexion =pg_connect("host=localhost user=postgres port=5432 dbname=finca  password=123456"); 
//hacemos la consulta de los valores que llenaran el combo 
$result = pg_query("select * from materia_prima");

?>
<p>	
<!--Creamos el select con el atributo name "cedeprop" que identificara el archivo registrar.php-->
<?PHP
while($row = pg_fetch_array($result)) { 
//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para empleado agrícola
$nombre = $row["nombre"] ; //Asignamos a la variable el campo que queremos guardar
$cantidad = $row["cantidad"] ; //Asignamos a la variable el campo que queremos guardar
$precio = $row["precio"] ; //Asignamos a la variable el campo que queremos guardar
$id = $row["id_proyecto"] ;



echo " ".$nombre." /".$cantidad."  / " .$precio." /".$id."<br>";  
//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
} //Cerramos el ciclo 
?>
</p>
<hr/>

  </body>
  </html>