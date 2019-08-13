<?php 
if ( ! defined('PATH_SYSTEM')) 
	die ('Bad requested!');

class Login_Controller extends Controller
{
	public function indexAction()
	{
		$this->login->load();
	}
}
?>