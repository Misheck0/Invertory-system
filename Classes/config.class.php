<?php
//namespace Use_logs;

class Database  {
/*This class will have all the Admin function
    all Admin control function 

*/
    var $conn;
    var $stmt;
    public function __construct() {
        if(file_exists("Test.db")) {
            $this->conn = new PDO("sqlite:Test.db");
        }
       else {
        $this->conn = new PDO("sqlite:Test.db");
        $this->create_tables();
       }
        
    }
    
    //create table in the database
protected function create_tables(){
    /*
    class to create all the needed Table in the Database file
    Table
    1. user_details
    2.ORDER table -> contain only made from china
    3.Stock table -> good ready available
    4.Sales table -> item sells details
    */
    $st = "CREATE TABLE IF NOT EXISTS  
        user_details(
            userId INTEGER PRIMARY KEY ,
            firstname TEXT(100) NOT NULL,
            surname TEXT(50) NOT NULL,
            Email VARCHAR(204) NOT NULL,
            Password VARCHAR(301) NOT NULL
        );";
        $this->stmt = $st;
    try{

        $this->conn->exec($this->stmt); 
                 
                }
                catch(PDOException $e) { 
                   
                    return $e;
                }
}

    
public function userId(){
    $genet = rand(000,999); // generate three random number
    $year = Date("Y"); //get the currently year and month
    $ID= $year.$genet; // combine random number with year
    $exists = False;
    $check = $this->stmt = "select * from user_details";

}

public function add_user($user,$pass){
    
    $error = False;
    $hash = password_hash($pass,PASSWORD_DEFAULT);
    $stat = "insert into Logs(username,password)
            values($user,$hash);";
    
}



}          

    


?>
