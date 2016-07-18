<?php
if(isset($_GET['id'])){
	require_once 'header.php';
	include '../clases/Estudiante.php';
	$estudiante = new Estudiante($_GET['id']);
	$estudiante->getAll();
	require_once 'footer.php';
}
else{
	header('location: index.php');
}
