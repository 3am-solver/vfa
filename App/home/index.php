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
    <link rel="stylesheet" href="../css/home.css">
    <style>
        .bcard {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: 0.25rem;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin-top: calc(var(--bs-gutter-y) * -1);
            margin-right: calc(var(--bs-gutter-x) * -.5);
            margin-left: calc(var(--bs-gutter-x) * -.5);
        }

        .col-md-8 {
            flex: 0 0 auto;
            width: 66.66666667%;
        }

        .col-md-4 {
            flex: 0 0 auto;
            width: 33.33333333%;
        }

        .card-body {
            flex: 1 1 auto;
            padding: 1rem 1rem;
        }

        .rounded-start {
            border-bottom-left-radius: 0.25rem !important;
            border-top-left-radius: 0.25rem !important;
        }

        .img-fluid {
            max-width: 100%;

        }

        .cat {
            margin: 4px;
            background-color: #ec8f24;
            border-radius: 4px;
            border: 1px solid #fff;
            overflow: hidden;
            float: left;
        }

        .cat label {
            float: left;
            line-height: 3.0em;
            width: 8.0em;
            height: 3.0em;
        }

        .cat label span {
            text-align: center;
            padding: 3px 0;
            display: block;
        }

        .cat label input {
            position: absolute;
            display: none;
            color: #fff !important;
        }

        /* selects all of the text within the input element and changes the color of the text */
        .cat label input+span {
            color: #fff;
        }


        /* This will declare how a selected input will look giving generic properties */
        .cat input:checked+span {
            color: #ffffff;
            text-shadow: 0 0 6px rgba(0, 0, 0, 0.8);
        }

        .action input:checked+span {
            background-color: #12f512;
        }

        /* Display None */
        .add-water-level {
            display: none;
        }

        .add-soil-type {
            display: none;
        }
        @media only screen and (max-width: 500px){
            .row{
                flex-direction: column;
            }
            .col-md-4{
                width: 100%;
            }
        }
    </style>
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
                <!-- Crop tracing Card  -->
                <div class='card' style='cursor: pointer;' onclick='openFarmDetail()'>
                    <div class='middle'>
                        <span class='material-icons-sharp'>auto_graph</span>
                        <div class='left' style='width: 100%;margin: 0.8rem;'>
                            <h3>Crop Name</h3>
                            <h1>Current Stage of Plant</h1>
                        </div>
                        <div class='progress'>
                            <svg>
                                <circle cx='38' cy='38' r='36'></circle>
                            </svg>
                            <div class='number'>
                                <p>84%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Script to open Farm Details Page -->
            <script>
                function openFarmDetail() {
                    window.location.href = 'farm-detail.php';
                }
            </script>
        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    <!-- Add new Farm Form  -->
    <form onsubmit="return false;" method="POST" id="add-farm-form">

        <!-- select-crop-section start-->
        <div class="select-crop-section crop-add">
            <span class="material-icons-sharp back-btn" onclick="this.parentElement.style.display = 'none';">keyboard_backspace</span>
            <div class="crop-gallary">
                <?php
                $result = mysqli_query($con, "SELECT * FROM crop");
                while ($data = mysqli_fetch_array($result)) {
                    echo '<div class="crop-item" onClick="reply_click(this.id)" id=' . $data["id"] . '>
                            <img src="../img/upload/crop/' . $data["image"] . '" alt="crop-image">
                            <h2 id="crop-name">' . $data["name"] . '</h2> </div>';
                }
                ?>
                <input type="hidden" name="crop-id" id="crop-id" value="null">
            </div>
        </div>
        <!-- select-crop-section Ends -->

        <!-- Select Date of sowing -->
        <div class="date-of-sowing crop-add" id="add-sowing">
            <span class="material-icons-sharp back-btn" onclick="this.parentElement.style.display = 'none';">keyboard_backspace</span>
            <div class="crop-add-body">
                <h3>
                    Please select the accureate Date of Sowing of your crop as it is an important part of your crop
                    lifecycle
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
                        <h4>VFA will keep you informed about your entire crop cycle from the date of sowing to the final
                            harvest</h4>
                    </div>
                </div>
            </div>
            <div class="crop-add-btn">
                <button class="btn btn-previous" onclick='$(".date-of-sowing").css("display","none")'>PREVIOUS</button>
                <span class="btn btn-next" onclick='$(".add-farm-area").css("display","block")'>NEXT</span>
            </div>
        </div>
        <!-- Date of sowing Section Ends Here -->

        <!-- Enter Farm Area -->
        <div class="add-farm-area crop-add" id="select-area">
            <span class="material-icons-sharp back-btn" onclick="this.parentElement.style.display = 'none';">keyboard_backspace</span>
            <div class="crop-add-body">
                <h1>How much area is taken by your Crop</h1>
                <div>
                    <input type="text" name="area">
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
                        <h4>VFA will help you get personalized information about the right quantity of seeds and
                            fertilizers</h4>
                    </div>
                </div>
            </div>
            <div class="crop-add-btn">
                <button class="btn" onclick='$(".add-farm-area").css("display","none")'>PREVIOUS</button>
                <span class="btn btn-next" onclick='$(".add-soil-type").css("display","block")'>NEXT</span>
            </div>
        </div>
        <!-- Farm Area Ends here -->

        <!-- select your Soil Type -->
        <div class="add-soil-type crop-add" id="soil">
            <span class="material-icons-sharp back-btn" onclick="this.parentElement.style.display = 'none';">keyboard_backspace</span>
            <div class="crop-add-body">
                <h1>Enter your Soil Information </h1>
                <div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/soil/black soil.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2> black Soil</h2>
                                    <h4 class="card-text text-muted">
                                        Black soil is also known as “Regur Soil” or the “Black Cotton Soil”. It covers about 15% of the total land area of the country.
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <input type="checkbox" name="soil" value="value of soil"><span>Select</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/soil/red soil.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2> red Soil</h2>
                                    <h4 class="card-text text-muted">
                                        Red soils denote the largest soil group of India, covering an area of about 350,000 sq.km (10.6% of India's area) across the Peninsula.
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <input type="checkbox" name="soil" value="value of soil"><span>Select</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/soil/Alluvial-Soils.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2> Alluvial soil</h2>
                                    <h4 class="card-text text-muted">
                                        Alluvial soils are widespread in the northern plains and river valleys.It covers about 40% of the total land area of the country.
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <input type="checkbox" name="soil" value="value of soil"><span>Select</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/soil/arid desert soil1.avif" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2>Arid desert soil</h2>
                                    <h4 class="card-text text-muted">
                                        Arid soils contain a substantial amount of soluble salts. It is alkaline in nature because there is no rain to wash soluble salts. These soils are very infertile in nature.
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <input type="checkbox" name="soil" value="value of soil"><span>Select</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/soil/laterite soil.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2>Laterite soil</h2>
                                    <h4 class="card-text text-muted">
                                        Laterite is both a soil and a rock type rich in iron and aluminium and is commonly considered to have formed in hot and wet tropical areas.
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <input type="checkbox" name="soil" value="value of soil"><span>Select</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/soil/forest-soils-1.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2>Forest soil</h2>
                                    <h4 class="card-text text-muted">
                                        Forests soils are found in the hilly and mountainous areas where sufficient rainforests are available.
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <input type="checkbox" name="soil" value="value of soil"><span>Select</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <h3>Why we Need Soil Information?</h3>
                    </div>
                    <div class="note-description">
                        <h4>Soils provide anchorage for roots, hold water and nutrients. Soils are home to myriad micro-organisms that fix nitrogen and decompose organic matter, and armies of microscopic animals as well as earthworms and termites. We build on soil as well as with it and in it. Soil plays a vital role in the Earth's ecosystem.</h4>
                    </div>
                </div>
            </div>
            <div class="crop-add-btn">
                <button class="btn" onclick='$(".add-soil-type ").css("display","none")'>PREVIOUS</button>
                <span class="btn btn-next" onclick='$(".add-water-level").css("display","block")'>NEXT</span>
            </div>
        </div>
        <!-- Soil type Section Ends Here -->

        <!-- Enter Water Condition -->
        <div class="add-water-level crop-add" id="water">
            <span class="material-icons-sharp back-btn" onclick="this.parentElement.style.display = 'none';">keyboard_backspace</span>
            <div class="crop-add-body">
                <h1>Select your Main Water Source for Irrigation</h1>
                <div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/carousel-image02.jpg" class="img-fluid rounded-start" alt="water-source">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2>Water Source</h2>
                                    <h4 class="card-text text-muted">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat, eaque officia ex minus harum voluptate repudiandae optio id reprehenderit!
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <input type="checkbox" name="water" value="1"><span>Select</span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/water source/surface water.jpg" class="img-fluid rounded-start" alt="water-source">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2>surface water Source</h2>
                                    <h4 class="card-text text-muted">
                                        Surface water is any body of water above ground, including streams, rivers, lakes, wetlands, reservoirs, and creeks. The ocean, despite being saltwater, is also considered surface water.
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <input type="checkbox" name="water" value="value of water"><span>Select</span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/water source/canal water source.webp" class="img-fluid rounded-start" alt="water-source">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2>canal water Source</h2>
                                    <h4 class="card-text text-muted">
                                        The water for the canal must be provided from an external source, like streams or reservoirs. Where the new waterway must change elevation engineering works like locks, lifts or elevators are constructed to raise and lower vessels.
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <input type="checkbox" name="water" value="value of water"><span>Select</span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bcard mb-3" style="max-width: 540px;">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="../img/water source/rain water.webp" class="img-fluid rounded-start" alt="water-source">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h2>rain water Source</h2>
                                    <h4 class="card-text text-muted">
                                        Rainwater is harvested from roofs via guttering into storage tanks and may be contaminated, particularly in the 'first flush' after a dry period, by detritus that has collected on the roof, for instance leaves, insects or more importantly bird faeces.
                                    </h4>
                                    <div class="cat action">
                                        <label>
                                            <input type="checkbox" name="water" value="value of water"><span>Select</span>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
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
                        <h3>Why we Need Water for Farming?</h3>
                    </div>
                    <div class="note-description">
                        <h4>Water helps to maintain the turgidity of cell walls. Water helps in cell enlargement due to turgor pressure and cell division which ultimately increase the growth of plant. Water is essential for the germination of seeds, growth of plant roots, and nutrition and multiplication of soil organism.</h4>
                    </div>
                </div>
            </div>
            <div class="crop-add-btn">
                <button class="btn" onclick='$(".add-water-level").css("display","none")'>PREVIOUS</button>
                <button class="btn" type="button" onclick="addFarm();">Add Farm</button>
            </div>
        </div>
        <!-- Water Section Ends Here -->
    </form>

    <script src="../js/index.js"></script>
    <script>
        function addFarm() {
            $.post({
                // When Crop info are added then only I can able to add new Farm Details 
                url: "addFarm.php",
                data: $("#add-farm-form").serialize(),
                success: (response) => {
                    console.log(response);
                },
                error: (response) => {
                    console.log(response);
                }
            })
        }
        
        // Getting Selected Crop Id
        function reply_click(clicked_id) {
            $("#crop-id").val(clicked_id);
        }
    </script>
</body>

</html>