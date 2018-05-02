<?php
function my_autoloader($class)
{
	if (file_exists($class . '.php')) { 
        include $class . '.php'; 
    }
    elseif (file_exists("src/". $class .".php")) {
    	 include "src/" . $class . '.php';
    }
    else {
    	include './src/view/Error/404.php';
    }
}
spl_autoload_register('my_autoloader');
?>
