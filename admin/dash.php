<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="../assets/css/dash.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
</head>
<body>
    <!-- Topbar (mobile only) -->
<header class="topbar">
    <button class="menu-btn" id="openSidebar" aria-label="Open menu">
        <i class="fa fa-bars"></i>
    </button>
    <!-- <h1 class="topbar-title">Dashboard</h1> -->
</header>

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="logo"></div>
    <ul class="menu">
        <li>
            <img src="../assets/images/face.png" style="border-radius:50%; height: 70px; width: 70px;">
            <span>ADMIN</span>
        </li>
        <li class="active">
            <a href="dash.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a>
        </li>
        <li class="active">
            <a href="assets.php"><i class="fa fa-suitcase"></i><span>Assets</span></a>
        </li>
        <li class="active">
            <a href="locations.php"><i class="fa fa-map-marker"></i><span>Locations</span></a>
        </li>
        <li class="active">
            <a href="consumables.php"><i class="fa fa-wpforms"></i><span>Consumables</span></a>
        </li>
        <li class="active">
            <a href="requests.php"><i class="fa fa-comments"></i><span>Requests</span></a>
        </li>
        <li class="active">
            <a href="assetcategories.php"><i class="fa fa-users"></i><span>Asset Categories</span></a>
        </li>
        <li class="logout">
            <a href="#"><i class="fa fa-sign-out"></i><span>Logout</span></a>
        </li>
    </ul>
</div>

    <!-- Main content -->
    <main class="main" id="mainContent">
        <div class="stats">
            <div class="card">
                <i class="fa fa-user"></i>
                <h3>Assets</h3>
                <p id="asset_no">1000</p>
                <button><a href="./assets.php">view all</a></button>
            </div>
            <div class="card">
                <i class="fa fa-user"></i>
                <h3>Locations</h3>
                <p id="location_no">1000</p>
                <button><a href="./locations.php">View All</a></button>
            </div>
            <div class="card">
                <i class="fa fa-user"></i>
                <h3>Consumables</h3>
                <p id="consumables_no">1000</p>
                <button><a href="./consumables.php">View All</a></button>
            </div>
            <div class="card">
                <i class="fa fa-user"></i>
                <h3>Requests</h3>
                <p id="requests_no">1000</p>
                <button><a href="./requests.php">View All</a></button>
            </div>
            <div class="card">
                <i class="fa fa-user"></i>
                <h3>Asset Categories</h3>
                <p id="category_no">1000</p>
                <button><a href="./assetcategories.php">View All</a></button>
            </div>
        </div>

        <div class="search-row">
            <label for="search">SEARCH</label>
            <span><input type="text" placeholder="Lookup Asset by tag or Category" id="searchValue"></span>
            <select id="searchType">
                <option value="category">Search by category</option>
                <option value="serial_no">Search by Serial_no</option>
            </select>
            <button id="searchBtn"><span><i class="fa fa-search"></i></span></button>
        </div>

        <div class="tabular-wrapper">
            <h3 class="main-title">Assets</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>CategoryID</th>
                            <th>Model</th>
                            <th>Serial No.</th>
                            <th>Location</th>
                            <th>Condition</th>
                        </tr>
                    </thead>
                    <tbody id="tableBody">
                    <?php
                    include ("../configuration/db.php");

                    // query the database for assets
                    $sql = "SELECT * FROM asset_information";
                    $result = $con->query($sql);

                    // loop through the query results and display the data in a table row
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>".$row["assetID"] ."</td><td>". $row["asset_name"] . "</td><td>" . $row["categoryID"] . "</td><td>" . $row["model"] . "</td><td>" . $row["serial_no"] . "</td><td>" . $row["locationID"] . "</td><td>" . $row["Condition"] ."</td></tr>";
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
    </main>

    <!-- JS: sidebar toggle -->
    <script>
    const sidebar = document.getElementById('sidebar');
    const openBtn = document.getElementById('openSidebar');

    openBtn.addEventListener('click', () => {
        sidebar.classList.toggle('open');
    });

    // Optional: close sidebar when clicking outside
    document.addEventListener('click', (e) => {
        if (window.innerWidth <= 900 && sidebar.classList.contains('open')) {
            if (!sidebar.contains(e.target) && !openBtn.contains(e.target)) {
                sidebar.classList.remove('open');
            }
        }
    });
</script>

</body>
</html>
