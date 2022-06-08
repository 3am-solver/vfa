<?php
require("../connection/conn.php");
if (isset($_SESSION['userlogin']) != true) {
    echo "<script> document.location = '../auth';</script>";
}
$msg = null;
if (isset($_POST['upload'])) {

    $post_content = $_POST["post-content"];
    $farmer_id = $_SESSION['farmerId'];
    // $_SERVER["DOCUMENT_ROOT"]
    $filename = $_FILES["post-image"]["name"];
    $tempname = $_FILES["post-image"]["tmp_name"];
    // Location of Image File where it can be Saved 
    $folder = $imgl . "upload/community/" . $filename;
    try {
        $sql = "INSERT INTO `community` (`id`, `farmer-id`, `post-text`, `post-picture`, `post-like`, `share`, `cmt-count`, `time`) VALUES (NULL, $farmer_id, '$post_content', '$filename', 0, 0, 0, current_timestamp());";
        if ($post_content != null || $_FILES["post-image"]["name"] != null) {
            if (move_uploaded_file($tempname, $folder)) {
                // Execute query
                $result = mysqli_query($con, $sql);
                // Now let's move the uploaded image into the folder: image
                if ($result) {
                    $msg = '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Success! </strong> Post published succesfully... <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>
                    <script>$(".comm-form").css("display","none") </script>
                    
                    ';
                } else {
                    $msg = '<div class="alert alert-warning alert-dismissible fade show" role="alert"> <strong>Warning ! </strong> Publishing Failed...<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>';
                }
            } else {
                $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert"> <strong>Error ! </strong> Image not Uploaded <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>';
            }
        } else {
            $msg = '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Sorry! </strong> You can not upload null value into Database.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
        }
    } catch (Exception $ex) {
        $msg = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Exception! </strong> Failed to publish post. Error: ' . $ex->getMessage() . '
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
}
// $result = mysqli_query($con, "SELECT * FROM crop");
// while ($data = mysqli_fetch_array($result)) {
//     echo `<img src="`.$data['image'].`">`;
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFA @Virtual Farming Assistant APP</title>
    <?php include('../include/base-css.php'); ?>
    <link rel="stylesheet" href="../css/communty.css">
    <style>
        .add-post-btn {
            position: fixed;
            bottom: 1rem;
            right: 1rem;
        }

        .add-post-btn>span {
            font-size: 3rem;
            color: #00fb36;
            transition: all 500ms ease;
        }

        .add-post-btn>span:hover {
            color: #fbb900;
        }

        .comm-form {
            display: none;
            margin-top: 4.8rem;
            width: 100vw;
            height: 100vh;
            overflow-x: hidden;
            position: fixed;
            top: 0%;
            left: 0%;
            background-color: var(--color-white);
            padding: 1rem;
        }

        .add-post-top {
            display: flex;
            justify-content: space-between;
            width: -webkit-fill-available;

        }

        .add-post-top>h2 {
            height: min-content;
        }
        .alert {
            width: 90%;
            margin: 10px auto;
            position: fixed;
            top: 5rem;
            left: 0%;
        }
        form {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            align-content: center;
            justify-content: space-evenly;
            width: -webkit-fill-available;
            overflow: hidden;
        }

        input[type=text],
        textarea {
            padding: 0.5rem;
            border: none;
            box-shadow: 0px 0px 5px;
            border-radius: 1rem;
            font-size: 1rem;
            color: green;
            width: 90%;
            margin: 10px auto;
        }

        input[type=text],
        textarea:focus-visible {
            outline: none;
        }

        input[type=file] {
            height: 0;
            overflow: hidden;
            width: 0;
        }

        .label {
            background: orange;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            font-family: "Rubik", sans-serif;
            font-size: inherit;
            font-weight: 500;
            margin: 1rem;
            outline: none;
            padding: 1rem 50px;
            position: relative;
            transition: all 0.3s;
            vertical-align: middle;
            overflow: hidden;
        }

        .label:hover {
            background-color: green;
        }

        .btn-3 span {
            display: inline-block;
            height: 100%;
            transition: all 0.3s;
            width: 100%;
        }

        .btn-3::before {
            color: #fff;
            content: "🖼️";
            font-size: 130%;
            height: 100%;
            left: 0;
            line-height: 2.6;
            position: absolute;
            top: -180%;
            transition: all 0.3s;
            width: 100%;
        }

        .btn-3:hover {
            background-color: green;
        }

        .btn-3:hover span {
            transform: translateY(300%);
        }

        .btn-3:hover::before {
            top: 0;
        }

        .btn {
            outline: none;
            border: none;
            padding: 0.5rem;
            margin: 1rem;
            background-color: lime;
            font-size: large;
            color: white;
            transition: 300ms;
            border-radius: 1rem;
        }

        .btn:hover {
            background-color: orange;

        }
    </style>
</head>

<body>
    <div class="container">
        <?php include('../include/sidebar.php'); ?>
        <main>
            <h1>Community</h1>
            <div class="cards">
                <?php 
                $result = mysqli_query($con, "SELECT * FROM community");
                while ($data = mysqli_fetch_array($result)) {
                    echo '<div class="post card">
                    <div class="post-top">
                        <div class="post-profile-photo">
                            <img src="../img/default-user.png" alt="profile_picture">
                        </div>
                        <h2>@'.$_SESSION['farmerName'].'</h2>
                        <span class="primary">Follow</span>
                    </div>
                    <div class="data">
                        <div class="post-bio">
                            <p>'.$data['post-text'].'</p>
                        </div>
                        <div class="post-stats">
                            <ul>
                                <li><b class="post-stat-count">'.$data['post-like'].'</b> Likes</li>
                                <li><b class="post-stat-count">'.$data['share'].'</b> Comments</li>
                                <li><b class="post-stat-count">'.$data['cmt-count'].'</b> Share</li>
                            </ul>
                        </div>
                    </div>
                    <img src="../img/upload/community/'.$data['post-picture'].'" alt="post-img" class="post-img">
                </div>';
                }
                
                ?>
                <!-- Post card Start from Here -->
                <!-- <div class="post card">
                    <div class="post-top">
                        <div class="post-profile-photo">
                            <img src="../img/carousel-image02.jpg" alt="profile_picture">
                        </div>
                        <h2>@Hardik_Kanajariya</h2>
                        <span class="primary">Follow</span>
                    </div>
                    <div class="data">
                        <div class="post-bio">
                            <p>Hello, <i class="post-real-name">Hardik</i> This is Post Description | Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero eius optio reiciendis incidunt ipsum dignissimos, non iusto aliquam provident eveniet, asperiores aspernatur quam dolorem at placeat animi veritatis, aut quos obcaecati enim deleniti corporis.</p>
                        </div>
                        <div class="post-stats">
                            <ul>
                                <li><b class="post-stat-count">164</b> Likes</li>
                                <li><b class="post-stat-count">188</b> Comments</li>
                                <li><b class="post-stat-count">206</b> Share</li>
                            </ul>
                        </div>
                    </div>
                    <img src="../img/image-box01.jpg" alt="post-img" class="post-img">
                </div> -->
                <!-- Post card Ends Here -->
            </div>
        </main>
        <?php include('../include/right-section.php'); ?>
        <!-- Add New Community Post Button -->
        <div class="add-post-btn" onclick='$(".comm-form").css("display","block")'>
            <span class="material-icons-sharp">
                add_circle
            </span>
        </div>

    </div>

    <!-- Add Community post Form -->
    <div class="comm-form">
        <?= $msg?>
        <div class="add-post-top">
            <span class="material-icons-sharp back-btn" onclick="this.parentElement.style.display = 'none';" style=" display: flex; align-items: center; ">keyboard_backspace</span>
            <h2>Add new Post</h2>
        </div>
        <form method="POST" action="" enctype="multipart/form-data">
            <label for="post-content">Enter Some Text: </label>
            <textarea name="post-content" id="post-content" cols="30" rows="10">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis, quisquam.</textarea>

            <label for="file" class="btn-3 label">Select Thumbnail</label>
            <input type="file" name="post-image" id="file">

            <button class="btn" type="submit" name="upload">Post Now</button>
        </form>
    </div>
    </div>
    <script src="../js/index.js"></script>
</body>

</html>