
<div align="center" style="width: 90%; margin-left: 5% ">
<div id="container">
	<h1>Datos de estudiante</h1>
</div>
	

<?php
	
	 echo form_open("controles/recibirDatos");//Carga del control para llamar funcion de recibirDatos
	//echo("<form action='Control/recibirDatos' method='POST'> ");
?>

<?php
	//Arreglo para las caracteristicas de nombre
	$nombre = array(
		'name' => 'nombre',
		'placeholder' => 'Escribe los nombres'
	);
	//Arreglo para las caracteristicas de apellido
	$apellido = array(
		'name' => 'apellido',
		'placeholder' => 'Escribe los apellidos'
	);
	//Arreglo para las caracteristicas de carnet
	$carnet = array(
		'name' => 'carnet',
		'placeholder' => 'Escribe el carnet'
	);
?>

<?php
	//Label de nombre
	echo form_label('Nombre: ','nombre');//
?>
<?php
	//input de nombre
	echo form_input($nombre);
?>
<?php
	//
	echo "<br><br>";
?>
<?php
	//Label de apellido
	echo form_label('Apellido: ','apellido');
?>
<?php
	//input de apellido
	echo form_input($apellido);
?>
<?php
	//
	echo "<br><br>";
?>
<?php
	//label de carnet
	echo form_label('Carnet: ','carnet');
?>
<?php
	//Label de carnet
	echo form_input($carnet);
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