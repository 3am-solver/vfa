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
    <style>
        main div {
            color: var(--color-primary);
        }

        .temp {
            color: green;
        }

        .current-info {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .date-container {
            font-weight: 100;
        }

        .date-container .time {
            font-size: 70px;
        }

        .date-container #am-pm {
            font-size: 30px;
            margin-left: 20px;
        }

        .date-container .date {
            font-size: 30px;
        }

        .place-container {
            text-align: end;
        }

        .place-container .time-zone {
            font-size: 30px;
            font-weight: 100;
        }

        .place-container .country {
            font-size: 12px;
            font-weight: 700;
        }

        .current-info .others {
            display: flex;
            flex-direction: column;
            background: rgba(24, 24, 27, 0.6);
            padding: 20px;
            border-radius: 10px;
            margin: 10px 0;
            border: 1px solid #eee;
        }

        .current-info .others .weather-item {
            display: flex;
            justify-content: space-between;
        }


        .future-forecast {
            display: flex;
            color: white;
            width: 100%;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .future-forecast .today {
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #eee;
            border-radius: 10px;
            padding: 15px;
            padding-right: 40px;
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.2)
        }

        .future-forecast .today .day {
            padding: 5px 15px;
            background: #3c3c44;
            border-radius: 50px;
            text-align: center;
        }

        .future-forecast .today .temp {
            font-size: 18px;
            padding-top: 15px;
        }

        .future-forecast .weather-forecast {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            align-content: center;
            justify-content: center;
            align-items: center;
        }

        .weather-forecast .weather-forecast-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0 10px;
            border: 1px solid;
            padding: 15px;
            border-radius: 10px;
            background: rgba(0, 0, 0, 0.2)
        }

        .weather-forecast .weather-forecast-item .day {
            padding: 5px 15px;
            background: #3C3C44;
            border-radius: 50px;
            text-align: center;
        }

        .weather-forecast .weather-forecast-item .temp {
            font-weight: 100;
            font-size: 12px;
        }


        @media only screen and (max-width:730px) {

            .container {
                padding: 20px;
            }

            .future-forecast {
                justify-content: start;
                align-items: none;
                overflow-y: scroll;
            }

            .future-forecast .today .temp {
                font-size: 16px;
            }

            .date-container .time {
                font-size: 50px;
            }

            .date-container #am-pm {
                font-size: 20px;
            }

            .date-container .date {
                font-size: 20px;
            }

            .place-container {
                text-align: end;
                margin-top: 15px;
            }

            .place-container .time-zone {
                font-size: 20px;
            }

            .current-info .others {
                padding: 12px;
            }

            .current-info .others .weather-item {
                font-size: 14px;
            }

        }

        @media only screen and (max-width: 1400px) {
            .future-forecast {
                justify-content: start;
                align-items: none;
                overflow-x: scroll;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <?php include('../include/sidebar.php'); ?>
        <main>
            <h1>Weather</h1>
            <div class="current-info">

                <div class="date-container">
                    <div class="time" id="time">
                        12:30 <span id="am-pm">PM</span>
                    </div>
                    <div class="date" id="date">
                        Monday, 25 May
                    </div>

                </div>
                <div class="place-container">
                    <div class="time-zone" id="time-zone">Asia/Kolkata</div>
                    <div id="country" class="country">IN</div>
                </div>

            </div>
            <div class="future-forecast">
                <div class="today" id="current-temp">
                    <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                    <div class="other">
                        <div class="day">Monday</div>
                        <div class="temp">Night - 25.6&#176; C</div>
                        <div class="temp">Day - 35.6&#176; C</div>
                    </div>
                </div>

                <div class="weather-forecast" id="weather-forecast">
                    <div class="weather-forecast-item">
                        <div class="day">Tue</div>
                        <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                        <div class="temp">Night - 25.6&#176; C</div>
                        <div class="temp">Day - 35.6&#176; C</div>
                    </div>
                    <div class="weather-forecast-item">
                        <div class="day">Wed</div>
                        <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                        <div class="temp">Night - 25.6&#176; C</div>
                        <div class="temp">Day - 35.6&#176; C</div>
                    </div>
                    <div class="weather-forecast-item">
                        <div class="day">Thur</div>
                        <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                        <div class="temp">Night - 25.6&#176; C</div>
                        <div class="temp">Day - 35.6&#176; C</div>
                    </div>
                    <div class="weather-forecast-item">
                        <div class="day">Fri</div>
                        <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                        <div class="temp">Night - 25.6&#176; C</div>
                        <div class="temp">Day - 35.6&#176; C</div>
                    </div>
                    <div class="weather-forecast-item">
                        <div class="day">Sat</div>
                        <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                        <div class="temp">Night - 25.6&#176; C</div>
                        <div class="temp">Day - 35.6&#176; C</div>
                    </div>

                </div>
            </div>
        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../js/index.js"></script>
    <script src="weather-script.js"></script>
</body>

</html>