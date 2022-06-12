<?php
require("../connection/conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFA @Virtual Farming Assistant APP</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/farm-detail.css">
    <link rel="stylesheet" href="../css/faq.css">
    <?php include('../include/base-css.php'); ?>
    <style>

    </style>
</head>

<body>
    <div class="container">
        <?php include('../include/sidebar.php'); ?>
        <main>
            <h1>Farm Details</h1>

            <!-- Weather Based Activities -->
            <div class="card">
                <h2 style="text-align: center;">Weather based Activities</h2>
                <!-- Activity Card Start from here -->
                <div class="w-card">
                    <div class="top">
                        <span class="info">Activity alert : [Some Messege]</span>
                        <span class="activity-date">14-sept-2002</span>
                    </div>
                    <div class="middle">
                        <img src="../img//carousel-image04.jpg" alt="Activity Image">
                        <div>
                            <h2>Crop Name</h2>
                            <h3>Sowing Date: 14/09/2002</h3>
                        </div>
                    </div>
                    <div class="footer">
                        <details>
                            <summary>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem eos delectus
                                veritatis pariatur molestiae maxime praesentium laborum tenetur repellat velit!
                            </summary>
                            <p>Epcot is a theme park at Walt Disney World Resort featuring exciting attractions,
                                international pavilions, award-winning fireworks and seasonal special events.</p>
                        </details>
                    </div>
                </div>
                <!-- Activity Card Ends Here -->
                <div class="w-card">
                    <div class="top">
                        <span class="info">Activity alert : [Some Messege]</span>
                        <span class="activity-date">14-sept-2002</span>
                    </div>
                    <div class="middle">
                        <img src="../img//carousel-image04.jpg" alt="Activity Image">
                        <div>
                            <h2>Crop Name</h2>
                            <h3>Sowing Date: 14/09/2002</h3>
                        </div>
                    </div>
                    <div class="footer">
                        <details>
                            <summary>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem eos delectus
                                veritatis pariatur molestiae maxime praesentium laborum tenetur repellat velit!
                            </summary>
                            <p>Epcot is a theme park at Walt Disney World Resort featuring exciting attractions,
                                international pavilions, award-winning fireworks and seasonal special events.</p>
                        </details>
                    </div>
                </div>
            </div>
            <!-- Weather Based Activities Ends Here -->
            <!-- Profit calculator Card -->
            <div class="card">
                <h2>If for 1 Acre [CROP_NAME] farm, your farm income is</h2>
                <div class="range-card">
                    <div class="rangeslider__ruler">
                        <input type="range" min="25000" max="250000" step="100000">
                    </div>
                    <div class="range">
                        <h2>
                            Then with VFA it can be
                        </h2>
                        <h1>&#8377; 30,000</h1>
                    </div>
                </div>
            </div>
            <!-- Profit Calculator Card Ends Here -->

            <!-- FAQ Card  -->
            <div class="card">
                <div class="faq">
                    <!-- Inside PHP Block -->
                    <button class="accordion">Section 1</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <!-- PHP Block Ends Here -->

                    <button class="accordion">Section 2</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion">Section 3</button>
                    <div class="panel">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
            <!-- FAQ Card Ends Here -->
        </main>
        <?php include('../include/right-section.php'); ?>
        <script src="../js/index.js"></script>
        <!-- Range Slider Script -->
        <script>
            var $r = $('input[type="range"]');
            var $ruler = $('<div class="rangeslider__ruler">');

            // Initialize
            $r.rangeslider({
                polyfill: false,
                onInit: function() {
                    $ruler[0].innerHTML = getRulerRange(this.min, this.max, this.step);
                    this.$range.prepend($ruler);
                }
            });

            function getRulerRange(min, max, step) {
                var range = '';
                var i = 0;

                while (i <= max) {
                    range += i + ' ';
                    i = i + step;
                }
                return range;
            }
        </script>
        <!-- Range Slider Script Ends Here -->
        <!-- FAQ Card Script -->
        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                });
            }
        </script>
        <!-- FAQ Card Scipt Ends Here -->
    </div>
</body>

</html>