<?php

class UsersController
{
    public Object $user;

    public function __construct( $user)//remember to put type declaration in arguments
    {
        $this->user = $user;
        // echo "usercontroller initiated. user object is stored";
        // echo "<br>";

    }

    public function setUserId(int $id) {
        $this->user->setUserId($id);
    }

    public function setUserEmail(String $email) {
        $this->user->setUserEmail($email);
    }


    public function setUserPassword(String $password) {
        $this->user->setUserPassword($password);
    }

  
    public function setUserRole(String $role) {
        $this->user->setUserRole($role);
    }

    public function setUserFirstLogin(int $firstLogin)
    {
        $this->user->setUserFirstLogin($firstLogin);
     
    }

    
    public function setUser(object $userObjs){ //remember to put type declaration in arguments
     
       $this->user->setUser($userObjs);
    }
}