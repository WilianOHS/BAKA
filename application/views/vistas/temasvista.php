<div align="center" style="width: 90%; margin-left: 5% ">
<div id="container">
	<h1>Datos de Tema</h1>
</div>
	

<?php
	
	 echo form_open("controltemas/recibirDatos");//Carga del control para llamar funcion de recibirDatos
	//echo("<form action='Control/recibirDatos' method='POST'> ");
?>

<?php
	//Arreglo para las caracteristicas de tema
	$tema = array(
		'name' => 'Tema',
		'placeholder' => 'Escribe el tema'
	);
	//Arreglo para las caracteristicas de asesor
	$asesor = array(
		'name' => 'Asesor',
		'placeholder' => 'Escribe el asesor'
	);
	//Arreglo para las caracteristicas de departamento
	$departamento = array(
		'name' => 'Departamento',
		'placeholder' => 'Escribe el departamento'
	);
	//Arreglo para las caracteristicas de carrera
	$carrera = array(
		'name' => 'Carrera',
		'placeholder' => 'Escribe la carrera'
	);
	

?>

<?php
	//Label de tema
	echo form_label('Tema: ','tema');//
?>
<?php
	//input de tema
	echo form_input($tema);
?>
<?php
	//
	echo "<br><br>";
?>
<?php
	//Label de asesor
	echo form_label('Asesor: ','asesor');
?>
<?php
	//input de asesor
	echo form_input($asesor);
?>
<?php
	//
	echo "<br><br>";
?>
<?php
	//label de Departamento
	echo form_label('Departamento: ','departamento');
?>
<?php
	//Label de Departamento
	echo form_input($departamento);
?>
<?php
	//
	echo "<br><br>";
?>
<?php
	//label de Carrera
	echo form_label('Carrera: ','carrera');
?>
<?php
	//Label de carrera
	echo form_input($carrera);
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