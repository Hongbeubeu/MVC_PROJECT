<?php
class user_controller extends controller{
    public function __construct(){
        $this->userModel = $this->model('user');
    }

public function register_action()
{
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
            'name' => trim($_POST['name']),
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'confirm_password' => trim($_POST['confirm_password']),
            'name_err' => '',
            'email_err' => '',
            'password_err' => '',
            'confirm_password_err' => ''
        ];

        if ( empty($data['email']) ) {
            $data['email_err'] = 'Please inform your email';
        } else {
            if ( $this->userModel->get_user_by_email($data['email']) ) {
                $data['email_err'] = 'Email is already in use. Choose another one!';
            }
        }
        if ( empty($data['name']) ) {
            $data['name_err'] = 'Please inform your name';
        }

        if ( empty($data['password']) ) {
            $data['password_err'] = 'Please inform your password';
        } elseif ( strlen($data['password']) < 6 ) {
            $data['password_err'] = 'Password must be at least 6 characters';
        }

        if ( empty($data['confirm_password']) ) {
         $data['confirm_password_err'] = 'Please inform your password';
     } else if ( $data['password'] != $data['confirm_password'] ) {
         $data['confirm_password_err'] = 'Password does not match!';
     }

     if ( empty($data['name_err']) && empty($data['email_err']) && empty($data['password_err']) && empty($data['confirm_password_err']) ) {

         $data['password'] = md5($data['password']);

         if ( $this->userModel->register($data) ) {
             flash('register_success','You are now registered! You !');
             redirect('page','login');
         } else {
             die ('Something wrong');
         }
     } else{
        $this->view('/user/register.php',$data);
     }
 } else {
    $data = [
        'name' => '',
        'email' => '',
        'password' => '',
        'confirm_password' => '',
        'name_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => ''
    ];
    $this->view('/user/register.php', $data);
}
}

public function login_action()
{
    if ($_SERVER['REQUEST_METHOD']=='POST') {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'email_err' => '',
            'password_err' => '',
        ];

        if ( empty($data['email']) ) {
            $data['email_err'] = 'Please inform your email';
        } else if (! $this->userModel->get_user_by_email($data['email']) ) {
            $data['email_err'] = 'No user found!';
        }

        if ( empty($data['password']) ) {
            $data['password_err'] = 'Please inform your password';
        }

        if ( empty($data['email_err']) && empty($data['password_err']) ) { 
            $userAuthenticated = $this->userModel->login($data['email'], $data['password']);
            if ( $userAuthenticated) {
                $this->create_user_session($userAuthenticated);
            } else {
                $data = [
                    'email' => trim($_POST['email']),
                    'password' => '',
                    'email_err' => 'Email or Password are incorrect',
                    'password_err' => 'Email or Password are incorrect',
                ];
                $this->view('/user/login.php', $data);
            }
        } else {
            $this->view('/user/login.php',$data);
        }
    } else {
        $data = [
            'email' => '',
            'password' => '',
            'email_err' => '',
            'password_err' => '',
        ];
        $this->view('/user/login.php', $data);
    }
}

public function logout_action()
{
    unset($_SESSION['user_id']);
    unset($_SESSION['user_mail']);
    unset($_SESSION['user_name']);
    session_destroy();
    redirect('page','dashboard');
}

public function create_user_session($user)
{
    $_SESSION['user_id'] = $user->id;
    $_SESSION['user_email'] = $user->email;
    $_SESSION['user_name'] = $user->name;
    $this -> view('/page/user.php',$user);
}

public function is_logged_in()
{
    if ( isset($_SESSION['user_id']) && isset($_SESSION['user_name']) && isset($_SESSION['user_email'])) {
        return true;
    } else {
        return false;
    }
}
}