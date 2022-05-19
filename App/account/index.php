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
            <h1>Account</h1>
            <header>

                <div class="insta-container cards">
                    <div class="profile card">
                        <div class="profile-image">
                            <img src="https://images.unsplash.com/photo-1513721032312-6a18a42c8763?w=152&h=152&fit=crop&crop=faces"
                                alt="">
                        </div>

                        <div class="profile-user-settings">
                            <h1 class="profile-user-name">janedoe_</h1>
                            <a class="btn profile-edit-btn">Edit Profile</a>
                        </div>

                        <div class="profile-stats">

                            <ul>
                                <li><b class="profile-stat-count">164</b> posts</li>
                                <li><b class="profile-stat-count">188</b> followers</li>
                                <li><b class="profile-stat-count">206</b> following</li>
                            </ul>

                        </div>

                        <div class="profile-bio">

                            <p><i class="profile-real-name">Jane Doe</i> Lorem ipsum dolor sit, amet consectetur
                                adipisicing elit 📷✈️🏕️</p>

                        </div>

                    </div>
                    <!-- End of profile section -->

                </div>
                <!-- End of container -->

            </header>

            <main>
                <div class="insta-container cards">
                    <div class="gallery card">
                        <div class="gallery-item" tabindex="0">
                            <img src="https://images.unsplash.com/photo-1511765224389-37f0e77cf0eb?w=500&h=500&fit=crop"
                                class="gallery-image" alt="">
                        </div>
                        <div class="gallery-item" tabindex="0">
                            <img src="https://images.unsplash.com/photo-1497445462247-4330a224fdb1?w=500&h=500&fit=crop"
                                class="gallery-image" alt="">
                        </div>
                        <div class="gallery-item" tabindex="0">
                            <img src="https://images.unsplash.com/photo-1426604966848-d7adac402bff?w=500&h=500&fit=crop"
                                class="gallery-image" alt="">
                        </div>
                        <div class="gallery-item" tabindex="0">
                            <img src="https://images.unsplash.com/photo-1502630859934-b3b41d18206c?w=500&h=500&fit=crop"
                                class="gallery-image" alt="">
                        </div>
                    </div>
                </div>
            </main>
        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    <script src="../js/index.js"></script>
</body>

</html>