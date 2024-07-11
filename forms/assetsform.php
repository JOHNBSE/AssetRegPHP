<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>New Item</title>
    <link rel="stylesheet" href="../assets/css/form.css">
    <link rel="stylesheet" href="../assets/css/dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
  <div class="sidebar">
    <div class="logo"></div>
    <ul class="menu">
        <li>
            <img style="border-radius:50%; height: 70px; width: 70px; position: fixed; position: sticky; padding-top: 0;" src="../resources/face.png">
            <span>ADMIN</span>
        </li>
        <li>
        <li class="active">
            <a href="../admin/dash.php">
                <i class="fa fa-tachometer" aria-hidden="true"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="active">
            <a href="../admin/assets.php">
                <i class="fa fa-suitcase" aria-hidden="true"></i>
                <span>Assets</span>
            </a>
        </li>
        <li class="active">
            <a href="../admin/locations.php">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>Locations</span>
            </a>
        </li>
        <li class="active">
            <a href="../admin/consumables.php">
                <i class="fa fa-wpforms" aria-hidden="true"></i>
                <span>Consumables</span>
            </a>
        </li>
        <li class="active">
            <a href="../admin/requests.php">
                <i class="fa fa-comments" aria-hidden="true"></i>
                <span>Requests</span>
            </a>
        </li>
        <li class="active">
            <a href="../admin/assetcategories.php">
                <i class="fa fa-users" aria-hidden="true"></i>
                <span>Asset Categories</span>
            </a>
        </li>
        </li>
        </li>
        <li class="logout">
            <a href="#">
                <i class="fa fa-sign-out"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
</div>
<div class="title">
  ADD NEW ASSET
 </div>
   <div class="wrapper">
   <form method = "post">
    <div class="form">
      <div class="back">
        <button><a href="../admin/">BACK</a></button>
       </div>
       <div class="input_field">
          <label>Asset ID</label>
          <input type="text" name="id" id = "id" class="input" />
        </div>
        <div class="input_field">
          <label>Name</label>
          <input type="text" name="name" id = "name" class="input" />
        </div>
        <div class="input_field">
          <label>Serial No</label>
          <input type="text" name="serial_no" id = "serial_no" class="input" />
        </div>
        <div class="input_field">
          <label>Location</label>
          <input type="text" name="location" id = "location" class="input" />
        </div>
        <div class="input_field">
          <label>Status</label>
          <input type="text" name="status" id = "status" class="input" />
        </div>
        <div class="input_field">
          <label>Model</label>
          <input type="text" name="model" id = "model" class="input" />
        </div>
        <div class="input_field">
          <label>Category</label>
          <input type="text" name="category" id = "category" class="input" />
        </div>
        <div class="input_field">
          <input type="submit" value="ADD" name="submit" class="btn" />
        </div>
      </div>
   </form>
    </div>
    <script src="../scripts/assets.js"></script>
  </body>
</html>

<?php 
session_start();
 include "../configuration/db.php";

 if(isset($_POST['submit'])){
	$asset_id = $_POST['id'];
	$name = $_POST['name'];
	$serial_no = $_POST['serial_no'];
  $location = $_POST['location'];
  $condition = $_POST['status'];
  $model = $_POST['model'];
  $cat_id = $_POST['category'];

	$query = mysqli_query($con,"INSERT INTO asset_information(`assetID`,`asset_name`,`serial_no`,`locationID`,`condition`,`model`,`categoryID`)values($asset_id,'$name','$serial_no','$location','$condition','$model','$cat_id')");
  if($query){
    ?>
    <script>
    swal({
      title: "success",
      text: "Data added",
      icon: "success",
      });
    </script>
    
    <?php
  }
  
}

?>