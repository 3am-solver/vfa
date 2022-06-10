<?php
session_start();
if (isset($_SESSION['userlogin'])) {
    echo "<script> document.location = '../home';</script>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFA @Login/Register</title>
    <link rel="stylesheet" href="../css/authenticate.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <style>
        @import url(https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css);

        .alert .inner {
            display: block;
            padding: 1rem;
            margin: 6px;
            border-radius: 3px;
            border: 1px solid rgb(180, 180, 180);
            background-color: rgb(212, 212, 212);
        }

        .alert .close {
            float: right;
            margin: 3px 12px 0px 0px;
            cursor: pointer;
        }

        .alert .inner,
        .alert .close {
            color: rgb(88, 88, 88);
        }

        .alert input {
            display: none;
        }

        .alert input:checked~* {
            animation-name: dismiss, hide;
            animation-duration: 300ms;
            animation-iteration-count: 1;
            animation-timing-function: ease;
            animation-fill-mode: forwards;
            animation-delay: 0s, 100ms;
        }

        .alert.error .inner {
            border: 1px solid rgb(238, 211, 215);
            background-color: rgb(242, 222, 222);
        }

        .alert.error .inner,
        .alert.error .close {
            color: rgb(185, 74, 72);
        }

        .alert.success .inner {
            border: 1px solid rgb(214, 233, 198);
            background-color: rgb(223, 240, 216);
        }

        .alert.success .inner,
        .alert.success .close {
            color: rgb(70, 136, 71);
        }

        .alert.info .inner {
            border: 1px solid rgb(188, 232, 241);
            background-color: rgb(217, 237, 247);
        }

        .alert.info .inner,
        .alert.info .close {
            color: rgb(58, 135, 173);
        }

        .alert.warning .inner {
            border: 1px solid rgb(251, 238, 213);
            background-color: rgb(252, 248, 227);
        }

        .alert.warning .inner,
        .alert.warning .close {
            color: rgb(192, 152, 83);
        }

        @keyframes dismiss {
            0% {
                opacity: 1;
            }

            90%,
            100% {
                opacity: 0;
                font-size: 0.1px;
                transform: scale(0);
            }
        }

        @keyframes hide {
            100% {
                height: 0px;
                width: 0px;
                overflow: hidden;
                margin: 0px;
                padding: 0px;
                border: 0px;
            }
        }
    </style>
</head>

<body>
    <!-- Notificatin -->
    <!-- Class list: error, success, info, warning, alert -->
    <!-- Info Message -->
    <div class="alert info">

    </div>
    <!-- Warning Message  -->
    <div class="alert warning">

    </div>
    <!-- error Message -->
    <div class="alert error">

    </div>
    <!-- Notification Ends Here -->
    <div id="container" class="container">
        <!-- FORM SECTION -->
        <div class="row">
            <!-- SIGN UP -->
            <div class="col align-items-center flex-col sign-up">
                <div class="form-wrapper align-items-center">
                    <form method="post" id="register-form" onsubmit="return false;" class="form sign-up">
                        <div class="input-group">
                            <i class='bx bxs-user'></i>
                            <input type="text" placeholder="Name" name="f-name" id="fname">
                        </div>
                        <div class="input-group">
                            <i class='bx bx-mail-send'></i>
                            <input type="tel" placeholder="Mobile No" name="f-mobileno" id="fmobile">
                        </div>
                        <div class="input-group">
                            <i class='bx bx-mail-send'></i>
                            <input type="tel" placeholder="Email" name="f-email" id="fmail">
                        </div>
                        <div class="input-group">
                            <i class='bx bxs-user'></i>
                            <input type="text" placeholder="Username" name="f-username" id="fusername">
                        </div>
                        <div class="input-group">
                            <i class='bx bxs-lock-alt'></i>
                            <input type="password" placeholder="Password" id="password">
                        </div>
                        <div class="input-group">
                            <i class='bx bxs-lock-alt'></i>
                            <input type="password" placeholder="Confirm password" name="f-password" id="cpassword">
                        </div>
                        <button type="button" onclick="register();">
                            Sign up
                        </button>
                        <p>
                            <span>
                                Already have an account?
                            </span>
                            <b onclick="toggle()" class="pointer">
                                Sign in here
                            </b>
                        </p>
                    </form>
                </div>
            </div>
            <!-- END SIGN UP -->

            <!-- SIGN IN -->
            <div class="col align-items-center flex-col sign-in">
                <div class="form-wrapper align-items-center">
                    <form class="form sign-in" method="post" onsubmit="return false;" id="login-form">
                        <div class="input-group">
                            <i class='bx bxs-user'></i>
                            <input type="text" placeholder="Username" name="f-username">
                        </div>
                        <div class="input-group">
                            <i class='bx bxs-lock-alt'></i>
                            <input type="password" placeholder="Password" name="f-password">
                        </div>
                        <button type="button" onclick="login();">
                            Sign in
                        </button>
                        <p>
                            <b>
                                Forgot password?
                            </b>
                        </p>
                        <p>
                            <span>
                                Don't have an account?
                            </span>
                            <b onclick="toggle()" class="pointer">
                                Sign up here
                            </b>
                        </p>
                    </form>
                </div>
                <div class="form-wrapper">

                </div>
            </div>
            <!-- END SIGN IN -->
        </div>
        <!-- END FORM SECTION -->

        <!-- CONTENT SECTION -->
        <div class="row content-row">
            <!-- SIGN IN CONTENT -->
            <div class="col align-items-center flex-col">
                <div class="text sign-in">
                    <h2>
                        Welcome to VFA
                    </h2>

                </div>
                <div class="img sign-in">

                </div>
            </div>
            <!-- END SIGN IN CONTENT -->
            <!-- SIGN UP CONTENT -->
            <div class="col align-items-center flex-col">
                <div class="img sign-up">

                </div>
                <div class="text sign-up">
                    <h2>
                        Join with VFA
                    </h2>

                </div>
            </div>
            <!-- END SIGN UP CONTENT -->
        </div>
        <!-- END CONTENT SECTION -->

    </div>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <!-- Animation Design Script  -->
    <script>
        let container = document.getElementById('container')

        toggle = () => {
            container.classList.toggle('sign-in')
            container.classList.toggle('sign-up')
        }

        setTimeout(() => {
            container.classList.add('sign-in')
        }, 200)
    </script>

    <!-- Ajax Script -->
    <script>
        // Login Ajax Request  
        function login() {
            $.post({
                url: 'login.php',
                data: $("#login-form").serialize(),
                success: function(response) {
                    // console.log(response); // Debugging 
                    sessionStorage.setItem("userLoggedin", response.status);
                    sessionStorage.setItem("farmerId", response.data[0]["id"]);
                    sessionStorage.setItem("farmerName", response.data[0]["name"]);
                    sessionStorage.setItem("farmerMno", response.data[0]["mobile"]);
                    sessionStorage.setItem("farmerUsername", response.data[0]["username"]);
                    sessionStorage.setItem("farmerEmail", response.data[0]["email"]);
                    sessionStorage.setItem("farmerState", response.data[0]["state"]);
                    sessionStorage.setItem("farmerDistrict", response.data[0]["district"]);
                    sessionStorage.setItem("farmerTaluko", response.data[0]["taluka"]);
                    sessionStorage.setItem("farmerVillage", response.data[0]["village"]);
                    sessionStorage.setItem("farmerPincode", response.data[0]["pincode"]);

                    if (response.status == true) {
                        window.location.href = "../home";
                    }

                    // If username or password are not valid show this notification
                    if (response.status == false) {
                        console.warn("Invalid Username or Password");
                        $(".error").html('<input type="checkbox" id="alert1" /> <label class="close" for="alert1"> <i class="icon-remove"></i> </label> <p class="inner"> <strong>Warning!</strong> ' + response.data + '</p>');
                    }
                },
                error: function(data) {
                    console.error("ERROR: Login.php is not getting any Response from Server");
                    $(".error").html('<input type="checkbox" id="alert1" /> <label class="close" for="alert1"> <i class="icon-remove"></i> </label> <p class="inner"> <strong>ERROR! </strong> Login.php is not getting any Response from Server </p>');
                }
            });
        }

        // Registration AJax Request 
        function register() {
            let pass = $("#password").val();
            let cpass = $("#cpassword").val();
            let name = $("#fname").val();
            let username = $("#fusername").val();
            let mobile = $("#fmobile").val();
            let email = $("#fmail").val();

            console.log("Password = " + pass);
            console.log("Confirm Password = " + cpass);
            console.log(typeof(username) + username);
            if (pass == cpass) {
                console.log("Password Matched...");
                if (name == "" || username == "" || mobile == "" || email == "") {
                    $(".info").html('<input type="checkbox" id="alert1" /> <label class="close" for="alert1"> <i class="icon-remove"></i> </label> <p class="inner"> <strong>Info!</strong>  Please Fillout All Details! </p>');
                } else {
                    // Performing Ajax Registration request 
                    console.log("Performing Ajax Request... ");
                    $.post({
                        url: "register.php",
                        data: $("#register-form").serialize(),
                        success: (response) => {
                            console.log(response);
                            sessionStorage.setItem("userLoggedin", response.status);
                            sessionStorage.setItem("farmerId", response.data[0]["id"]);
                            sessionStorage.setItem("farmerName", response.data[0]["name"]);
                            sessionStorage.setItem("farmerMno", response.data[0]["mobile"]);
                            sessionStorage.setItem("farmerUsername", response.data[0]["username"]);
                            sessionStorage.setItem("farmerEmail", response.data[0]["email"]);
                            sessionStorage.setItem("farmerState", response.data[0]["state"]);
                            sessionStorage.setItem("farmerDistrict", response.data[0]["district"]);
                            sessionStorage.setItem("farmerTaluko", response.data[0]["taluka"]);
                            sessionStorage.setItem("farmerVillage", response.data[0]["village"]);
                            sessionStorage.setItem("farmerPincode", response.data[0]["pincode"]);

                            if (response.status == true) {
                                window.location.href = "../home";
                                // console.log("Navigating to home Page...");
                            }
                            if (response.status == false) {
                                $(".warning").html('<input type="checkbox" id="alert1" /> <label class="close" for="alert1"> <i class="icon-remove"></i> </label> <p class="inner"> <strong>Warning!</strong> ' + response.data + ' </p>');
                            }

                        },
                        error: (response) => {
                            console.log(response);
                        }
                    })
                }

            } else {
                console.log("Password Doesn't Match");
                $(".warning").html('<input type="checkbox" id="alert1" /> <label class="close" for="alert1"> <i class="icon-remove"></i> </label> <p class="inner"> <strong>Warning!</strong>  Password and Confirm Password are not Same! </p>');
            }
        }
    </script>
</body>

</html>