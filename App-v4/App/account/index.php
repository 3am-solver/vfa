<?php
    require('../connection/conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFA @Virtual Farming Assistant APP</title>
    <link rel="stylesheet" href="../css/account.css">
    <?php include('../include/base-css.php'); ?>

</head>

<body>
    <div class="container">
        <?php include('../include/sidebar.php'); ?>
        <main>
            <!-- Profile information -->
            <div class="profile-box" id="profile-box">
                <div class="nav">
                    <h2 style="color: white ;">My Profile</h2>
                    <h2 style="cursor:pointer; color:snow;" onclick="show_edit_box()">Edit Profile</h2>
                </div>
                <div class="middle">
                    <img src="../img/bg.jpg" alt="profile-image">
                    <h2 style="color: white;">Enter your Name</h2>
                    <div>
                        <!-- <span class="material-icons-sharp" style="color: white;">
                            whatsapp
                        </span> -->
                        <span style="color: white;">+91 6353485415</span>
                    </div>
                </div>
            </div>

            <!-- Your Current Crop -->
            <div class="crop" id="crop">
                <div class="card">
                    <h4>Sowing Date: <b>7 March,2022</b></h4>
                    <div class="inner-card">
                        <div class="rightside">
                            <div>
                                <h3>Farm Name: </h3>
                                <p>Your Farm name goes here</p>
                            </div>
                            <div>
                                <h3>Crop Name: </h3>
                                <p>Crop Name goes here</p>
                            </div>
                        </div>
                        <div class="left">
                            <img src="../img/carousel-image04.jpg" alt="crop-image">
                        </div>
                    </div>
                </div>
                <div style=" text-align:center;">
                    <a href="../auth/auth.php?signout=true" style="color: red; text-decoration:underline; font-size:1rem;">Sign Out</a>
                </div>
            </div>

            <!-- Edit Profile -->
            <div class="edit-profile" id="edit-profile-box">
                <div class="top">
                    <span class="material-icons-sharp back-btn" style="margin-right: 5px; cursor:pointer;" onclick="show_profile()">keyboard_backspace</span>
                    <h2>Edit Profile</h2>
                </div>
                <div class="edit-profile-body">
                    <form action="#" method="POST">
                        <input type="text" name="farmer-name" id="farmer-name" placeholder="Name">
                        <input type="tel" name="farmer-mobile" id="farmer-mobile" placeholder="Mobile No">
                        <input type="text" name="farmer-state" id="farmer-state" placeholder="State">
                        <input type="text" name="farmer-district" id="farmer-district" placeholder="District">
                        <input type="text" name="farmer-taluka" id="farmer-taluka" placeholder="Taluka">
                        <input type="text" name="farmer-village" id="farmer-village" placeholder="Village">
                    </form>
                </div>
            </div>
        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    <script src="../js/index.js"></script>
    <script>
        function show_profile() {
            document.getElementById('profile-box').style.display = 'block';
            document.getElementById('crop').style.display = 'block';
            document.getElementById('edit-profile-box').style.display = 'none';
        }

        function show_edit_box() {
            document.getElementById('profile-box').style.display = 'none';
            document.getElementById('crop').style.display = 'none';
            document.getElementById('edit-profile-box').style.display = 'block';

        }
    </script>
</body>

</html>