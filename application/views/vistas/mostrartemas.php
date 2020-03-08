<div align="center" style="width: 90%; margin-left: 5% ">
<table>
  <thead align="left" style="display: table-header-group">
  <tr>
     <th>idTema </th>
     <th>Tema</th>
     <th>Asesor </th>
     <th>Departamento</th>
     <th>Carrera</th>
  </tr>
  </thead>
<tbody>
<?php 
	if($temas){
	foreach ($temas->result() as $rows) {?>
  <tr class="item_row">
        <td><?php echo $rows->idTema;  ?></td>
        <td> <?php echo $rows->Tema;  ?></td>
        <td> <?php echo $rows->Asesor; ?></td>
        <td> <?php echo $rows->Departamento; ?></td>
        <td> <?php echo $rows->Carrera; ?></td>
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