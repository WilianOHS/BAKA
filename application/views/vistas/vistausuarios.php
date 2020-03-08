<div align="center" style="width: 90%; margin-left: 5% ">
<div id="container" >
	<h1>Datos de Usuario</h1>
</div>
	

<?php
	
	 echo form_open("controlu/recibirDatos");//Carga del control para llamar funcion de recibirDatos
	//echo("<form action='Control/recibirDatos' method='POST'> ");
?>

<?php
	//Arreglo para las caracteristicas de usuario
	$usuario = array(
		'name' => 'Usuario',
		'placeholder' => 'Escribe el usuario'
	);
	//Arreglo para las caracteristicas de password
	$password = array(
		'name' => 'password',
		'placeholder' => 'Escribe la contraseña'
	);
	//Arreglo para las caracteristicas de nombre
	$nombre = array(
		'name' => 'nombre',
		'placeholder' => 'Escribe el nombre'
	);
	//Arreglo para las caracteristicas de departamneto
	$departamento = array(
		'name' => 'departamento',
		'placeholder' => 'Escribe el departamento'
	);
	//Arreglo para las caracteristicas de Tipo_de_contratacion
	$tipo_de_contratacion = array(
		'name' => 'tipo_de_contratacion',
		'placeholder' => 'Escribe el Tipo_de_contratación'
	);

?>

<?php
	//Label de usuario
	echo form_label('Usuario: ','usuario');//
?>
<?php
	//input de usario
	echo form_input($usuario);
?>
<?php
	//
	echo "<br><br>";
?>
<?php
	//Label de password
	echo form_label('Password: ','password');
?>
<?php
	//input de password
	echo form_input($password);
?>
<?php
	//
	echo "<br><br>";
?>
<?php
	//label de nombre
	echo form_label('Nombre: ','nombre');
?>
<?php
	//Label de nombre
	echo form_input($nombre);
?>
<?php
	//
	echo "<br><br>";
?>
<?php
	//label de departamento
	echo form_label('Departamento: ','departamento');
?>
<?php
	//Label de departamento
	echo form_input($departamento);
?>
<?php
	//
	echo "<br><br>";
?>
<?php
	//label de tipo_de_contratacion
	echo form_label('Tipo de contratación: ','tipo_de_contratacion');
?>
<?php
	//Label de tipo_de_contratacion
	echo form_input($tipo_de_contratacion);
?>
<?php
	//
	echo "<br><br>";
?>
<?php
	echo form_submit('','subiendo');//Boton para introducir los datos
?>


<?php
	echo form_close();//Cerrado del form
?>
</div>
</body>
</html>