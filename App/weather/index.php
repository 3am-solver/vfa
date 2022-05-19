<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFA @Virtual Farming Assistant APP</title>
    <?php include('../include/base-css.php'); ?>
    <link rel="stylesheet" href="../css/weather.css">
</head>

<body>
    <div class="container">
        <?php include('../include/sidebar.php'); ?>
        <main>
            <h1>Weather</h1>
            <div class="card">
                <h2 class="h2">Brussels</h2>
                <h3 class="h3">Cloudy<span>Wind 10km/h <span class="dot">•</span> Precip 0%</span></h3>
                <h1>23°</h1>
                <div class="sky">
                    <div class="sun"></div>
                    <div class="cloud">
                        <div class="circle-small"></div>
                        <div class="circle-tall"></div>
                        <div class="circle-medium"></div>
                    </div>
                </div>
                <table>
                    <tr>
                        <td>TUE</td>
                        <td>WED</td>
                        <td>THU</td>
                        <td>FRI</td>
                        <td>SAT</td>
                    </tr>
                    <tr>
                        <td>30°</td>
                        <td>34°</td>
                        <td>36°</td>
                        <td>34°</td>
                        <td>37°</td>
                    </tr>
                    <tr>
                        <td>17°</td>
                        <td>22°</td>
                        <td>19°</td>
                        <td>23°</td>
                        <td>19°</td>
                    </tr>
                </table>
            </div>
        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    <script src="../js/index.js"></script>
</body>

</html>