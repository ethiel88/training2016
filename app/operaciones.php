<?php
if( isset($_POST['operacion']) || isset($_GET['operacion']) ){
	$op = isset($_POST['operacion'])?$_POST['operacion']:$_GET['operacion'];
	
	switch($op){
		case 'agregar':
			$nombres = $apellido_paterno = $apellido_materno = $pais = $genero = '';
			$intereses = array();
			$telefono = $direccion = $institucion = '';

			if(isset($_POST["nombres"])) $nombres = $_POST["nombres"];
			if(isset($_POST["apellido_paterno"])) $apellido_paterno = $_POST["apellido_paterno"];
			if(isset($_POST["apellido_materno"])) $apellido_materno = $_POST["apellido_materno"];
			if(isset($_POST["pais"])) $pais = $_POST["pais"];
			if(isset($_POST["genero"])) $genero = $_POST["genero"];
			if(isset($_POST["intereses"])) $intereses = $_POST["intereses"];
			if(isset($_POST["direccion"])) $direccion = $_POST["direccion"];
			if(isset($_POST["telefono"])) $telefono = $_POST["telefono"];
			if(isset($_POST["institucion"])) $institucion = $_POST["institucion"];

			require_once '../clases/Estudiante.php';
			$estudiante = new Estudiante();
			$estudiante->setNombres($nombres);
			$estudiante->setApellido_paterno($apellido_paterno);
			$estudiante->setApellido_materno($apellido_materno);
			$estudiante->setGenero($genero);
			$estudiante->setPais($pais);
			$estudiante->setDireccion($direccion);
			$estudiante->setTelefono($telefono);
			$estudiante->setInstitucion($institucion);
			$estudiante->setIntereses(serialize($intereses));
			$estudiante->create();
			header('location: index.php');
			break;
		case 'eliminar':
			$id = isset($_GET['id'])?$_GET['id']:0;
			require_once '../clases/Estudiante.php';
			$estudiante = new Estudiante($id);
			$estudiante->remove();
			header('location: index.php');
			break;
	}
}
else{
	header('location: index.php');
}