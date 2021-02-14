<?php

class ConnectionController
{
    public Object $connection;

    public function __construct($connection)//remember to put type declaration in arguments
    {
        $this->connection = $connection;
        echo "connectioncontroller initiated. connection object is stored";
        echo "<br>";

    }

    public function setUserRequestId($userRequestId) {
        $this->connection->setUserRequestId($userRequestId);
    }

    public function setUserReceiveId($userReceiveId) {
        $this->connection->setUserReceiveId($userReceiveId);
    }
    
    public function setConnection($userRequestId, $userReceiveId){ //remember to put type declaration in arguments
     
       $this->connection->setConnection($userRequestId, $userReceiveId);

        echo "connection attribute is set";
        echo "<br>";

    }

    
    


}