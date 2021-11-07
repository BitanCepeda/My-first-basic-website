	<html>

<head>
	<title>Insertar datos Cliente</title>
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
$result = pg_query("select * from propietario");

?>
  
<hr/>
  <p id="tit">Llenando bases de datos</p>
<hr/>
	
	<!--Comenzamos la entrada de datos del comprador-->
	<a id=comprador></a>
  <h2>Cliente</h2>
  <form action="Cliente.php" method=POST> 
   <p>Digite su cedula: <input name="cedco" type=number placeholder="Su cedula aqui" required />
   </p>
   <p>Escriba sus nombres por favor: <input name="nomco" type=text placeholder="Sus nombres aqui" required />
	</p>
  <p>Escriba sus apellidos por favor: <input name="apeco" type=text placeholder="Sus apellidos aqui" required />
	</p>
  <p>Usted es usuario:
	<select name=tipo size=1>
	<option value=Premium>Premium</option>
	<option value=Gold>Gold</option>
	<option value=Plata>Plata</option>
	<option value=Normal selected>Normal</option>
     </select>
    </p>
  <p>Escriba su direccion por favor: <input name="dirco" type=text placeholder="Su direccion aqui" required />
	</p>
  <p>Escriba su correo electronico por favor: <input name="emaic" type=email placeholder="Su correo electronico aqui"/>
	</p>
	
	<p>Escoja al propietario de la finca por favor:
	 <select name="cedprop" size=1> 
<!--Creamos el select con el atributo name "cedeprop" que identificara el archivo registrar.php-->
<?PHP
while($row = pg_fetch_array($result)) { 
//Iniciamos un ciclo para recorrer la variable $result  que tiene la consulta hecha para empleado agrícola
$nombre = $row["nombres"] ; //Asignamos a la variable el campo que queremos guardar
$apellidos = $row["apellidos"] ; //Asignamos a la variable el campo que queremos guardar
$cedula = $row["cedula_de_propietario"] ; //Asignamos a la variable el campo que queremos guardar
echo "<option value=".$cedula."> ".$nombre." ".$apellidos."</option>";  
//Llenamos el option con su value que sera lo que se lleve al archivo registrar.php y que sera el id de tu campo y luego concatenamos el nombre que se mostrara en el combo 
} //Cerramos el ciclo 
?>
</select>
</p>
	
 
  <p>Escriba su numero telefonico por favor: <input name="telc" type=number placeholder="Su telefono aqui"/>
	</p>
	<input type="submit" value="GUARDAR"/>
		
	<hr/>
	</form>
  
  </body>
  </html>