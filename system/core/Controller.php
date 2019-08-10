<?php 
if (! defined('PATH_SYSTEM')) 
	die('Bad requested!');

class Controller{
	protected $view    = NULL;
	protected $model   = NULL;
	protected $library = NULL;
	protected $helper  = NULL;
	protected $config  = NULL;

	public function __construct($is_controller = true){
	}	
}
?>