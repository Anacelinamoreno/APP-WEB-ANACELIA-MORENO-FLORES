<?php
include("conexion.php");

$id = $_GET['id'];
$sql = "DELETE FROM docentes WHERE id_docente='$id'";
if(mysqli_query($conexion, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro eliminado exitósamente");';
	echo 'window.location="docente.php";';
	echo '</script>';
} else {
	echo '<script language="javascript">';
	echo 'alert("Error eliminando registro!");';
	echo 'window.location="docente.php";';
	echo '</script>';
}
?>