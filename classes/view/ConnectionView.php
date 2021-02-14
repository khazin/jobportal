<?php

class ConnectionView
{
    private Object $connection;

    public function __construct($connection) //remember to put type declaration in arguments
    {
        $this->connection = $connection;
        echo "connectionsView initiated. connection object is stored";
        echo "<br>";
    }


    public function getUserRequestId()
    {
        return $this->connection->getUserRequestId();
    }

    public function getUserReceiveId()
    {
        return $this->connection->getUserReceiveId();
    }


    public function getConnection()
    {
        return $this->connection->getConnection();
    }
}
