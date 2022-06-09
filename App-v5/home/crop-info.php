<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFA @Virtual Farming Assistant APP</title>
    <link rel="stylesheet" href="../css/home.css">
    <?php include('../include/base-css.php'); ?>
    <style>
        body {
            background-color: var(--color-light);
        }

        .card {
            width: 95vw;
            margin: 5px auto;
            background-color: var(--color-white);
            box-shadow: 0px 0px 10px var(--box-shadow);
            padding: 1rem;
            border-radius: 1rem;
        }

        .card:hover {
            box-shadow: none;
        }
        .card-body table{
            width: 100%;
            margin: 0 auto;
        }
        .card-body table th{
            font-size: 1.2rem;
            color: var(--color-primary);
        }
        .card-body table td{
            padding: 0.5rem;
            background-color: var(--color-white);
            text-align: center;
            border-bottom: 1px solid;
        }
    </style>
</head>

<body>
    <!-- Crop Info Section -->
    <div class="farm-details">`
        <nav>
            <div class="farm-nav-right">
                <span class="material-icons-sharp back-btn" onclick="window.location.href='farm-detail.php'">keyboard_backspace</span> 
                <img src="../img/carousel-image04.jpg" alt="crop-image">
                <h2>Package of Practices</h2>
            </div>
            <div class="farm-nav-left">
                <span class="material-icons-sharp" style="color: green;">
                    whatsapp
                </span>
            </div>
        </nav>
        <div class="farm-btn-tab" onclick="window.location.href='farm-detail.php'">
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
    </div>

    <div class="card">
        <div class="card-title">
            <h2>Expectation</h2>
        </div>
        <div class="card-body">
            <table>
                <thead>
                    <tr>
                        <th>Farming with VFA</th>
                        <th>Standard Farming</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <small class="text-muted">Expected Fertilizer and agriculture Expenditure</small>
                            <h3 style="color: green;">&#8377; 22,500</h3>
                        </td>
                        <td>
                            <small class="text-muted">
                                Expected Fertilizer and agriculture Expenditure
                            </small>
                            <h3>&#8377; 22,500</h3>
                        </td>
                    <tr>
                        <td>
                            <small class="text-muted">Expexted Harvest</small>
                            <h3 style="color: green;">110 quintal/acre</h3>
                        </td>
                        <td>
                            <small class="text-muted">
                                83 quintal/acre
                            </small>
                            <h3>&#8377; 22,500</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <small class="text-muted">Expected Income (Rs)</small>
                            <h3 style="color: green;">&#8377; 1,10,000</h3>
                        </td>
                        <td>
                            <small class="text-muted">
                                Expected Income (Rs)
                            </small>
                            <h3>&#8377; 98,500</h3>
                        </td>
                    </tr>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card">
        <div class="card-title">
            <h2>card Title</h2>
        </div>
        <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo dolor, sint iste, fugit mollitia eveniet ullam illum fugiat debitis nihil, blanditiis sit unde quisquam enim possimus excepturi! Minus voluptate recusandae vero vel molestiae atque.</p>
        </div>
    </div>
    <div class="card">
        <div class="card-title">
            <h2>card Title</h2>
        </div>
        <div class="card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo dolor, sint iste, fugit mollitia eveniet ullam illum fugiat debitis nihil, blanditiis sit unde quisquam enim possimus excepturi! Minus voluptate recusandae vero vel molestiae atque.</p>
        </div>
    </div>

    <script src="../js/index.js"></script>
</body>

</html>