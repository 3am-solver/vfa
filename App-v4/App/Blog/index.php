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

        main {
            background-color: var(--color-background);
            padding: 0.8rem;
            border-radius: 2rem;
        }

        .card {
            background-color: var(--color-white);
            border-radius: 1rem;
            box-shadow: var(--box-shadow);
            width: 100%;
        }

        .card:hover {
            box-shadow: none;
        }

        .card-cover img {
            width: 100%;
            height: 150px;
            border-radius: 1rem;
        }

        .card-title h2 {
            color: var(--color-success);
            font-size: 1rem;
            text-align: center;
        }

        .card-btn {
            text-align: center;
            color: var(--color-primary);
        }

        .card-btn:hover {
            cursor: pointer;
            text-decoration: underline;
            transition: all 300ms ease;
        }

        /* Blog section */
        .blog-section {
            width: -webkit-fill-available;
            height: 100%;
            padding: 0.5rem;
            margin: 0.5rem;
            display: none;
        }

        .thumbnail img {
            border-radius: 2rem;
            padding: 1rem;
            width: 100%;
            overflow: hidden;
            resize: auto;
        }

        .blog-content {
            text-align: center;
            margin: 0 auto;
        }

        .blog-content p {
            font-size: 0.9rem;
        }

        .blog-content h3 {
            font-size: 1.4rem;
        }

        .blog-content img {
            width: 300px;
            height: 300px;
            resize: auto;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php include('../include/sidebar.php'); ?>
        <main>
            <h1>Blogs</h1>
            <div class="card-section">
                <?php
                require("../connection/conn.php");
                $result = mysqli_query($con, "SELECT * FROM blogs");
                while ($data = mysqli_fetch_array($result)) {
                    echo '<div class="card">
                    <span style="display:none;" id="blog-id">' . $data["id"] . '</span>
                        <div class="card-cover">
                            <img src="../img/upload/blog/' . $data["thumbnail"] . '" alt="' . $data["thumbnail"] . '">
                        </div>
                        <div class="card-title">
                            <h2>' . $data["title"] . '</h2>
                        </div>
                        <div class="card-btn">
                            Read More
                        </div>
                    </div>';
                }
                ?>
            </div>
            <div id="blog">
                
            </div>
        </main>
        <?php include('../include/right-section.php'); ?>
    </div>
    <script src="../js/index.js"></script>
    <!-- <script>
        $(".card-btn").click(() => {
            console.log("You clicked read more btn");
            let id = $("#blog-id").text();
            // alert(id + " this is blog id");
            // Ajax Request to get Blog 
            $.ajax({
                url: 'get_blog.php?id=' + id,
                type: 'POST',
                success: function(response) {
                    $("#blog").html(response);
                    console.log(response);
                }
            });
        });
    </script> -->
</body>

</html>