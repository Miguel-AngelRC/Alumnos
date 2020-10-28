<?php
include_once("modelo/materias.php");

$materias = new materias();

session_start();

$i=0;

	include_once("arriba.php");
	include_once("menu.php");


    $todasMaterias = $materias->buscarMaterias($_SESSION['id']);
	?>

	<?php
	if(isset($todasMaterias)){
	?>
		<table id="tablaMateria">
			<tr>
				<th>Clave</th>
				<th>Nombre</th>
				<th>Créditos</th>
				<th>nht</th>
				<th>nhp</th>
			</tr>
	<?php
		foreach ($todasMaterias as $materia) {//extrae los id del resultado	
	?>
	
		<tr>
			<td> <?php echo ' '.$materia[0]; ?> </td>
			<td> <?php echo ' '.$materia[1]; ?> </td>
			<td> <?php echo ' '.$materia[2]; ?> </td>
			<td> <?php echo ' '.$materia[3]; ?> </td>
			<td> <?php echo ' '.$materia[4]; ?> </td>
		</tr>
	
	<?php
		}
	?>
		</table>
	<?php
		}else{
	?>
		<h1>Sin Materias</h1>


<?php	
		}
include_once("abajo.php");
?>

	