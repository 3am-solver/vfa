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

    <!-- Expectation Card -->
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

    <!-- Favourable Climate Card -->
    <div class="card">
        <div class="card-title">
            <h2>Favourable Climate</h2>
        </div>
        <div class="card-body">
            <img src="../img/crop-info/climate.jpg" alt="Favourable Climate Picture">
            <h3>Climate</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis, tempora.</p>
            <h3>Temperature</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde tenetur quas quae laudantium aliquid qui, rerum laborum impedit perspiciatis, enim consequuntur. Minima beatae voluptatem magni ullam consequatur eum vel omnis?</p>
            <h3>Crop Water Requrements</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum dignissimos rem incidunt vero! Reprehenderit, provident laudantium? Ipsum labore quis aut.</p>
        </div>
    </div>

    <!-- Favourable Soil Card -->
    <div class="card">
        <div class="card-title">
            <h2>Favourable Soil</h2>
        </div>
        <div class="card-body">
            <img src="../img/crop-info/soil.jpg" alt="Favourable Soil Picture">
            <h3>Type</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo dolor, sint iste, fugit mollitia eveniet ullam illum fugiat debitis nihil, blanditiis sit unde quisquam enim possimus excepturi! Minus voluptate recusandae vero vel molestiae atque.</p>
            <h3>pH</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum, id reprehenderit perspiciatis numquam sequi error itaque! Cupiditate quia, temporibus pariatur animi, minus eveniet earum itaque doloremque nostrum magnam voluptatibus quibusdam?</p>
        </div>
    </div>

    <!-- Planting Material Card -->
    <div class="card">
        <div class="card-title">
            <h2>Planting Material</h2>
        </div>
        <div class="card-body">
            <img src="../img/crop-info/seeds.jpg" alt="Planting Seeds Information Picture">
            <h3>Seeds Name</h3>
            <li><span>Duration </span><span>140 days</span></li>
            <li><span>Special Characteristic</span><span>Lorem ipsum dolor sit amet.</span></li>
            <li><span>Yield </span><span>110.0 quintal/Acre</span></li>
            <li><span>Season </span><span>Kharif</span></li>
        </div>
    </div>

    <!-- Sowing Card -->
    <div class="card">
        <div class="card-title">
            <h2>Sowing</h2>
        </div>
        <div class="card-body">
            <img src="../img/crop-info//planting.jpg" alt="Planting Crops Picture">
            <h3>Sowing Time</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint repellat quod minima nam necessitatibus amet esse, laudantium architecto aspernatur rem eius, saepe error rerum, quo porro dolorem voluptatibus dolorum impedit.</p>
        </div>
    </div>

    <!-- Land Preparation card -->
    <div class="card">
        <div class="card-title">
            <h2>Land Preparation</h2>
        </div>
        <div class="card-body">
            <img src="../img/crop-info//land-prepare.jpg" alt="Land Preparation Image">
            <h3>Land Preparation</h3>
            <li>List 1</li>
            <li>List 2</li>
            <li>List 3</li>
            <h3>Bed Preparation</h3>
            <li>List 1</li>
            <li>List 2</li>
        </div>
    </div>

    <!-- Spacing and Plant Population -->
    <div class="card">
        <div class="card-title"><h2>Spacing and Plant Population</h2></div>
        <div class="card-body">
            <img src="../img/crop-info//spacing-population.jpg" alt="Spacing and Plant population Image">
            <h3>Varieties</h3>
                <li><span>Row to Row </span><span> 3.9ft</span></li>
                <li><span>Plant to Plant</span><span> 1.9ft</span></li>
                <li><span>Plant Population</span><span> 5,678</span></li>
        </div>
    </div>

    <!-- Nutrient Management -->
    <div class="card">
        <div class="card-title">
            <h2>Nutrient Management</h2>
        </div>
        <div class="card-body">
            <img src="../img/crop-info/nutrient.jpg" alt="Nutrient Management Picture">
            <h3>Fertilizer Name</h3>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>

            <h3>Fertilizer Name</h3>
            <li>list item</li>
            <li>list item</li>
            <li>list item</li>
            <li>list item</li>

            <h3>Fertilizer Name</h3>
            <li>list item</li>
            <li>list item</li>
            <li>list item</li>

        </div>
    </div>
    <script src="../js/index.js"></script>
</body>

</html>