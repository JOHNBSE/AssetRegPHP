<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumables</title>
    <link rel="stylesheet" href="../assets/css/dash.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li>
                <img style="border-radius:50%; height: 70px; width: 70px; position: fixed; position: sticky; padding-top: 0;" src="../assets/images/face.png">
                <span>ADMIN</span>
            </li>
            <li>
            <li class="active">
                <a href="dash.php">
                    <i class="fa fa-tachometer" aria-hidden="true"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="active">
                <a href="assets.php">
                    <i class="fa fa-suitcase" aria-hidden="true"></i>
                    <span>Assets</span>
                </a>
            </li>
            <li class="active">
                <a href="locations.php">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>Locations</span>
                </a>
            </li>
            <li class="active">
                <a href="consumables.php">
                    <i class="fa fa-wpforms" aria-hidden="true"></i>
                    <span>Consumables</span>
                </a>
            </li>
            <li class="active">
                <a href="requests.php">
                    <i class="fa fa-comments" aria-hidden="true"></i>
                    <span>Requests</span>
                </a>
            </li>
            <li class="active">
                <a href="assetcategories.php">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span>Asset Categories</span>
                </a>
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
    <section class="main">
        <div>
            <h3>Consumables</h3>
            <div class="new_button">
                <a href="../forms/consumablesform.php">Create new</a>
            </div>
             <div class="back"><button><a href="./dash.php">BACK</a></button></div>
        </div>
        <div class="tabular-wrapper">

            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>CATEGORYID</th>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>PURCHASE DATE</th>
                            <th>QUANTITY</th>
                        </tr>
                    </thead>
                    <tbody id="consumablesTable">
                    <?php
                    include ("../configuration/db.php");

                    // query the database for assets
                    $sql = "SELECT * FROM consumables";
                    $result = $con->query($sql);

                    // loop through the query results and display the data in a table row
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["categoryID"] . "</td><td>" . $row["consumableID"] . "</td><td>" . $row["name"] . "</td><td>" . $row["purchase_date"] . "</td><td>" . $row["quantity"] . "</td></tr>";
                        }
                    } else {
                        echo "No information  found.";
                    }

                    // close the database connection
                    $con->close();
                    ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="7"><button>View all</button></td>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>
        <div>

        </div>
    </section>
    <!-- <script src="../scripts/consumables.js"></script> -->
</body>
</html>