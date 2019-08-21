<?php 
if ( ! defined('PATH_SYSTEM')) 
  die ('Bad requested!');
class core
{
  protected $controller = 'page_controller';
  protected $action = 'dashboard_action';
  protected $params = [];

  public function __construct()
  {
    $url = $this->getUrl();
    if (file_exists(PATH_APPLICATION . '/controller/' . strtolower($url[0]) . '_controller.php')) {
      $this->controller = strtolower($url[0]) . '_controller';
      unset($url[0]);
    }
    require_once PATH_APPLICATION . '/controller/' . $this->controller . '.php';
    $this->controller =  new $this->controller;

    if (isset($url[1])) {
      if(method_exists($this->controller, strtolower($url[1])) . '_action'){
        $this->action = strtolower($url[1]) . '_action';
        unset($url[1]);
      }
    }
    $this->params = $url ? array_values($url) : [];
    call_user_func_array([$this->controller, $this->action], $this->params);
  }

  public function  getUrl(){
    if (isset($_GET['controller'])) {
      $url = rtrim($_GET['controller'],'/');
      $url = filter_var($url,FILTER_SANITIZE_URL);
      $url = explode('/',$url);
      return $url;
    }
  }
}