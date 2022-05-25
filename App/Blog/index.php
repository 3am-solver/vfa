<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFA @Virtual Farming Assistant APP</title>
    <?php include('../include/base-css.php'); ?>
    <style>
        .card-section {
            display: grid;
            grid-template-columns: 50% 50%;
            gap: 0.5rem;
            justify-items: center;
            align-items: center;
            justify-content: space-between;
            align-content: center;
        }
        main{
            background-color: var(--color-background);
            padding: 0.8rem;
            border-radius: 2rem;
        }

        .card{
            background-color: var(--color-white);
            border-radius: 1rem;
            box-shadow: var(--box-shadow);
            width: 100%;
        }

        .card:hover{
            box-shadow: none;
        }

        .card-cover img {
            width: 100%;
            height: 150px;
            border-radius: 1rem;
        }
        .card-title h2{
            color: var(--color-success);
            font-size: 1rem;
            text-align: center;
        }
        .card-btn{
            text-align: center;
        }
        .card-btn a{
            color: var(--color-primary);
        }
        .card-btn a:hover{
            cursor: pointer;
            text-decoration: underline;
            transition: all 300ms ease;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php include('../include/sidebar.php'); ?>
        <main>
            <h1>Blogs</h1>
            <div class="card-section">
                <div class="card">
                    <div class="card-cover">
                        <img src="../img/mainBg.jpg" alt="blog-card cover image">
                    </div>
                    <div class="card-title">
                        <h2>this is blog card title</h2>
                    </div>
                    <div class="card-btn">
                        <a href="/blog-post">Read more</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-cover">
                        <img src="../img/carousel-image05.jpg" alt="blog-card cover image">
                    </div>
                    <div class="card-title">
                    <h2>this is blog card title</h2>
                    </div>
                    <div class="card-btn">
                        <a href="/blog-post">Read more</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-cover">
                        <img src="../img/carousel-image04.jpg" alt="blog-card cover image">
                    </div>
                    <div class="card-title">
                    <h2>this is blog card title</h2>
                    </div>
                    <div class="card-btn">
                        <a href="/blog-post">Read more</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-cover">
                        <img src="../img/carousel-image03.jpg" alt="blog-card cover image">
                    </div>
                    <div class="card-title">
                    <h2>this is blog card title</h2>
                    </div>
                    <div class="card-btn">
                        <a href="/blog-post">Read more</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-cover">
                        <img src="../img/carousel-image02.jpg" alt="blog-card cover image">
                    </div>
                    <div class="card-title">
                    <h2>this is blog card title</h2>
                    </div>
                    <div class="card-btn">
                        <a href="/blog-post">Read more</a>
                    </div>
                </div>
                <div class="card">
                    <div class="card-cover">
                        <img src="../img/carousel-image01.jpg" alt="blog-card cover image">
                    </div>
                    <div class="card-title">
                    <h2>this is blog card title</h2>
                    </div>
                    <div class="card-btn">
                        <a href="/blog-post">Read more</a>
                    </div>
                </div>
                
            </div>
        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    <script src="../js/index.js"></script>
</body>

</html>