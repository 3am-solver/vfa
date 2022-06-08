<?php
require("../connection/conn.php");
// echo "<br>farmer id is in session = ".$_SESSION['farmerId'];
// echo "<br>farmer Name is in session = ".$_SESSION['farmerName'];
// echo "<br>farmer username is in session = ".$_SESSION['farmerUsername'];
if (isset($_SESSION['userlogin']) != true) {
    echo "<script> document.location = '../auth';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFA @Virtual Farming Assistant APP</title>
    <?php include('../include/base-css.php'); ?>
    <link rel="stylesheet" href="../css/home.css">
</head>

<body>
    <div class="container">
        <?php include('../include/sidebar.php'); ?>
        <main>
            <!-- Card Section -->
            <h1>Home</h1>
            <div class="cards">
                <?php
                    if(isset($_GET['cropnotadded'])){
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Error ! </strong> Sorry we are facing some Issues regarding to insert your crop details Please Try Again After some Time :)<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>';
                    }
                ?>
                <!-- Add new Farm Card -->
                <div class="card" id="add-new-farm-data" style="cursor: pointer;">
                    <div class="middle">
                        <span>+</span>
                        <h2>Add New Crop Details </h2>
                    </div>
                </div>
                <!-- Crop tracing Card  -->
                <?php
                $farmer_id = $_SESSION['farmerId'];
                $result = mysqli_query($con, "SELECT * FROM `crop-tracking` WHERE `farmer_id` = $farmer_id");
                // Query to get name of Farmers Crop 
                $crop_nameSQL = "SELECT `crop-tracking`.`crop_id`, `crop`.`name`\n" . "FROM `crop-tracking`\n" . "INNER JOIN `crop` ON `crop-tracking`.`crop_id` = `crop`.`id`;";
                $crop_nameResult = mysqli_query($con, $crop_nameSQL);
                while ($data = mysqli_fetch_array($result) && $crop_name = mysqli_fetch_array($crop_nameResult)) {
                    echo "<div class='card' style='cursor: pointer;' onclick='openFarmDetail()'>
                    <div class='middle'>
                        <span class='material-icons-sharp'>auto_graph</span>
                        <div class='left' style='width: 100%;margin: 0.8rem;'>
                            <h3>".$crop_name['name']."</h3>
                            <h1>Current State of Crop</h1>
                        </div>
                        <div class='progress'>
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class='number'>
                                <p>84%</p>
                            </div>
                        </div>
                    </div>
                </div>";
                }
                ?>
            </div>
            <!-- Script to open Farm Details Page -->
            <script>
                    function openFarmDetail(){
                        window.location.href='farm-detail.php'
                    }
                </script>
        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    <form action="add-crop-tracking.php" method="POST">
        <!-- select-crop-section start-->
        <div class="select-crop-section crop-add">
            <span class="material-icons-sharp back-btn" onclick="this.parentElement.style.display = 'none';">keyboard_backspace</span>
            <div class="crop-gallary">
                <?php
                $result = mysqli_query($con, "SELECT * FROM crop");
                while ($data = mysqli_fetch_array($result)) {
                    echo '<div class="crop-item" onClick="reply_click(this.id)" id=' . $data["id"] . '>
                    <img src="../img/upload/crop/' . $data["image"] . '" alt="crop-image">
                    <h2 id="crop-name">' . $data["name"] . '</h2> 
                    </div>';
                }
                ?>
                <input type="hidden" name="crop-id" id="crop-id" value="null">
                <script>
                    // Getting Selected Crop Id
                    function reply_click(clicked_id) {
                        $("#crop-id").val(clicked_id);
                    }
                </script>
            </div>
        </div>
        <!-- select-crop-section Ends -->
        <!-- Select Date of sowing -->
        <div class="date-of-sowing crop-add" id="add-sowing">
            <span class="material-icons-sharp back-btn" onclick="this.parentElement.style.display = 'none';">keyboard_backspace</span>
            <div class="crop-add-body">
                <h3>
                    Please select the accureate Date of Sowing of your crop as it is an important part of your crop lifecycle
                </h3>
                <h1 for="sowing-date">Enter sowing Date</h1>
                <input type="date" name="sowing-date" id="sowing-date">
            </div>
            <div class="note-card">
                <div class="note-icon">
                    <span class="material-icons-sharp">
                        tips_and_updates
                    </span>
                    <h3>Tips</h3>
                </div>
                <div class="note-body">
                    <div class="note-title">
                        <h3>Why we Need Date of Sowing?</h3>
                    </div>
                    <div class="note-description">
                        <h4>VFA will keep you informed about your entire crop cycle from the date of sowing to the final harvest</h4>
                    </div>
                </div>
            </div>
            <div class="crop-add-btn">
                <button class="btn btn-previous" onclick='$(".date-of-sowing").css("display","none")'>PREVIOUS</button>
                <span class="btn btn-next" onclick='$(".add-farm-area").css("display","block")'>NEXT</span>
            </div>
        </div>
        <!-- Date of sowing Section Ends Here -->
        <!-- Enter Farm Area -->
        <div class="add-farm-area crop-add" id="select-area">
            <span class="material-icons-sharp back-btn" onclick="this.parentElement.style.display = 'none';">keyboard_backspace</span>
            <div class="crop-add-body">
                <h1>How much area is taken by your Crop</h1>
                <div>
                    <input type="text" name="area">
                    <select name="area-type" id="area-type">
                        <option value="acre">Acre</option>
                        <option value="hacter">Hacter</option>
                        <option value="vigha">Vigha</option>
                    </select>
                </div>
            </div>
            <div class="note-card">
                <div class="note-icon">
                    <span class="material-icons-sharp">
                        tips_and_updates
                    </span>
                    <h3>Tips</h3>
                </div>
                <div class="note-body">
                    <div class="note-title">
                        <h3>Why we Need Farm size?</h3>
                    </div>
                    <div class="note-description">
                        <h4>VFA will help you get personalized information about the right quantity of seeds and fertilizers</h4>
                    </div>
                </div>
            </div>
            <div class="crop-add-btn">
                <button class="btn" onclick='$(".add-farm-area").css("display","none")'>PREVIOUS</button>
                <button class="btn" type="submit">Add Farm</button>
            </div>
        </div>

    </form>
    <!-- Farm Area Ends here -->
    <script src="../js/index.js"></script>
</body>

</html>