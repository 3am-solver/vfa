<?php
require("../connection/conn.php");
$msg = null;

if (isset($_SESSION['adminLogin']) != true) {
    echo "<script> document.location = 'index.php';</script>";
}
// If upload button is clicked ...
if (isset($_POST['upload'])) {

    $crop_name = $_POST["name"];
    $crop_desc = $_POST["desc"];
    // $_SERVER["DOCUMENT_ROOT"]
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    // Location of Image File where it can be Saved 
    $folder = $imgl . "upload/krishi-book/" . $filename;
    try {
        $sql = "INSERT INTO blogs (title, content, thumbnail) VALUES ('$crop_name', '$crop_desc', '$filename')";
        if ($crop_name != null || $_FILES["uploadfile"]["name"] != null) {
            if (move_uploaded_file($tempname, $folder)) {
                // Execute query
                $result = mysqli_query($con, $sql);
                // Now let's move the uploaded image into the folder: image
                if ($result) {
                    $msg = '<div class="alert alert-success alert-dismissible fade show" role="alert"> <strong>Success! </strong> Blog published succesfully... <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> </div>';
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
        <strong>Exception! </strong> Failed to publish blog. Error: ' . $ex->getMessage() . '
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
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <?php include('../include/header.php'); ?>
    <style>
        /* .add-container{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 100%;
        } */
        .alert {
            width: 90%;
            margin: 10px auto;
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
    <!-- =============== Navigation ================ -->
    <div class="container">
        <?php
        include('../navigation.php');
        ?>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <?php
            include('../include/topbar.php');
            ?>
            <h1 class="Dashboard">Publish new Krishi-Book Detail</h1>
            <div class="add-container">
                <div>
                    <?= $msg ?>
                </div>
                <form method="POST" action="" enctype="multipart/form-data">
                    <label for="">Enter Blog Title: </label>
                    <input type="text" name="name">

                    <label for="">Enter Content: </label>
                    <textarea name="desc" id="" cols="30" rows="10">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis, quisquam.</textarea>

                    <label for="file" class="btn-3 label">Select Thumbnail</label>
                    <input type="file" name="uploadfile" id="file">

                    <button class="btn" type="submit" name="upload">UPLOAD</button>
                </form>
            </div>
        </div>
    </div>
    <script src="./assets/js/main.js"></script>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>