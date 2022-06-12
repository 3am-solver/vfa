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
    <link rel="stylesheet" href="../css/settings.css">
    <style>
        .menu {
            padding: 1rem;
        }

        .menu>div {
            margin: 0.5rem;
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            align-items: center;
        }

        .menu>div>select {
            width: 75%;
            padding: 0.5rem;
            font-size: medium;
            outline: none;
            border: none;
        }

        .item {
            padding: 1rem;
            margin: 0.5rem;
            min-height: 100px;
        }

        label {
            font-size: larger;
        }

        .btn {
            background-image: linear-gradient(135deg, #008aff, #86d472);
            border-radius: 6px;
            box-sizing: border-box;
            color: black;
            display: block;
            height: 50px;
            font-size: 1.4em;
            font-weight: 600;
            padding: 4px;
            position: relative;
            text-decoration: none;
            width: 90%;
            margin: 0 auto;
            z-index: 2;
        }

        .btn:hover {
            color: #ffffff;
        }

        .btn .btnspan {
            align-items: center;
            background: white;
            border-radius: 6px;
            display: flex;
            justify-content: center;
            height: 100%;
            transition: background 0.5s ease;
            width: 100%;
        }

        .btn:hover .btnspan {
            background: transparent;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php include('../include/sidebar.php'); ?>
        <main>
            <h1>Settings</h1>
            <div class="menu">
                <div>
                    <label for="language">Language: </label>
                    <select name="language" id="language">
                        <option class="item" value="eng">English</option>
                        <option class="item" value="hi">Hindi</option>
                        <option class="item" value="gu">Gujarati</option>
                    </select>
                </div>
                <div>
                    <label for="area">Area Type:</label>
                    <select name="areatype" id="area">
                        <option class="item" value="ac">Acre</option>
                        <option class="item" value="hc">Hacter</option>
                        <option class="item" value="bi">Bigha</option>
                        <option class="item" value="gaj">Gaj</option>
                        <option class="item" value="sqm">Square meter</option>
                        <option class="item" value="sqf">Square Feet</option>
                        <option class="item" value="sqy">Square yard</option>
                    </select>
                </div>
                <div>
                    <label for="noti">Get Daily Notification Updates: </label>
                    <label class="switch">
                        <input id="noti" type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div>
                    <label for="noti">Get Daily Weather Updates: </label>
                    <label class="switch">
                        <input id="noti" type="checkbox">
                        <span class="slider round"></span>
                    </label>
                </div>
                <a class="btn" href="/"><span class="btnspan">Save Settings</span></a>
            </div>
        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    <script src="../js/index.js"></script>
</body>

</html>