
<?php
	
	 echo form_open("Controllogin/validar");
?>
<center>

<div class="row" id="container" style='margin-top:10%; margin-left:32%;'>
  <div class="col s10 m6">
    <div class="card-panel grey lighten-2">
  <h4>INGRESAR</h4>
  

<?php
  //Arreglo para las caracteristicas de usuario aca se ponen los cmapos que tendra el imput de el usuario ahi agrege el id con el que ocupa tu
  //tu clase de materialize para el input de usuario tu haras lo mismo abajo con el array que tiene pass
	$usuario = array(
		'name' => 'usuario',
    'id' => 'icon_prefix',
    'class'=>'validate'
  );
  //Arreglo para las caracteristicas de Contraseña aca vendrias y agregas el di y class que ocupes para contrasñea 
//  si no ocupas placeholder quitaselo asi como yo se lo quite a usuario
	$pass = array(
		'name' => 'pass',
   'id' => 'icon_prefix2',
   'class' => 'validate' 
	);
	
?>

  <center>
      <div class="row">
        <div class="input-field col m10">
          <i class="material-icons prefix">account_circle</i>
          <?php
          echo form_input($usuario);//si te fijas el codiho php solo lo agrege sustituyendo donde estaba la etiqueta input tu haras lo mismo
          ?>
          <label for="icon_prefix">Usuario</label>
        </div>
</center>
<center>
        <div class="row">
        <div class="input-field col m10">
          <i class="material-icons prefix">https</i>
          <?php
          echo form_input($pass);//si te fijas el codiho php solo lo agrege sustituyendo donde estaba la etiqueta input tu haras lo mismo
          ?>
          <label for="icon_prefix2">Contraseña</label>
        </div>
</center>

<a class="waves-effect waves-light red btn">
<?php
	echo form_submit('','Ingresar');//Boton para introducir los datos
?></a>

<?php
	//label de usuario le queres dejar siempre eso que dice usuario: ?nel se ve como in
	//echo form_label('Usuario: ','usuario');
	//echo form_input($usuario);//input usuario
?>
<div style="display: -webkit-inline-box;">
<?php
	
	//label de usuario
//	echo form_label('Contraseña: ','pass');


?>
</div>


</div>
  </div>
</div>
</center>
<?php
  echo form_close();//Cerrado del form
?>

</body>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="../../assets/js/materialize.js"></script>
</html>