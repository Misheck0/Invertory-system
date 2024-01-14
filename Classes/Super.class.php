<?php

//namespace ADMIN;

class User extends SQLite3 {
    
    public function __construct() {
        $this->open("test3.db");
        
    }
    
    //create table in the database
public function create() {
            
            $this->exec("CREATE TABLE IF NOT EXISTS  ORDERS
             (
                 Idorder INTEGER PRIMARY KEY AUTOINCREMENT ,
                 Name VARCHAR(100) NOT NULL,
                Category VARCHAR(205) NOT NULL,
                 Quatity INT(10) NOT NULL,
                Total_cost VARCHAR(200) NOT NULL,
                Order_date DATE NOT NULL DEFAULT 'GETDATE()'
                
             );                 
                 "); 
                //execute code for creating sale table
                 
            $this->exec("create table if not exists Sale
            (
                sale_id INTEGER PRIMARY KEY AUTOINCREMENT ,
                Device_name varchar(200) not null,
                Amount_sold varchar(200) not null,
                Date varchar(200) not null,
                stockid INTEGER(100) not  null,
                foreign key(stockid) references Orders(Idorder) ON UPDATE CASCADE
                
            );
               "); 
}// End create
        
            
            
    

     public function Order_insert() {
        $date = Date("d/M/Y");
    
            $this->exec("INSERT INTO Orders(Name,
            Category,Quatity,Total_cost,order_date) VALUES('Jeans','Clothes',10,'900', '$date'),
            ('Jordan','Shoes',7,'4800','$date'),
            ('AIRPOD','30',300,'2500','$date') ;");
            
        
        
         
     } //close stock_insert
    
}// end class

//$test2 = new User();
//est2->create();
//$test2->Order_insert();


?>  