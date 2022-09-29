<?php

/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Login\Controller;

use Login\Entity\{Users as a};
use Login\Utilities\{DBUtils as db_utils};
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

session_start();
class LoginController extends AbstractActionController
{
    public function loginAction()
    {
        return new ViewModel();
    }

    public function checkAction()
    {
        $_SESSION['msg'] = "";
        $test = new db_utils();
        $conn = $test->connectDB();
        if($conn -> connect_error) {
            die("Connection failed: " . $conn -> connect_error);
            $_SESSION['msg'] = "Connection DB failed";
            return $this->redirect()->toRoute('login-failed');
        }else{
            if (isset($_POST['username'])) {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) == 1) {
                    $check = $result->fetch_assoc();
                    $role = $check['role'];
                    $user = new a(); 
                    $user->setUsername($username);
                    $user->setPassword($password);
                    $user->setRole($role);
                    $_SESSION['loginUser'] = $user;
                    if($role == "AD"){ 
                        return $this->redirect()->toRoute('admin');   
                    }else {
                        return $this->redirect()->toRoute('login-successfully');
                    }
                } else {
                    $_SESSION['msg'] = "Wrong username or password";
                    return $this->redirect()->toRoute('login-failed');
                }
            }
        }  
    }

    public function successfullyAction()
    {
        return new ViewModel();
    }

    public function failedAction()
    {
        return new ViewModel();
    }

    public function adminAction()
    {
        return new ViewModel();
    }
}
