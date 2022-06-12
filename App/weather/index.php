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
    <?php include('../include/base-css.php'); ?>
    <link rel="stylesheet" href="../css/weather.css">
    <link rel="stylesheet" href="weather-icons-wind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="weather-icons.css">
    <style>
        .card {
            background-color: white;
            box-shadow: var(--box-shadow);
            border-radius: 1rem;
            padding: 0.5rem;
            width: 100%;
            margin-bottom: 10px;
        }

        .card .top {
            display: flex;
            align-items: center;
            border-bottom: 2px solid var(--color-primary);
            padding: 1rem;
            background-color: var(--color-dark);
            border-radius: 1rem;
            color: whitesmoke;
        }

        .top h3 {
            display: flex;
            align-items: center;
            margin-right: 10px;
        }

        .top h3 span {
            color: var(--color-primary);
        }
        .body {
            display: flex;
            justify-content: space-between;
        }

        .body>div {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 49%;
        }

        .today-weather div {
            border-bottom: 1px solid var(--color-dark);
            padding: 0.5rem;
            display: flex;
            justify-content: space-between;
            border-radius: 0.3rem;
        }
        .wi{
            color: var(--color-primary);
            font-size: x-large;
            margin-right: 10px;
            width: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php include('../include/sidebar.php'); ?>
        <main>
            <h1>Weather</h1>
            <div class="card">
                <div class="top">
                    <h3>
                        <span class="material-icons-sharp">
                            location_on
                        </span>
                        <span class="location" style="color: white;font-size: large;">Location City</span>
                        <span class="text-muted"> &nbsp;,IN</span>
                    </h3>
                    <p id="date" style="color: white;">Time</p>
                </div>
                <div class="body">
                    <div>
                        <h1>
                            <span style="font-size: 3rem;width: 100%;" id="temp">0</span>
                            <span style="font-size: 1.5rem;" class="wi wi-celsius"></span>
                        </h1>
                        <script src="weather-script.js"></script>
                        <h3 id="desc" style="font-size: 1.3rem;width: 100%;">Mostly Cloudy</h3>
                        <div style="font-weight: 600;width: 100%;">
                            <span>Day <span id="max">MAX_Temp</span> <span class="wi wi-celsius"></span></span>
                            &nbsp;&nbsp;&nbsp;
                            <span>Night <span id="min">MIN_Temp</span> <span class="wi wi-celsius"></span></span>
                        </div>
                    </div>
                    <div>
                        <span class="wi wi-rain" style="font-size: 5rem;"></span>
                    </div>
                </div>
            </div>

            <div class="card today-weather">
                <h2>Weather Today in <span class="location">Location</span></h2>
                <div style="border-top: 1px solid var(--color-dark)">
                    <span>
                        <span class="wi wi-rain"></span>
                        Rain
                    </span>
                    <span id="rain">0000</span>
                </div>
                <div>
                    <span>
                        <span class="wi wi-celsius"></span>
                        Feels Like
                    </span>
                    <span id="hd">0000</span>
                </div>
                <div>
                    <span>
                        <span class="wi wi-wind-direction"></span>
                        Wind Direction
                    </span>
                    <span id="dd">0000</span>
                </div>
                <div>
                    <span>
                        <span class="wi wi-windy"></span>
                        Wind Speed
                    </span>
                    <span id="sd">0000</span>
                </div>
                <div>
                    <span>
                        <span class="wi wi-sunrise"></span>
                        Sun Rise
                    </span>
                    <span id="srd">0000</span>
                </div>
                <div>
                    <span>
                        <span class="wi wi-sunset"></span>
                        Sunset
                    </span>
                    <span id="ssd">0000</span>
                </div>
                <div>
                    <span>
                        <span class="wi wi-small-craft-advisory"></span>
                        Visibility
                    </span>
                    <span id="vd">0000</span>
                </div>
                <div>
                    <span><span class="wi wi-barometer"></span>
                        Pressure
                    </span>
                    <span id="pd">0000</span>
                </div>
                <div>
                    <span>
                        <span class="wi wi-humidity"></span>
                        Humanity
                    </span>
                    <span id="hd">0000</span>
                </div>
            </div>

        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    <script src="../js/index.js"></script>
    <script src="moment.min.js"></script>
    <script src="weather-report.js"></script>
    <script>
        $('.sun-animation').css('width', '70%');
        $('.sun-symbol-path').css('-webkit-transform', 'rotateZ(25deg)');
    </script>
</body>

</html>