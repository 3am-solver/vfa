<?php
require("../connection/conn.php");
if (isset($_SESSION['userlogin']) != true) {
    echo "<script> document.location = '../auth';</script>";
}
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="weather-icons.css">
</head>

<body onload="getLocation()">
    <div class="container">
        <?php include('../include/sidebar.php'); ?>
        <main>
            <h1>Weather</h1>
            <div class="wrapper">
                <div class="align">
                    <div class="app">
                        <div id="main">
                            <!-- Settings Button -->
                            <span id="btn-right">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                            <!-- End Settings Button -->

                            <!-- Info Message-->
                            <div id="info-msg">
                                
                            </div>
                            <!-- End Info Message-->

                            <div id="settings" class="">

                                <p id="settings-info"><i class="fa fa-cog" aria-hidden="true"></i> Settings</p>

                                <div class="search-container">
                                    <label>
                                        <input autocomplete="off" type="text" id="search" placeholder="Search City..." required />
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                        <button type="button" id="update-button" placeholder="Update">Update</button>
                                    </label>
                                </div>
                                <ul>
                                    <li>
                                        <div class="text">
                                            <p>Temperature Unit</p>
                                        </div>
                                        <label class="switch">
                                            <input type="checkbox" id="unit">
                                            <div class="slider">
                                                <p class="left"><i class="c" aria-hidden="true">°C</i></p>
                                                <p class="right"><i class="f" aria-hidden="true">°F</i></p>
                                            </div>
                                        </label>
                                        <div class="sub-info">Choose between ºC or ºF.</div>
                                    </li>

                                    <li>
                                        <div class="text">
                                            <p>Atmospheric Conditions</p>
                                        </div>
                                        <label class="switch">
                                            <input type="checkbox" id="atm">
                                            <div class="slider">
                                                <p class="left"><i class="fa fa-check" aria-hidden="true"></i></p>
                                                <p class="right"><i class="fa fa-times" aria-hidden="true"></i></p>
                                            </div>
                                        </label>
                                        <div class="sub-info">Humidity, pressure and visibility of the atmosphere.</div>
                                    </li>

                                    <li>
                                        <div class="text">
                                            <p>Sunrise/Sunset</p>
                                        </div>
                                        <label class="switch">
                                            <input type="checkbox" id="sun">
                                            <div class="slider">
                                                <p class="left"><i class="fa fa-check" aria-hidden="true"></i></p>
                                                <p class="right"><i class="fa fa-times" aria-hidden="true"></i></p>
                                            </div>
                                        </label>
                                        <div class="sub-info">Sunset/Sunrise hours and total hours of light.</div>
                                    </li>

                                    <li>
                                        <div class="text">
                                            <p>Wind Conditions</p>
                                        </div>
                                        <label class="switch">
                                            <input type="checkbox" id="wind">
                                            <div class="slider">
                                                <p class="left"><i class="fa fa-check" aria-hidden="true"></i></p>
                                                <p class="right"><i class="fa fa-times" aria-hidden="true"></i></p>
                                            </div>
                                        </label>
                                        <div class="sub-info">Chill, direction and the speed of the wind.</div>
                                    </li>
                                </ul>

                                <button type="button" id="save-button" placeholder="Update">Save</button>


                            </div>
                            <!-- End Settings Menu  -->

                            <div id="central">
                                <div id="top-menu-info">
                                    <p id="location">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <span>Undefined</span>
                                    </p>
                                    <p id="date">
                                        <span>Day, Day Month Year</span>
                                    </p>
                                </div>

                                <div id="temp-div">
                                    <div id="icon-temp">
                                        <p>Sunny</p>
                                        <i class="wi wi-day-cloudy" aria-hidden="true"></i>
                                    </div>
                                    <p id="current-temp-big">
                                        <span id="ctb">14</span>
                                        <span id="ctbicon">ºC</span>
                                    </p>
                                </div>

                                <div id="weather-menu" class="show">
                                    <ul>
                                        <li id="atmli">
                                            <p class="li_title">Atmospheric Conditions</p>
                                            <div id="humidity" class="col-1">
                                                <i class="wi wi-humidity" aria-hidden="true"></i>
                                                <span>Humidity <br> <span id="hd">NaN</span></span>
                                            </div>
                                            <div id="pressure" class="col-2">
                                                <i class="wi wi-barometer" aria-hidden="true"></i>
                                                <span>Pressure <br> <span id="pd">NaN</span></span>
                                            </div>
                                            <div id="visibility" class="col-3">
                                                <i class="wi wi-day-fog" aria-hidden="true"></i>
                                                <span>Visibility <br> <span id="vd">NaN</span></span>
                                            </div>
                                        </li>
                                        <li id="sunli">
                                            <p class="li_title">Sunrise/Sunset</p>
                                            <div id="sunrise" class="col-1">
                                                <i class="wi wi-sunrise" aria-hidden="true"></i>
                                                <span>Sunrise <br> <span id="srd">NaN</span></span>
                                            </div>
                                            <div id="totallight" class="col-2">
                                                <i class="wi wi-time-4" aria-hidden="true"></i>
                                                <span>Hours of light<br> <span id="td">NaN</span></span>
                                            </div>
                                            <div id="sunset" class="col-3">
                                                <i class="wi wi-sunset" aria-hidden="true"></i>
                                                <span>Sunset <br> <span id="ssd">NaN</span></span>
                                            </div>
                                        </li>
                                        <li id="windli">
                                            <p class="li_title">Wind Conditions</p>
                                            <div id="chill" class="col-1">
                                                <i class="wi wi-thermometer-exterior" aria-hidden="true"></i>
                                                <span>Feels Like <br> <span id="cd">NaN</span></span>
                                            </div>
                                            <div id="direction" class="col-2">
                                                <i class="wi wi-wind from-270-deg" aria-hidden="true"></i>
                                                <span>Direction <br> <span id="dd">NaN</span></span>
                                            </div>
                                            <div id="speed" class="col-3">
                                                <i class="wi wi-strong-wind" aria-hidden="true"></i>
                                                <span>Speed <br> <span id="sd">NaN</span></span>
                                            </div>
                                        </li>
                                        <li id="forecastli">
                                            <p class="li_title">3 Days Forecast</p>
                                            <div class="col-1 day10item">
                                                <i class="wi wi-day-sunny" aria-hidden="true"></i>
                                                <span>NaN <br> <i>NaN°</i></span>
                                            </div>
                                            <div class="col-2 day10item">
                                                <i class="wi wi-day-cloudy" aria-hidden="true"></i>
                                                <span>NaN <br> <i>NaN°</i></span>
                                            </div>
                                            <div class="col-3 day10item">
                                                <i class="wi wi-day-rain" aria-hidden="true"></i>
                                                <span>NaN <br> <i>NaN°</i></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../js/index.js"></script>
    <script src="weather-script.js"></script>
    <script src="weather-report.js"></script>
</body>

</html>