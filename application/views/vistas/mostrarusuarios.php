<div align="center" style="width: 90%; margin-left: 5% ">
<table>
  <thead align="left" style="display: table-header-group">
  <tr>
     <th>idUsuario </th>
     <th>Usuario</th>
     <th>Nombre </th>
     <th>Departamento</th>
     <th>Tipo de contratación</th>
  </tr>
  </thead>
<tbody>
<?php 
	if($usuarios){
	foreach ($usuarios->result() as $rows) {?>
  <tr class="item_row">
        <td><?php echo $rows->idUsuario;  ?></td>
        <td> <?php echo $rows->Usuario;  ?></td>
        <td> <?php echo $rows->Nombre; ?></td>
        <td> <?php echo $rows->Departamento; ?></td>
        <td> <?php echo $rows->Tipo_de_Contratacion; ?></td>
  </tr>
  <?php } ?>
</tbody>
</table>
<?php   
	} else {
		echo "<p>Error en la aplicacion</p>";
	}
?>
</div>
</body>
</html>