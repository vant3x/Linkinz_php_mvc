<?php 


class Link {

	private $id;
	private $categoria_id;
	private $titulo;
	private $descripcion;
	private $link;
	private $fecha;
	private $favicon;
	private $db;

	public function __construct() {
		$this->db = Database::connect();
	}

	public function getId() {
		return $this->id;
	}

	public function getTitulo() {
		return $this->titulo;
	}

	public function setId($id) {
		$this->id = $id;
	}	

	public function setTitulo($titulo) {
		$this->titulo = $this->db->real_escape_string($titulo);
	}

	public function getCategoria_id() {
		return $this->categoria_id;
	}

	public function setCategoria($categoria) {
		$this->categoria = $categoria;
	}		

	public function getDescripcion() {
		return $this->descripcion;
	}

	public function setDescripcion($descripcion) {
		$this->descripcion = $descripcion;
	}		

	public function getLink() {
		return $this->link;
	}

	public function setLink($link) {
		$this->link = $link;
	}	

	public function getFavicon() {
		return $this->favicon;
	}

	public function setFavicon($favicon) {
		$this->favicon = $favicon;
	}	

	public function getAll() {
		$links = $this->db->query("SELECT * FROM links ORDER BY id DESC;");
		return $links;
	}

	public function save() {
		$sql = "INSERT INTO links VALUES(NULL,NULL, '{$this->getTitulo()}',NULL, '{$this->getLink()}', CURDATE(), '{$this->getFavicon()}');";
		$save = $this->db->query($sql);

		$result = false;
		if ($save) {
			$result = true;
		}

		return $result;
	}

}