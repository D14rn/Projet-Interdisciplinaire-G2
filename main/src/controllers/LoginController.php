<?php
require_once __DIR__ . '/../core/controller.php';
require_once __DIR__ . '/../views/login.php';
require_once __DIR__ . '/../core/view.php';

class LoginController extends Controller{
    public function control_user(int $user_id, string $user_email, string $user_password){
        $user_email=self::postAttribute('user_email');
        $user_id=self::postAttribute('user_id');
        $user_password=self::postAttribute('user_password');
    }

    public static function execute(){
        $view=new View('login', 'Login');
        $generate=$view->generateView([
            '$test'=>'salut']);
            if ((self:: == "POST") && (isset($_POST['user_email'])) && isset($_POST['user_password'])){
                if ($_POST['user_email'] == true && $_POST['user_password'] == true){


                }
        }
        

    }

 

}
?>