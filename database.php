<?php

   class database{


    private   $host = "localhost";
    private   $dbname = "test";
    private   $user = "root";
    private   $pass = "";
    private   $conn=null;

       function __construct(){

           try {
               $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
               $this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              //  echo "Connected successfully"."<br>";

           }
           catch(PDOException $e) {

               echo 'ERROR: ' . $e->getMessage();
           }
       }

       function getConnection(){

        return $this->conn;
        
       }

   }


  // try {
//     $conn = new PDO("mysql:host=localhost;dbname=test", "root", "");

//       // echo "Connected successfully"."<br>";

//   } catch (PDOException $ex) {

//      echo $ex->getMessage();

//   }


?>