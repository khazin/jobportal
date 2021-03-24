<?php

class DB
{
    private String $servername = "localhost";
    private String $username = "root";
    private String $password = "password";
    private String $dbName = "jobportal";

    protected Object $connection;
    protected String $sql;

    // Create connection
    public function connection()
    {

        $this->connection = new mysqli($this->servername, $this->username, $this->password, $this->dbName);

        // Check connection
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
        // echo "Connected successfully";
        return $this->connection;
    }
}
