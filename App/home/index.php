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
            <!-- Card Section -->
            <h1>Home</h1>
            <div class="cards">
                <div class="card">
                    <span class="material-icons-sharp">auto_graph</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Crop Name</h3>
                            <h1>Current State of Crop</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 hours</small>
                </div>
                <div class="card">
                    <span class="material-icons-sharp">auto_graph</span>
                    <div class="middle">
                        <div class="left">
                            <h3>SugraCane</h3>
                            <h1>Ready to Harvest</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 hours</small>
                </div>
                <div class="card">
                    <span class="material-icons-sharp">auto_graph</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Wheat</h3>
                            <h1>Growing</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 hours</small>
                </div>
                <div class="card">
                    <span class="material-icons-sharp">auto_graph</span>
                    <div class="middle">
                        <div class="left">
                            <h3>Peanuts</h3>
                            <h1>Need Furtilizer</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-muted">Last 24 hours</small>
                </div>
            </div>
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

</html>le