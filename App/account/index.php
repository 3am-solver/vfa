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
    <style>
        .btn {
            width: 100%;
            outline: none;
            border: none;
            padding: 1rem;
            margin: 0 auto;
            color: white;
            font-size: large;
            background-color: lime;
            border-radius: 1rem;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php include('../include/sidebar.php'); ?>
        <main>
            <!-- Notification  -->
            <!-- Info Message -->
            <div class="alert success">

            </div>
            <!-- Notification Ends Here -->
            <!-- Profile information -->
            <div class="profile-box" id="profile-box">
                <div class="nav">
                    <h2>My Profile</h2>
                    <h2 style="cursor:pointer;" onclick="show_edit_box()">Edit Profile</h2>
                </div>
                <div class="middle">
                    <img src="../img/default-user.png" alt="profile-image">
                    <h2 id="farmerName">Farmer Name</h2>
                    <div>
                        <!-- <span class="material-icons-sharp" style="color: white;">
                            whatsapp
                        </span> -->
                        <span id="farmerMobile">+91 63534854xx</span>
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
                    <span id="logout" style="color: red; text-decoration:underline; font-size:1rem; cursor: pointer;">Sign Out</span>
                </div>
            </div>

            <!-- Edit Profile Box -->
            <div class="edit-profile" id="edit-profile-box">
                <div class="top">
                    <span class="material-icons-sharp back-btn" style="margin-right: 5px; cursor:pointer;" onclick="show_profile()">keyboard_backspace</span>
                    <h2>Edit Profile</h2>
                </div>
                <div class="edit-profile-body">
                    <form onsubmit="return false;" method="post" id="edit-form">
                        <input type="hidden" name="farmer-id" id="farmer-id" value="">
                        <input type="text" name="farmer-name" id="farmer-name" placeholder="Name">
                        <input type="text" name="farmer-username" id="farmer-username" placeholder="User name">
                        <input type="tel" name="farmer-mobile" id="farmer-mobile" placeholder="Mobile No">
                        <input type="email" name="farmer-mail" id="farmer-mail" placeholder="Email">
                        <input type="text" name="farmer-state" id="farmer-state" placeholder="State">
                        <input type="text" name="farmer-district" id="farmer-district" placeholder="District">
                        <input type="text" name="farmer-taluka" id="farmer-taluka" placeholder="Taluka">
                        <input type="text" name="farmer-village" id="farmer-village" placeholder="Village">
                        <input type="text" name="farmer-code" id="farmer-code" placeholder="Area Pincode">
                        <button class="btn" onclick="updateProfile();"> Update Profile </button>
                    </form>
                </div>
            </div>
            <!-- Edit Profile Box Ends Here -->
        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    <script src="../js/index.js"></script>
    <script>
        // Getting Farmers Name and Mobile no from Javascript Session 
        $("#farmerName").text(sessionStorage.getItem("farmerName"));
        $("#farmerMobile").html("+91 <b>" + sessionStorage.getItem("farmerMno") + "</b>");

        function show_profile() {
            document.getElementById('profile-box').style.display = 'block';
            document.getElementById('crop').style.display = 'block';
            document.getElementById('edit-profile-box').style.display = 'none';
        }

        function show_edit_box() {
            // Editing Profile 
            document.getElementById('profile-box').style.display = 'none';
            document.getElementById('crop').style.display = 'none';
            document.getElementById('edit-profile-box').style.display = 'block';

            // Edit Box Input Value Place holder 
            if (sessionStorage.getItem("farmerName") != "") {
                $("#farmer-name").attr("placeholder", sessionStorage.getItem("farmerName"));
            } else {
                $("#farmer-name").attr("placeholder", "Enter Name");
            }

            if (sessionStorage.getItem("farmerUsername") != "") {
                $("#farmer-username").attr("placeholder", sessionStorage.getItem("farmerUsername"));
            } else {
                $("#farmer-username").attr("placeholder", "Enter Username");
            }

            if (sessionStorage.getItem("farmerMno") != "") {
                $("#farmer-mobile").attr("placeholder", sessionStorage.getItem("farmerMno"));
            } else {
                $("#farmer-mobile").attr("placeholder", "Enter Mobileno");
            }

            if (sessionStorage.getItem("farmerEmail") != null) {
                $("#farmer-mail").attr("placeholder", sessionStorage.getItem("farmerEmail"));
            } else {
                $("#farmer-mail").attr("placeholder", "Enter Email");
            }

            if (sessionStorage.getItem("farmerState") != null) {
                $("#farmer-state").attr("placeholder", sessionStorage.getItem("farmerState"));
            } else {
                $("#farmer-state").attr("placeholder", "Enter State");
            }

            if (sessionStorage.getItem("farmerDistrict") != "") {
                $("#farmer-district").attr("placeholder", sessionStorage.getItem("farmerDistrict"));
            } else {
                $("#farmer-district").attr("placeholder", "Enter District");
            }

            if (sessionStorage.getItem("farmerTaluko") == "") {
                $("#farmer-taluka").attr("placeholder", sessionStorage.getItem("farmerTaluko"));
            } else {
                $("#farmer-taluka").attr("placeholder", "Enter Taluko");
            }

            if (sessionStorage.getItem("farmerVillage") == "") {
                $("#farmer-village").attr("placeholder", sessionStorage.getItem("farmerVillage"));
            } else {
                $("#farmer-village").attr("placeholder", "Enter Village");
            }

            if (sessionStorage.getItem("farmerPincode") == "") {
                $("#farmer-code").attr("placeholder", sessionStorage.getItem("farmerPincode"));
            } else {
                $("#farmer-code").attr("placeholder", "Enter pincode");
            }
        }

        // Logging Out 
        $("#logout").click(() => {
            let see = confirm("Are you sure you want to Logout?");
            if (see) {
                sessionStorage.clear();
                window.location.href = "../auth";
            } else {
                console.log("Logout Canceled by user");
            }
        })

        // Updating Profile 
        function updateProfile() {
            // Sending Farmer id for Updating records 
            $("#farmer-id").val(sessionStorage.getItem("farmerId")); // Don't modify this value 

            // Performing AJAX Request
            let confirm = confirm("Are you Sure you want to Update your Profile? ");
            if (confirm) {
                $.post({
                    url: "edit.php",
                    data: $("#edit-form").serialize(),
                    success: (Response) => {
                        console.log(Response);
                        if (Response.status) {
                            show_profile();
                            $(".success").html('<input type="checkbox" id="alert1" /> <label class="close" ="close" ="alert1"> <i class="icon-remove"></i> </label> <p class="inner"> <strong>Success!</strong> ' + Response.msg + '</p>');
                            console.log(Response); // Debugging 
                            sessionStorage.setItem("userLoggedin", Response.status);
                            sessionStorage.setItem("farmerId", Response.data[0]["id"]);
                            sessionStorage.setItem("farmerName", Response.data[0]["name"]);
                            sessionStorage.setItem("farmerMno", Response.data[0]["mobile"]);
                            sessionStorage.setItem("farmerUsername", Response.data[0]["username"]);
                            sessionStorage.setItem("farmerEmail", Response.data[0]["email"]);
                            sessionStorage.setItem("farmerState", Response.data[0]["state"]);
                            sessionStorage.setItem("farmerDistrict", Response.data[0]["district"]);
                            sessionStorage.setItem("farmerTaluko", Response.data[0]["taluka"]);
                            sessionStorage.setItem("farmerVillage", Response.data[0]["village"]);
                            sessionStorage.setItem("farmerPincode", Response.data[0]["pincode"]);
                        }
                    },
                    error: (Response) => {
                        console.log(Response);
                    }
                })
            }
        }
    </script>
</body>

</html>