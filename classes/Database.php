<?php
      //Parent Class
    class Database
    {
        private $server_name  = "localhost";
        private $username  = "root";
        private $password  = "root"; //$passwword = ""; for XAMPP users, // $passwword = "root"; for MAMP users,
        private $db_name  = "the_company";
        protected $conn;
      
        public function __construct()
        {
            $this->conn = new mysqli($this->server_name, $this->username, $this->password, $this->db_name);
            //my sqli = Represents a connection between PHP and MySQL database.
            //$this->conn is now the object the class my sqli
            //$this->conn holds the connection to the Database
    
            if($this->conn->connect_error){
              die("Unable to connect to the database" .$this->conn->connect_error);
            }
    
        }
    }

   

    

?>