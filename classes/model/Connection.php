<?php

class Connection
{

    private int $userRequestId;
    private int $userReceiveId;
 

    public function __construct()
    {
        echo "connections is initiated";
        echo "<br>";
    }

    public function setUserRequestId($userRequestId)
    {
        $this->userRequestId = $userRequestId;
        echo 'connection userRequestId is set';
        echo '<br>';
    }

    public function getUserRequestId()
    {
        return $this->userRequestId;
    }

    public function setUserReceiveId($userReceiveId)
    {
        $this->userReceiveId = $userReceiveId;
        echo 'connection userReceiveId is set';
        echo '<br>';
    }

    public function getUserReceiveId()
    {
        return $this->userReceiveId;
    }



    public function setConnection($userRequestId, $userReceiveId)
    { //remember to put type declaration in arguments

        $this->setUserRequestId($userRequestId);
        $this->setUserReceiveId($userReceiveId);
   

        echo "connection attribute is set";
        echo "<br>";
    }



    public function getConnection()
    {

        $connectionObj = new stdClass();
        $connectionObj->userRequestId = $this->getUserRequestId();
        $connectionObj->userReceiveId = $this->getUserReceiveId();
    
        return $connectionObj;

        // echo "getting connection attributes";
        // echo "<br>";
    }
}
