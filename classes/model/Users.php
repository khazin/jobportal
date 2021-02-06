<?php

class Users
{

    private int $id;
    private String $email;
    private String $password;
    public String $role;
    private bool $firstLogin;

    public function __construct()
    {
        echo "Users is initiated";
        echo "<br>";
    }

    public function setUserId($id)
    {
        $this->id = $id;
        echo 'user id is set';
        echo '<br>';
    }

    public function getUserId()
    {
        return $this->id;
    }

    public function setUserEmail($email)
    {
        $this->email = $email;
        echo 'user email is set';
        echo '<br>';
    }

    public function getUserEmail()
    {
        return $this->email;
    }

    public function setUserPassword($password)
    {
        $this->password = $password;
        echo 'user password is set';
        echo '<br>';
    }

    public function getUserPassword()
    {
        return $this->password;
    }

    public function setUserRole($role)
    {
        $this->role = $role;
        echo 'user role is set';
        echo '<br>';
    }

    public function getUserRole()
    {
        return $this->role;
    }

    public function setUserFirstLogin($firstLogin)
    {
        $this->firstLogin = $firstLogin;
        echo 'User first login is set';
        echo '<br>';
    }

    public function getUserFirstLogin()
    {
        return $this->firstLogin;
    }



    public function setUser($userArr, $id)
    { //remember to put type declaration in arguments

        $this->setUserId($id);
        $this->setUserEmail($userArr[0]);
        $this->setUserPassword($userArr[1]);
        $this->setUserRole($userArr[2]);

        echo "user attribute is set";
        echo "<br>";
    }



    public function getUser()
    {

        $userObj = new stdClass();
        $userObj->userId = $this->getUserId();
        $userObj->userEmail = $this->getUserEmail();
        $userObj->userPassword = $this->getUserPassword();
        $userObj->userRole = $this->getUserRole();
        $userObj->userFirstLogin = $this->getUserFirstLogin();

        return $userObj;

        // echo "getting user attributes";
        // echo "<br>";
    }
}
