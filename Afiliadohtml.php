	  <html>

<head>
	<title>Insertar datos afiliado</title>
	<meta charset="UTF-8">
	<link href="Estilo.css" rel=StyleSheet type=text/css >
	<link href="Estilo2.css" rel=StyleSheet type=text/css >
	</head>
 

<body>
  <img src="cacao1.jpg";></img>

  <?PHP
//Primero hacemos las conexiones
$conexion =pg_connect("host=localhost user=postgres port=5432 dbname=finca  password=123456"); 
//hacemos la consulta de los valores que llenaran el combo 
$result = pg_query("select * from empleado_agricola");

?>
  
<hr/>
  <p id="tit">Llenando bases de datos</p>
<hr/>
	  
	  
	  
	  <!--Comenzamos la entrada de datos del afiliado-->
  <h2>Afiliado</h2>
  <form  action="Afiliado.php" method=POST>
  <p>Digite su cedula: <input name="ced" type=number placeholder="Su cedula aqui" required />
   </p>
   
   <p>Escoja a su empleado parentesco por favor:
   <select name="cedepar" size=1> 
<!--Creamos el select con el atributo name "cedepar" que identificara el archivo registrar.php-->
<?PHP
while($row = pg_fetch_array($result)) { 
//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para empleado agrícola
$nombre = $row["nombres"] ; //Asignamos a la variable el campo que queremos guardar
$apellidos = $row["apellidos"] ; //Asignamos a la variable el campo que queremos guardar
$cedula = $row["cedula_de_empleado"] ; //Asignamos a la variable el campo que queremos guardar
echo "<option value=".$cedula."> ".$nombre." ".$apellidos."</option>";  
//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
} //Cerramos el ciclo 
?>
</select>
</p>
   
  <p>Escriba sus nombres por favor: <input name="nomaf" type=text placeholder="Sus nombres aqui" required />
   </p>
  <p>Escriba sus apellidos por favor: <input name="apeaf" type=text placeholder="Sus apellidos aqui" required />
   </p>
  <p>Escriba su direccion por favor: <input name="diraf" type=text placeholder="Su direccion aqui" required />
   </p>
  <p>Escriba su numero telefonico por favor: <input name="telaf" type=number placeholder="Su telefono aqui"/>
   </p>
  <p>Escriba su tipo de sangre por favor: (Ejemplo: A+, O-) <input name="rhaf" type=text maxlength=2 placeholder="Su RH aqui"/>
   </p>
  <p>Escriba su edad por favor: <input name="edadaf" type=number placeholder="Su edad aqui"/>
	</p>
  <p>Escriba su correo electronico por favor: <input name="emaiaf" type=email placeholder="Su correo electronico aqui"/>
   </p>
  <p>Escriba el parentesco con el empleado por favor : <input name="paren" type=text placeholder="El parentesco aqui"/>
  </p>
  
  <input type="submit" value="GUARDAR"/>
  <hr/>
  </form>
  	
  
  
  </body>
  </html>