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
    <link rel="stylesheet" href="../css/account.css">
    <link rel="stylesheet" href="../css/mediaQueries.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <?php include('../include/sidebar.php'); ?>
        <main>
            <h1>Account</h1>
            <header>

                <div class="insta-container">
                    <div class="profile">
                        <div class="profile-image">
                            <img src="https://images.unsplash.com/photo-1513721032312-6a18a42c8763?w=152&h=152&fit=crop&crop=faces" alt="">
                        </div>

                        <div class="profile-user-settings">

                            <h1 class="profile-user-name">janedoe_</h1>

                            <a class="btn profile-edit-btn">Edit Profile</a>

                            <button class="btn profile-settings-btn" aria-label="profile settings"><i class="fas fa-cog" aria-hidden="true"></i></button>

                        </div>

                        <div class="profile-stats">

                            <ul>
                                <li><span class="profile-stat-count">164</span> posts</li>
                                <li><span class="profile-stat-count">188</span> followers</li>
                                <li><span class="profile-stat-count">206</span> following</li>
                            </ul>

                        </div>

                        <div class="profile-bio">

                            <p><span class="profile-real-name">Jane Doe</span> Lorem ipsum dolor sit, amet consectetur adipisicing elit 📷✈️🏕️</p>

                        </div>

                    </div>
                    <!-- End of profile section -->

                </div>
                <!-- End of container -->

            </header>

            <main>
                <div class="insta-container">
                    <div class="gallery">
                        <div class="gallery-item" tabindex="0">
                            <img src="https://images.unsplash.com/photo-1511765224389-37f0e77cf0eb?w=500&h=500&fit=crop" class="gallery-image" alt="">
                        </div>
                        <div class="gallery-item" tabindex="0">
                            <img src="https://images.unsplash.com/photo-1497445462247-4330a224fdb1?w=500&h=500&fit=crop" class="gallery-image" alt="">
                        </div>
                        <div class="gallery-item" tabindex="0">
                            <img src="https://images.unsplash.com/photo-1426604966848-d7adac402bff?w=500&h=500&fit=crop" class="gallery-image" alt="">
                            <div class="gallery-item-type">
                                <span class="visually-hidden">Gallery</span><i class="fas fa-clone" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="gallery-item" tabindex="0">
                            <img src="https://images.unsplash.com/photo-1502630859934-b3b41d18206c?w=500&h=500&fit=crop" class="gallery-image" alt="">
                            <div class="gallery-item-type">
                                <span class="visually-hidden">Video</span><i class="fas fa-video" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
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