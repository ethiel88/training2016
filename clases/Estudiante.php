<?php
class Estudiante{
	//atributos global
	private $id;
	private $nombres;
	private $apellido_paterno;
	private $apellido_materno;
	private $genero;
	private $pais;
	private $telefono;
	private $direccion;
	private $institucion;
	private $intereses;

	private $link;
	private $dbhost = "localhost";
	private $dbuser = "usuario";
	private $dbpass = "password";
	private $dbname = "training2016";


	//funciones
	function __construct($id=0){
		$this->link = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname) or die("Falla en la conexion");

		if($id>0){
			$sql = "SELECT * FROM estudiante WHERE id=$id";
			$data = $this->link->query($sql);
			while($row = $data->fetch_assoc()){
				$this->setId($row['id']);
				$this->setNombres($row['nombres']);
				$this->setApellido_paterno($row['apellido_paterno']);
				$this->setApellido_materno($row['apellido_materno']);
				$this->setGenero($row['genero']);
				$this->setPais($row['pais']);
				$this->setTelefono($row['telefono']);
				$this->setDireccion($row['direccion']);
				$this->setInstitucion($row['institucion']);
				$this->setIntereses($row['intereses']);
			}
		}
	}

	function __destruct(){
		mysqli_close($this->link);
		//echo "terminando ...";
	}

	function setId($val){
		$this->id = $val;
	}

	function setNombres($val){
		$this->nombres = $val;
	}

	function setApellido_paterno($val){
		$this->apellido_paterno = $val;
	}

	function setApellido_materno($val){
		$this->apellido_materno = $val;
	}

	function setGenero($val){
		$this->genero = $val;
	}

	function setPais($val){
		$this->pais = $val;
	}

	function setDireccion($val){
		$this->direccion = $val;
	}

	function setTelefono($val){
		$this->telefono = $val;
	}

	function setInstitucion($val){
		$this->institucion = $val;
	}

	function setIntereses($val){
		$this->intereses = unserialize($val);
	}

	/*Funciones GET*/
	function getNombres(){
		return $this->nombres;
	}

	function getApellido_paterno(){
		return $this->apellido_paterno;
	}

	function getApellido_materno(){
		return $this->apellido_materno;
	}

	function getGenero(){
		return $this->genero;
	}

	function getPais(){
		return $this->pais;
	}

	function getDireccion(){
		return $this->direccion;
	}

	function getTelefono(){
		return $this->telefono;
	}

	function getInstitucion(){
		return $this->institucion;
	}

	function getIntereses(){
		if(is_array($this->intereses))return $this->intereses;
		else return array();
	}

	function getId(){
		return $this->id;
	}

	function getAll(){
		echo "<b>Nombres:</b>" . $this->nombres . "<br />";
		echo "<b>Apellido Paterno:</b>" . $this->apellido_paterno . "<br />";
		echo "<b>Apellido Materno:</b>" . $this->apellido_materno . "<br />";
		echo "<b>G&eacute;nero:</b>" . $this->genero . "<br />";
		echo "<b>Direcci&oacute;n:</b>" . $this->direccion . "<br />";
		echo "<b>Tel&eacute;fono:</b>" . $this->telefono . "<br />";
		echo "<b>Instituci&oacute;n:</b>" . $this->institucion . "<br />";
		echo "<b>Pa&iacute;s:</b>" . $this->pais . "<br />";
		echo "<b>Intereses:</b><br />";
		echo "<ol>";
		foreach($this->intereses as $valor){
			echo "<li>".$valor."</li>";
		}
		echo "</ol><br />";
	}

	function create(){
		$datos = array(
			"nombres" => $this->getNombres(),
			"apellido_paterno" => $this->getApellido_paterno(),
			"apellido_materno" => $this->getApellido_materno(),
			"genero" => $this->getGenero(),
			"pais" => $this->getPais(),
			"direccion" => $this->getDireccion(),
			"telefono" => $this->getTelefono(),
			"institucion" => $this->getInstitucion(),
			"intereses" => serialize($this->getIntereses()),
		);

		if("" == $this->getTelefono()) unset($datos['telefono']);
		if("" == $this->getDireccion()) unset($datos['direccion']);
		if("" == $this->getInstitucion()) unset($datos['institucion']);

		$campos = $valores = "";
		foreach($datos as $key=>$value){
			$campos .= ", `$key`";
			$valores .= ", '$value'";
		}
		$sql ="INSERT INTO estudiante(".substr($campos, 1).")
				VALUES(".substr($valores, 1).")";
		
		$this->link->query($sql);
	}

	function update(){
		$datos = array(
			"nombres" => $this->getNombres(),
			"apellido_paterno" => $this->getApellido_paterno(),
			"apellido_materno" => $this->getApellido_materno(),
			"genero" => $this->getGenero(),
			"pais" => $this->getPais(),
			"direccion" => $this->getDireccion(),
			"telefono" => $this->getTelefono(),
			"institucion" => $this->getInstitucion(),
			"intereses" => serialize($this->getIntereses()),
		);

		if("" == $this->getTelefono()) unset($datos['telefono']);
		if("" == $this->getDireccion()) unset($datos['direccion']);
		if("" == $this->getInstitucion()) unset($datos['institucion']);

		$campos = "";
		foreach($datos as $key=>$value){
			$campos .= ",`$key`='$value'";
		}
		$sql ="UPDATE estudiante SET ".substr($campos, 1)." WHERE id=".$this->getId();
		
		$this->link->query($sql);
	}

	function remove(){
		$sql = "DELETE FROM estudiante WHERE id=".$this->id;
		$this->link->query($sql);
	}

	function getAllStudents(){
		$sql = "SELECT id FROM estudiante";
		$estudiantes = $this->link->query($sql);
		return $estudiantes;
	}
}