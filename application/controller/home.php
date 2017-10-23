<?php
class Home extends Controller{
	function __construct(){
		parent::__construct();
		if(isset($_SESSION['user_id'])){
			if($this->model->checkId($_SESSION['user_id'])){
				header('location:' . URL . 'user');
			}
		}elseif(isset($_COOKIE['login'])){
			if($this->model->isCookieExist($_COOKIE['login'])){
				$_SESSION['user_id'] = $this->model->getCookieId($_COOKIE['login']);
				header('location:' . URL . 'user');
			}
		}
	}
	public function index(){
		if(isset($_POST['login'])){
			$username = $this->protect($_POST['username']);
			$password = hash('sha256' , $this->protect($_POST['password']));
			if($this->model->checkLogin($username, $password)){
				$user = $this->model->findUser($username);
				$_SESSION['user_id'] = $user->id;
				setcookie("login", $user->cookie, time() + (86400 * 90), "/");
				//redirect
				header('location:' . URL . 'user');
			}
 		}
		require APP . 'view/index.php';
	}
}