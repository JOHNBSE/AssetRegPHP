<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Consumable</title>
    <link rel="stylesheet" href="../assets/css/dash.css">
    <link rel="stylesheet" href="../assets/css/form.css">
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
        ADD NEW CONSUMABLE
       </div>
   <div class="wrapper">
    <form method="post">
    <div class="back">
        <a href="../forms/assetsform.html"><input type="submit" value="BACK" class="button"></a>
       </div>
    <div class="form">
        <div class="input_field">
            <label>Category(ID)</label>
            <input type="text" name='catid' id='catid' class="input">
        </div>
        <div class="input_field">
            <label>ID</label>
            <input type="text" name ='id' id = 'id'class="input">
        </div>
        <div class="input_field">
            <label>Name</label>
            <input type="text" name='name' id = 'name' class="input">
        </div>
        <div class="input_field">
            <label>Purchase date</label>
            <input type="date" name = 'date' id='date' class="input">
        </div>
        <div class="input_field">
            <label>quantity</label>
            <input type="text" name = 'qty' id="qty" class="input">
        </div>
        <div class="input_field">
            <input type="submit" value="ADD" name ='submit' class="btn">
        </div>
        
    </div>
</form>
   </div> 

</body>
</html>
<?php 
session_start();
 include "../configuration/db.php";

 if(isset($_POST['submit'])){
	$cat_id = $_POST['catid'];
    $consumable_id = $_POST['id'];
	$name = $_POST['name'];
	$date = $_POST['date'];
    $quantity = $_POST['qty'];

	$query = mysqli_query($con,"INSERT INTO consumables(`consumableID`,`name`,`categoryID`,`quantity`,`purchase_date`)values('$consumable_id','$name','$cat_id',$quantity,$date)");

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