<?php
    session_start();
    if(isset($_SESSION['userlogin'])){
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
</head>

<body>
    <div id="container" class="container">
        <!-- FORM SECTION -->
        <div class="row">
            <!-- SIGN UP -->
            <div class="col align-items-center flex-col sign-up">
                <div class="form-wrapper align-items-center">
                    <form method="post" action="auth.php?f=signup" class="form sign-up">
                        <div class="input-group">
                            <i class='bx bxs-user'></i>
                            <input type="text" placeholder="Name" name="f-name">
                        </div>
                        <div class="input-group">
                            <i class='bx bx-mail-send'></i>
                            <input type="tel" placeholder="Mobile No" name="f-mobileno">
                        </div>
                        <div class="input-group">
                            <i class='bx bx-mail-send'></i>
                            <input type="tel" placeholder="Email" name="f-email">
                        </div>
                        <div class="input-group">
                            <i class='bx bxs-user'></i>
                            <input type="text" placeholder="Username" name="f-username">
                        </div>
                        <div class="input-group">
                            <i class='bx bxs-lock-alt'></i>
                            <input type="password" placeholder="Password">
                        </div>
                        <div class="input-group">
                            <i class='bx bxs-lock-alt'></i>
                            <input type="password" placeholder="Confirm password" name="f-password">
                        </div>
                        <button>
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
                    <?php
                        if(isset($_SESSION['userlogin']) && $_SESSION['userlogin'] == false){
                            echo "invalid username or Password";
                        }
                    ?>
                    <form class="form sign-in" method="post" action="auth.php?f=login">
                        <div class="input-group">
                            <i class='bx bxs-user'></i>
                            <input type="text" placeholder="Username" name="f-username">
                        </div>
                        <div class="input-group">
                            <i class='bx bxs-lock-alt'></i>
                            <input type="password" placeholder="Password" name="f-password">
                        </div>
                        <button>
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
</body>

</html>