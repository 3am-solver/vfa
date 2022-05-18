<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFA @Virtual Farming Assistant APP</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/right.css">
    <link rel="stylesheet" href="../css/mediaQueries.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <?php include('../include/sidebar.php'); ?>
        <main>
            <h1>Community</h1>
            
        </main>
        <!-- Right Section -->
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Hardik</b></p>
                        <small class="text-muted"></small>
                    </div>
                    <div class="profile-photo">
                        <img src="../img/carousel-image02.jpg" alt="profile_picture">
                    </div>
                </div>
            </div>
            <!-- End of Top -->
            <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../img/carousel-image04.jpg" alt="profile_picture">
                        </div>
                        <div class="message">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti delectus assumenda quam
                                quisquam eaque, ratione amet sed harum quaerat nisi.</p>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </div>
                    <div class="update">
                        <div class="profile-photo">
                            <img src="../img/carousel-image05.jpg" alt="profile_picture">
                        </div>
                        <div class="message">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti delectus assumenda quam
                                quisquam eaque, ratione amet sed harum quaerat nisi.</p>
                            <small class="text-muted">2 minutes ago</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/index.js"></script>
</body>

</html>