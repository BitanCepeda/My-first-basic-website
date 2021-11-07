<html>

<head>
	<title>Insertar datos del proyecto</title>
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

  <!--Comenzamos la entrada de datos del proyecto-->
  <h2>Proyecto</h2>
  <form action="Proyecto.php" method=POST>
  <p>Escriba el id del proyecto por favor: <input name="ident" type=number required placeholder="El id del proyecto aqui"/ >
    </p>

   <p>Ingrese la fecha de inicio por favor: <input name="fech" type=date required min="01-01-2016" required />
    </p>
   <p>Ingrese la fecha de culminacion por favor: <input name="fechf" type=date required min="01-01-2020"  />
    </p>
   <p>Ingrese los dias gastados en el proyecto por favor: <input name="dur" type=number required min="1" placeholder="Los dias aqui"  />
    </p>
   <p>Ingrese el costo de materia prima total invertido: <input name="cost" type=number required placeholder="El costo aqui"  />
    </p>
   <p>Ingrese la cantidad total de empleados que se utilizaron: <input name="empl" type=number required placeholder="La cantidad aqui"  />
    </p>
   <p>Ingrese el nombre del director del proyecto por favor: <input name="dir" type=text required placeholder="El nombre del director aqui"  />
    </p>
	
		<p>Escoja al propietario de la finca por favor:
	 <select name="cedproppo" size=1> 
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
	
   
   <p>Ingrese el monto de dinero a invertir: <input name="dine" type=number required placeholder="El monto aqui"/>
    </p>
   <p>Escriba el metodo a usar en este proyecto por favor: <input name="met" type=text placeholder="El metodo aqui"/>
    </p>
		<input type="submit" value="GUARDAR"/>
	<hr/>
	</form>
  
  </body>
  </html>