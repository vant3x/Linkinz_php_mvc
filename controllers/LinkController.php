<?php 

require_once 'models/link.php';

class linkController {

	public function index() {
		// renderizar vista
		$link = new Link();
		$links = $link->getAll();
		require_once 'views/link/destacados.php';
	}

	public function crear() {
		require_once 'views/link/crear.php';
	}

/* favicon */

	public  function getFavicon($site){
	    $html = file_get_contents($site);
	    $dom = new DOMDocument();
	    @$dom->loadHTML($html);
	    $links = $dom->getElementsByTagName('link');

	    $favicon = '';
	    for ($i = 0; $i < $links->length; $i++){
	        $link = $links->item($i);
	        if($link->getAttribute('rel') == 'shortcut icon' || $link->getAttribute('rel') == 'icon'){
	            $favicon = $link->getAttribute('href');
	            // validar si es del mismo dominio o no
	            
	            	if (substr($favicon,0,6) == 'https:') {

	            		$data = substr($favicon, 0,8);
	            		echo "<img width='20' src='$favicon'>";	
	            		$faviconListo = $favicon;

	            	}
	            	
	            	elseif(substr($favicon,  0, 2) == '//'){
	            		   echo "<br><img width='20' src='https:$favicon'><br>";
	            		   $faviconListo = "https:".$favicon;
	            	}

	                else {
	            			$data = substr($favicon, 0,8);
	            		    echo "<br><img width='20' src='$site/$favicon'><br>";
	            		     $faviconListo = "$site/$favicon";
	            	}
			}
	    }
	    return $faviconListo;
	}

/* favicon */


	public function save() {
		if (isset($_POST) && isset($_POST['titulo']) && isset($_POST['link']) && $_POST['titulo'] !== '') {
			// Guardar categoría en la base de datos 
			$link = new Link();	
			$link->setTitulo($_POST['titulo']);	
			$link->setLink($_POST['link']);	
			$favicon = $this->getFavicon($_POST['link']);
			$link->setFavicon($favicon);
			$link->save();
		}
		// Hacer redireccion
		header("Location:".base_url."link/index");
		
	}

}