<?php 

class Route {
	
	public function __construct() {
		$this->initRoutes();
		$this->view($this->getURL());
	}

	/*
	 * Função responsável por armazenar todas as rotas do sistema.
	 */
	public function initRoutes() {
		$this->route['/'] = array('controller' => 'indexController', 'action' => 'index');
	}

	public function view($url) {
		if(array_key_exists($url, $this->route)) {
			$class = '\\app\\controller' .  $this->route[$url]['controller'];
			$controller = new $class;
			$action = $this->routes[$url]['action'];
			$controller->$action();
		}
	}

	public function getURL() {
		return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
	}
}

$route = new Route();