<?php 
	if (defined(PATH_SYSTEM)) {
		die('Bad requested!');			
	}
	class page_controller extends controller{
		
		public function dashboard_action()
		{	
			$this -> view('/page/dashboard.php');
		}
		public function about_action()
		{
			$this -> view('/page/about.php');
		}
		public function user_action()
		{
			$this -> view('/page/user.php');
		}
		public function login_action()
		{
			$this -> view('/user/login.php');
		}
		public function register_action()
		{
			$this -> view('/user/register.php');
		}
	}
?>