<?php 
if ( ! defined('PATH_SYSTEM')) 
	die ('Bad requested!');

class Logout_Controller extends Controller
{
	public function indexAction()
	{
		$this->login->load();
	}
}
?>