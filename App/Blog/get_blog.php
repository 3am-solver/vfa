<?php
    require("../connection/conn.php");
    $id = $_GET["id"];
    $sql = "SELECT * FROM blogs WHERE id = $id";
    $result = mysqli_query($con, $sql);
    while ($data = mysqli_fetch_array($result)) {
        echo '<div class="blog-section">
            <div class="thumbnail">
                <img src="../img/upload/blog/'.$data["thumbnail"].'" alt="'.$data["thumbnail"].'">
            </div>
            <center>
                <h1>'.$data["title"].'</h1>
            </center>
            <div class="blog-content">
                '.$data["content"].'
            </div>
        </div>';
    }
?>