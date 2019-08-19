<?php 
	if (defined(PATH_SYSTEM)) {
		die('Bad requested!');			
	}
	class Page_Controller extends Controller
	{
		
		public function dashboardAction()
		{	
			$this -> view('/page/dashboard.php');
		}
		public function aboutAction()
		{
			$this -> view('/page/about.php');
		}
		public function userAction()
		{
			$this -> view('/page/user.php');
		}
		public function loginAction()
		{
			$this -> view('/user/login.php');
		}
		public function registerAction()
		{
			$this -> view('/user/register.php');
		}
		public function editAction()
		{
			$this -> view('/user/edit.php');
		}
	}
?>