<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFA @Virtual Farming Assistant APP</title>
    <?php include('../include/base-css.php'); ?>
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
        <?php include('../include/right-section.php'); ?>
    </div>
    <script src="../js/index.js"></script>
</body>

</html>le