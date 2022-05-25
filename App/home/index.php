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
                <!-- Add new Farm Card -->
                <div class="card" id="add-new-farm-data" style="cursor: pointer;">
                    <div class="middle">
                        <span>+</span>
                        <h2>Add New Crop Details </h2>
                    </div>
                </div>
                <div class="card" style="cursor: pointer;" onclick="window.location.href='farm-detail.php'">
                    <div class="middle">
                        <span class="material-icons-sharp">auto_graph</span>
                        <div class="left" style="width: 100%;margin: 0.8rem;">
                            <h3>Crop Name</h3>
                            <h1>Current State of Crop</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class="number">
                                <p>84%</p>
                            </div>
                        </div>
                    </div>
                    <!-- <small class="text-muted">Last 24 hours</small> -->
                </div>

            </div>
        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    <!-- select-crop-section start-->
    <div class="select-crop-section crop-add">
        <span class="material-icons-sharp back-btn" onclick="this.parentElement.style.display = 'none';">keyboard_backspace</span>
        <div class="crop-gallary">
            <div class="crop-item">
                <img src="../img/carousel-image01.jpg" alt="crop-image">
                <h2>Crop Name</h2>
            </div>
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
            <button class="btn btn-next" onclick='$(".add-farm-area").css("display","block")'>NEXT</button>
        </div>
    </div>
    <!-- Date of sowing Section Ends Here -->
    <!-- Enter Farm Area -->
    <div class="add-farm-area crop-add" id="select-area">
        <span class="material-icons-sharp back-btn" onclick="this.parentElement.style.display = 'none';">keyboard_backspace</span>
        <div class="crop-add-body">
            <h1>How much area is taken by your Crop</h1>
            <div>
                <input type="text">
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
            <button class="btn" onclick="">NEXT</button>
        </div>
    </div>
    <!-- Farm Area Ends here -->
   
    <script src="../js/index.js"></script>
</body>

</html>