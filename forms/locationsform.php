<?php 
session_start();
 include "../configuration/db.php";

 if(isset($_POST['submit'])){
	$loc_id = $_POST['id'];
	$name = $_POST['name'];
	$des = $_POST['description'];

	$query = mysqli_query($con,"INSERT INTO mydb.asset_category(`locationID`,`location_name`,`description`)values('$loc_id','$name','$des')");
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Location</title>
    <link rel="stylesheet" href="../assets/css/dash.css">
    <link rel="stylesheet" href="../assets/css/form.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
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
        ADD NEW LOCATION
       </div>
   <div class="wrapper">
    <div class="back">
        <button><a href="../html/locations.html">BACK</a></button>
       </div>
    <div class="form">
        <div class="input_field">
            <label>Location Name</label>
            <input type="text" class="input">
        </div>
        <div class="input_field">
            <label>Room number</label>
            <input type="text" class="input">
        </div>
        <div class="input_field">
            <label>Department</label>
            <input type="text" class="input">
        </div>
        <div class="input_field">
    
            <input type="submit" value="ADD" class="btn">
        </div>
        
    </div>
   </div> 
</body>
</html>