<?php

$db = new PDO("sqlite:Invetory.db");
$stmt = $db->query("select * from ORDERS");

//$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

       
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  <style>
  body{
    padding: 50px;
  }
    .form_container{
      max-width: 600px;
      margin:0 auto;
      padding:56px;
      box-shadow:rgba(100,100,111,0.2)0px 7px 29px 0px;
    }
    .form-group{
      margin-bottom:30px;
    }
    label{
      text-align: center;
    }
    .side a{
        text-align:center;
    }
  </style>
  <title>Login panel for admin </title>
</head>

<body>
  <div class="conta">
<?php
$mess = array();

//$pass_len = false;
if(isset($_POST["submit"])) {
    
 $Name = filter_input(INPUT_POST,"user",FILTER_SANITIZE_SPECIAL_CHARS);
 $pass = filter_input(INPUT_POST,"pass",FILTER_SANITIZE_SPECIAL_CHARS);
if(!empty($Name) and !empty($pass) ){
    $stat = "select * from user_details where firstname='$Name' ";
   $data = $db->query($stat);
   $result = $data->fetchAll(PDO::FETCH_ASSOC);

foreach($result as $row ){
   if($Name==$row['firstname']) {
       if(password_verify($pass,$row['password'])){
        session_start();
        $_SESSION["user"] = $_POST["user"];
           header("location:index.php");
        die();
    //check if d len less than 8
 //  echo "<div class='alert alert-danger fadein'> Done no errors</div>";
       }
    //if password not match
    else {
        echo "<div class='alert alert-danger'>Password did not match </div>";
    }
   } else{
       echo "<div class='alert alert-danger'>Username not found </div>";
   }
} //end while

} //contain special char
else if(empty($Name))
 {
    echo "<div class='alert alert-info>container special </div>";
}



}


?>
</div>
  
<div class="form_container">
<form action="Login.php" method="POST">
<div class="form-group">
    <Label for="Add" class="form-text">Admin login only </Label>
</div>
  <hr class="mb-3">
  <div class="form-group">
    <input type="text" class="form-control" name="user" placeholder="Username" required >
  </div>
  
    <div class="form-group" >
    <input type="password" class="form-control" name="pass" placeholder="password" required >
    </div>
    
    
    
    <div class="form-btn">
      <input type="submit"
    name="submit" class="btn btn-primary" value="Login" >
    </div>
    <br>
 
       

  
  </form>



</div><!-- end container -->

</body>

</html>