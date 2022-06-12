<?php require("../connection/conn.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFA @Virtual Farming Assistant APP</title>
    <?php include('../include/base-css.php'); ?>
    <link rel="stylesheet" href="../css/feeds.css">
</head>

<body>
    <div class="container">
        <?php include('../include/sidebar.php'); ?>
        <main>
            <h1>Feed Post</h1>
            <!-- Feed Post Card -->
            <div class="card">
                <h2>Are you Cutivating Soyabean this Kharif?</h2>
                <div class="feed-top">
                    <div>
                        <span class="material-icons-sharp" style="margin-right: 5px; color:var(--color-primary);">
                            visibility
                        </span>
                        <b>3245&nbsp;</b>Farmers Viewed
                    </div>
                    <div>
                        <span class="material-icons-sharp liked">
                            favorite
                        </span>
                        &nbsp; 333
                    </div>
                </div>
                <div class="feed-body">
                    <img src="../img/bg.jpg" alt="Feed Post Image">
                    <details>
                        <summary>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem eos delectus veritatis pariatur molestiae maxime praesentium laborum tenetur repellat velit!</summary>
                        <p>Epcot is a theme park at Walt Disney World Resort featuring exciting attractions, international pavilions, award-winning fireworks and seasonal special events.</p>
                    </details>
                </div>
                <span>14 September, 2002</span>
            </div>
            <!-- Feed Post Card Ends Here -->











        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    </div>
    <script src="../js/index.js"></script>
</body>

</html>