<?php
namespace Core;

class Core 
{
	public function run()
	{
		//echo __CLASS__ . " [OK]" . PHP_EOL;
		include 'routes.php';
		$url = parse_url(trim($_SERVER['REQUEST_URI'], "/"),PHP_URL_PATH);
		if (Router::get($url)) {
			$get = Router::get($url);
			$action = $get['action'];
			$controller_name = "\Controller\\" . ucfirst($get['controller']) . "Controller";
			$action_bis = $action . 'Action';
			if (class_exists($controller_name)){
				$controller = new $controller_name();

				if (method_exists($controller, $action_bis)) {
					$controller->{ $action_bis }();
				}
				else{
					echo "View doesn't exist.";
				}
			}
			else{
				echo "Controller doesn't exist.";
			}
		}

	}
}		

