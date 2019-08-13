<?php 
if (! defined('PATH_SYSTEM')) 
	die('Bad requested!');

class Controller{
	protected $model   = NULL;
	protected $login   = NULL;

	public function __construct($is_controller = true){	
		require_once PATH_SYSTEM . '/core/loader/login_Loader.php';
		$this->login = new Login_Loader();

		require_once PATH_SYSTEM . '/libs/database.php';
		require_once PATH_SYSTEM . '/core/loader/Model_Loader.php';
		$this->model = new Model_Loader();
	}	
}
?>