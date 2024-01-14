<?php
//check if user is set::
session_start();
if(isset($_SESSION["user"])){

//include the require header files
include_once("Includes/nav.html");
//php model code here for database
$db = new PDO("sqlite:Invetory.db");
$query = "select * from ORDERS;";
$data = $db->query($query);
$result= $data->fetchAll(PDO::FETCH_ASSOC);

//echo $_SESSION["user"];
}
else{
    header("location:Login.php");
    die();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="We offer small business with apps to help them manage the business">
  <meta name="keywords" contact="business app,manage app">
  <link rel="stylesheet" href="templete/home_style.css">
  <!-- bootstrap link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  
  <title>Inventory management</title>
  </head>


<body>

<section id="search">
  <form action="#" method="GET">
  <div class="form-group">
    <label for="search" class="form-label">Search item :</label>
    <input type="search" name="item" width="50" placeholder="Search" class="form-control me-2">
     <div id="search-tips" class="form-text">search by price or name</div>
     
     <div class="form-group">
       <input type="submit" name="s" value="search" class="btn btn-primary">
     </div>
  </div>
  
  
  </form>
</section>
<br>

  
<p class="add">
   <a href="templete/Insert.php">Add Product</a>
</p>

<section id="table">
<div class="order_container" >
  
    <table class="table">
      <!-- Top header column -->
      <thead>
        <th scope="col">N/S</th>
        <th scope="col">Product name</th>
        <th scope="col">Category</th>     
        <th scope="col">Quatity</th> 
        <th scope="col">Total_cost</th>
        <th scope="col">Date </th>
      </thead>
    <tbody class="table-primary">
  <!-- Display from the Order table -->
 
 <?php  
    
foreach($result as $row){
    //display from the data
    echo "<tr class='table-secondary'>";
echo "<td>".$row["Idorder"]."</td>";       
echo "<td>".$row["Name"]."</td>";    
echo "<td> ".$row["Category"]."</td>"; 
echo "<td>".$row["Quatity"]."</td>";  
 
  

echo "<td>".$row["Total_cost"]."</td>";  
echo "<td>".$row["Order_date"]."</td>";
echo"</tr>";
}
  
?>
</tbody>
</table>
 </section>
</body>
</html>
<?php

//include the footer file
include_once("Includes/footer.html");
echo "<p>".Date("Y")."</p>";  

?>
