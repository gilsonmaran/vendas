

<?php 

//namespace App\Route;

class Route {

	public function __construct() {
		$this->initRoute();
		$this->run($this->getURL());
	}

	// Registro de todas as rotas de nosso sistema.
	public function initRoute() {
		$this->route['/'] = array('controller' => 'indexController', 'action' => 'index');
		$this->route['/lista'] = array('controller' => 'indexController', 'action' => 'lista');
		print_r($this->route);
	}

	public function run($url) {
		echo $url;
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
?>