<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFA @Virtual Farming Assistant APP</title>
    <link rel="stylesheet" href="../css/home.css">
    <?php include('../include/base-css.php'); ?>
</head>

<body>
    <!-- Farm Details Section -->
    <div class="farm-details">
        <nav>
            <div class="farm-nav-right">
                <span class="material-icons-sharp back-btn" onclick="window.location.href='index.php'">keyboard_backspace</span>
                <img src="../img/carousel-image03.jpg" alt="crop-image">
                <h2>Crop Name</h2>
            </div>
            <div class="farm-nav-left">
                <span class="material-icons-sharp">
                    refresh
                </span>
                <span class="material-icons-sharp">
                    help
                </span>
            </div>
        </nav>
        <div class="farm-btn-tab">
            <div class="tab-btn">
                <span class="material-icons-sharp" style="margin-right: 0.2rem;">
                    agriculture
                </span>
                <h2>Farm Details</h2>
            </div>
            <div class="tab-btn" onclick="window.location.href='crop-info.php'">
                <span class="material-icons-sharp" style="margin-right: 0.2rem;">
                    menu_book
                </span>
                <h2>Crop Details</h2>
            </div>
        </div>
        <div class="farm-body">
            <h1 style="font-size: 1.4rem;">Weather Based Activities</h1>
            <div class="farm-card">
                <div class="farm-card-top">
                    <img src="../img/bg.jpg" alt="Crop image">
                    <div>
                        <h2>Crop Name</h2>
                        <small class="text-muted">Sowed on : 13/09/2002</small>
                    </div>
                </div>
                <div class="farm-card-body">
                    <h2 style="width: 70%; font-size: 0.9rem;" class="text-muted">Save your Seeding information about your farm</h2>
                    <a href="#" class="tab-btn">View more</a>
                </div>
            </div>
        </div>
        <div class="farm-profit-calculator">
            <div class="farm-card">
                <div class="farm-card-top">
                    <img src="../img/bg.jpg" alt="Crop image">
                    <div>
                        <h2 style="font-size: 1rem;">If for 1 acre Onion farm, your Farm income is: </h2>
                    </div>
                </div>
                <progress min='0' max='100' value='50'></progress>
                <div class="farm-profit-card">
                    <h2 style="text-align: center;">Then with VFA it can be 20% More</h2>
                </div>
            </div>
        </div>
        <div class="farm-faq">
            <h1 style="text-align: center; width:100%; font-size:1.5rem; color:var(--color-primary);">Frequently Asked Question</h1>
            <div class="faq-question-card">
                <div class="faq-series">
                    <span style="padding: 1rem; border-radius:2rem; border:1px solid; margin:0.5rem;">1</span>
                </div>
                <div class="faq-body">
                    <h2 style="color: var(--color-success);">How to prevent thrips in onion?</h2>
                    <p>Use neem coated urea to reduce the infestation of the pest</p>
                </div>
            </div>
            <div class="faq-question-card">
                <div class="faq-series">
                    <span style="padding: 1rem; border-radius:2rem; border:1px solid; margin:0.5rem;">1</span>
                </div>
                <div class="faq-body">
                    <h2 style="color: var(--color-success);">How to prevent thrips in onion?</h2>
                    <p>Use neem coated urea to reduce the infestation of the pest</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Farm Details Section Ends here -->
    <script src="../js/index.js"></script>
</body>

</html>