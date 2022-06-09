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
        $sql = "INSERT INTO `community` (`farmer-id`, `post-text`, `post-picture`) VALUES ($farmer_id, '$post_content', '$filename');";
        if ($post_content != null || $_FILES["post-image"]["name"] != null) {
            // Now let's move the uploaded image into the folder: image
            if (move_uploaded_file($tempname, $folder)) {
                // Execute query
                $result = mysqli_query($con, $sql);
                // echo "Farmer id: " . $_SESSION['farmerId'];
                // echo "<br>Post text: " . $post_content;
                // echo "<br>File name: " . $filename ."<br>";
                // echo var_dump($result);
                if ($result) {
                    $msg = 'Success! Post published succesfully...';
                    // selecting post id for inseerting likes 
                    header("Location: index.php");
                } else {
                    $msg = 'Warning! </strong> Publishing Failed';
                }
            } else {
                $msg = 'Error! Image not Uploaded';
            }
        } else {
            $msg = 'Sorry! You can not upload null value into Database.';
        }
    } catch (Exception $ex) {
        $msg = 'Exception! </strong> Failed to publish post. Error: ' . $ex->getMessage();
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
        .comm-form {
            margin-top: 4.8rem;
            overflow-x: hidden;
            background-color: var(--color-white);
            padding: 1rem;

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
            <h1>Add new Community Post</h1>
                <!-- Add Community post Form -->
    <div class="comm-form">
        <?= $msg?>
        <form method="POST" action="" enctype="multipart/form-data">
            <label for="post-content">Enter Some Text: </label>
            <textarea name="post-content" id="post-content" cols="30" rows="10">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis, quisquam.</textarea>

            <label for="file" class="btn-3 label">Select Picture</label>
            <input type="file" name="post-image" id="file">

            <button class="btn" type="submit" name="upload">Post Now</button>
        </form>
    </div>
    </main>
        <?php include('../include/right-section.php'); ?>
        </div>
    </div>
    <script src="../js/index.js"></script>
</body>

</html>