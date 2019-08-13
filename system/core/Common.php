<?php 
if ( ! defined('PATH_SYSTEM')) 
  die ('Bad requested!');

function load()
{
  
  $config = include_once PATH_APPLICATION . '/config/init.php';
  $controller = empty($_GET['controller']) ? $config['default_controller'] : $_GET['controller'];
  $action = empty($_GET['action']) ? $config['default_action'] : $_GET['action'];
  $controller = ucfirst(strtolower($controller)) . '_Controller';
  $action = strtolower($action) . 'Action';

  if (!file_exists(PATH_APPLICATION . '/controller/' . $controller . '.php')){
    die ('Không tìm thấy controller');
  }

  include_once PATH_SYSTEM . '/core/Controller.php';
  if (file_exists(PATH_APPLICATION . '/core/Base_Controller.php')){ 
    include_once PATH_APPLICATION . '/core/Base_Controller.php';
  }
  require_once PATH_APPLICATION . '/controller/' . $controller . '.php';

  if (!class_exists($controller)){
    die ('Không tìm thấy controller');
  }

  $controllerObject = new $controller();

  if (!method_exists($controllerObject, $action)){
    die ('Không tìm thấy action');
  }

  $controllerObject->$action();
}
?>