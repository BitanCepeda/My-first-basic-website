<html>

<head>
	<title>Insertar datos de la revisión del proyecto</title>
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
$result = pg_query("select * from ingeniero");

?>
  
  
<hr/>
  <p id="tit">Llenando bases de datos</p>
<hr/>

<!--Comenzamos la entrada de datos de la revisión del proyecto-->
   <h2>Revision del proyecto</h2>
   <form action="Revision.php" method=POST>
   <p>Escriba el id de revision por favor por favor: <input name="ident" type=number required placeholder="El id del proyecto aqui"/ >
    </p>
   <p>Ingrese la fecha de la revision del proyecto: <input name="fech" type=date required min="01-01-2016" required />
    </p>
   <p>Ingrese los dias gastados en la revision del proyecto por favor: <input name="durre" type=number required min="1" placeholder="Los dias aqui"  />
    </p>
	
<p>Escoja al ingeniero de la revision por favor:
   <select name="cedingre" size=1> 
<!--Creamos el select con el atributo name "cedingre" que identificara el archivo registrar.php-->
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
	
		<input type="submit" value="GUARDAR"/>
	<hr/>
	</form>
  
  </body>
  </html>