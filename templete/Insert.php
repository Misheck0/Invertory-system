<?php

include_once("../Includes/nav.html");

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
  </style>
  <title></title>
</head>

<body>
  
  
<div class="form_container">
<div class="form-group">
    <Label for="Add" class="form-text">Add into Order </Label>
</div>
  <form method="post" action="#">
  <div class="form-group" >
    <input type="text" class="form-control" name="device" placeholder="Product name" require >
  </div>
  
    <div class="form-group" >
    <input type="text" class="form-control" name="Quantity" placeholder="Number of peice" >
    </div>
    
   <div class="form-group" >
    <input type="text" class="form-control" name="total" placeholder="Total cost" >
    </div>


    <div class="form-btn">
      <input type="submit" class="btn btn-primary" value="Add" >
    </div>
    
  
  </form>
</div><!-- end container -->

</body>

</html>



<?php
include_once("../Includes/footer.html");
?>