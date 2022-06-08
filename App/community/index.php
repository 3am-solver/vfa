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

        .btns>a>span {
            outline: none;
            border: none;
            padding: 0.5rem;
            margin: 1rem;
            background-color: lime;
            font-size: large;
            color: white;
            transition: 300ms;
            border-radius: 1rem;
            padding: 0.5rem;

        }

        .btns>a>span:hover {
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
                    echo '<div class="post card" id="' . $data['id'] . '">
                    <div class="post-top">
                        <div class="post-profile-photo">
                            <img src="../img/default-user.png" alt="profile_picture">
                        </div>
                        <h2><i style="color:orange"">@</i>' . $_SESSION['farmerName'] . '</h2>
                        <span class="primary">Follow</span>
                    </div>
                    <div class="data">
                        <div class="post-bio">
                            <p>' . $data['post-text'] . '</p>
                        </div>
                        <div class="post-stats">
                            <ul>
                                <li><b class="post-stat-count" style="color: orange; font-size: 1.5rem;" >' . $data['post-like'] . '</b> Likes</li>
                                <li><b class="post-stat-count" style="color: orange; font-size: 1.5rem;" >' . $data['cmt-count'] . '</b> Comments</li>
                                <li><b class="post-stat-count" style="color: orange; font-size: 1.5rem;" >' . $data['share'] . '</b> Share</li>
                            </ul>
                        </div>
                    </div>
                    <img src="../img/upload/community/' . $data['post-picture'] . '" alt="post-img" class="post-img">
                    <!--Like/Comment/Share Buttons-->
                    <div class="btns">
                        <a href="update.php?id=' . $data['id'] . '&like=true"> <span class="material-icons-sharp"> thumb_up_alt </span> </a> 
                        <a href="update.php?id=' . $data['id'] . '&cmt=true"> <span class="material-icons-sharp"> try </span> </a>
                        <a href="update.php?id=' . $data['id'] . '&share=true"> <span class="material-icons-sharp"> share </span> </a>
                     </div>
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
        <a href="add-new-post.php" class="add-post-btn">
            <span class="material-icons-sharp" style="background-color: white; border-radius:50%;">
                add_circle
            </span>
        </a>
    </div>
    </div>
    <script src="../js/index.js"></script>
</body>

</html>