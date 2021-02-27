<?php

class UsersView
{
    private Object $user;

    public function __construct($user) //remember to put type declaration in arguments
    {
        $this->user = $user;
        echo "usersView initiated. user object is stored";
        echo "<br>";
    }


    public function getUserId()
    {
        return $this->user->getUserId();
    }

    public function getUserEmail()
    {
        return $this->user->getUserEmail();
    }

    public function getUserPassword()
    {
        return $this->user->getUserPassword();
    }

    public function getUserRole()
    {
        return $this->user->getUserRole();
    }

    public function getUserFirstLogin()
    {
        return $this->user->getUserFirstLogin();
    }

    public function getUser()
    { 
        return $this->user->getUser();
    }
}
