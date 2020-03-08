<div align="center" style="width: 90%; margin-left: 5% ">
<table>
  <thead align="left" style="display: table-header-group">
  <tr>
     <th>idEstudiante </th>
     <th>Nombres</th>
     <th>Apellidos </th>
     <th>Carnet</th>
  </tr>
  </thead>
<tbody>
<?php 
	if($estudiantes){
	foreach ($estudiantes->result() as $rows) {?>
  <tr class="item_row">
        <td><?php echo $rows->idEstudiante;  ?></td>
        <td> <?php echo $rows->Nombres;  ?></td>
        <td> <?php echo $rows->Apellidos; ?></td>
        <td> <?php echo $rows->Carnet; ?></td>
       
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