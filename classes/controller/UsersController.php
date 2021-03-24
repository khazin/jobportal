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

    public function setUserId($id) {
        $this->user->setUserId($id);
    }

    public function setUserEmail($email) {
        $this->user->setUserEmail($email);
    }


    public function setUserPassword($password) {
        $this->user->setUserPassword($password);
    }

  
    public function setUserRole($role) {
        $this->user->setUserRole($role);
    }

    public function setUserFirstLogin($firstLogin)
    {
        $this->user->setUserFirstLogin($firstLogin);
     
    }

    
    public function setUser($userArr, $id){ //remember to put type declaration in arguments
     
       $this->user->setUser($userArr, $id);

        // echo "user attribute is set";
        // echo "<br>";

    }
}