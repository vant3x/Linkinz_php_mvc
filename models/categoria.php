<?php 

class Categoria {
	private $id;
	private $nombre;
	private $db;

	public function __construct() {	
		$this->db = Database::connect();
	}

	public function getId() {
		return $this->id;
	}

	public function getNombe() {
		return $this->nombre;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	// This function get all categories

	public function getAll() {
		$categorias = $this->db->query("SELECT * FROM categorias ORDER BY id DESC;");
		return $categorias;
	}	

	public function save() {

	}

}