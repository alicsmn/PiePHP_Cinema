<?php
namespace Controller;

use \Model\UserModel;
use \Core\Controller;

class UserController extends Controller 
{
	public function registerAction()
	{
		$this->render("register");
		$errors = array();
		if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['lastname'])) {
			if ($_POST['password'] == ''|| $_POST['email'] == '') {
				$errors  = "Aucun mot de passe ou email";
				echo "Vous n'avez pas remplis toutes les informations";
				exit();
			}
			else {
				if (isset($_POST)) {
					if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
						echo "Email incorrect!";
						exit();
					}
					$parameters = $this->request->getQueryParams();
					$user = new UserModel($parameters);
					$user->create();
					header("Location: /PiePHP/user/login");
					exit;
				}
			}
		}	
	}
	public function loginAction()
	{
		$this->render('login');
		$errors = array();
		if (isset($_POST['email']) && isset($_POST['password'])) {
			if ($_POST['password'] == '') {
				$errors  = "Aucun mot de passe";
				echo "Il manque le mot de passe";
				exit();
			}
			elseif ($_POST['email'] == '') {
				$errors = "Aucun email";
				echo "Il manque l'email";
				exit();	
			}
			else {
				if (isset($_POST)) {
					if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
						echo "Email incorrect!";
						exit();
					}
					$parameters = $this->request->getQueryParams();
					$user = new UserModel($parameters);
					$_SESSION['log'] = true;
					$user->getInfos();
					header("Location: /PiePHP/user/show");
					exit;
				}
			}
		}	
	}
	public function logoutAction()
	{
		session_unset();
		session_destroy();
		$this->render('login');
	}

	public function showAction()
	{
		$this->render('show');
		if(isset($_POST['submitdelete'])) {	
			$parameters = $this->request->getQueryParams();
			$user = new UserModel($parameters);
			$user->id = $_SESSION['id'];
			$user->delete();
			$_SESSION['log'] = false;
			header("Location: /PiePHP/user/login");
			exit;
		}
	}
}

?>