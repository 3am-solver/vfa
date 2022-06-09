<?php
require("../connection/conn.php");

    $id = $_GET['id'];
    echo "Updating Records" . "<br>";
    echo "Id = " . $id . "<br>";
    echo var_dump($_GET['like']) . "<br>";
    // updating Likes 
    if(isset($_GET['like'])){
        echo "<br> You are updating likes where id = " . $id;
        // Getting Likes from Database 
        $likeCount = mysqli_query($con, "SELECT `post-like` FROM community  WHERE `community`.`id` = $id;");
        $data = mysqli_fetch_array($likeCount);
        echo "<br> Previous like was : <b>" . $data['post-like'] . "</b>";
       
        // Incrementing like by 1 
        $newLikeCount = (int)$data['post-like'] + 1;

        echo "<br> New like Count is : <b> " . $newLikeCount . "</b>";

        // updating Likes 
        $sql = "UPDATE `community` SET `post-like` = $newLikeCount WHERE `community`.`id` = $id;";
        $result = mysqli_query($con, $sql);
        if($result){
            echo "<br> Like Updated Successfully";
            header("Location: index.php");
        }
        else{
            echo "<br> Like was not Updated ";
        }
    }
    else{
        echo "<br>Like not Defined";
    }
    // updating Shares 
    if(isset($_GET['share'])){
        echo "<br> You are updating shares where id = " . $id;
        // Getting Likes from Database 
        $shareCount = mysqli_query($con, "SELECT `share` FROM community  WHERE `community`.`id` = $id;");
        $data = mysqli_fetch_array($shareCount);
        echo "<br> Previous share was : <b>" . $data['share'] . "</b>";
       
        // Incrementing like by 1 
        $newShareCount = (int)$data['share'] + 1;

        echo "<br> New share Count is : <b> " . $newShareCount . "</b>";

        // updating Likes 
        $sql = "UPDATE `community` SET `share` = $newShareCount WHERE `community`.`id` = $id;";
        $result = mysqli_query($con, $sql);
        if($result){
            echo "<br> Share Updated Successfully";
            header("Location: index.php");
        }
        else{
            echo "<br> Share was not Updated ";
        }
    }
    else{
        echo "<br> share not Defined";
    }
    // updating Comments 
    if(isset($_GET['cmt'])){
        echo "<br> You are updating likes where id = " . $id;
    }
    else{
        echo "<br> Comment not Defined";
    }
