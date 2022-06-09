<?php
require("../connection/conn.php");
if (isset($_SESSION['userlogin']) != true) {
    echo "<script> document.location = '../auth';</script>";
}
    // updating Likes 
    if(isset($_GET['like'])){
        $postid = $_GET['postid'];
        echo "Post id = " . $postid . "<br>";
        
        // Getting Previous Like 
		$result = mysqli_query($con, "SELECT `post-like` FROM community WHERE id=$postid");
		$row = mysqli_fetch_array($result);
		$n = $row['post-like'];
        echo "<br> Previous post like was: " . $n ;
        $updateLike = $n+1;
        $userId = $_SESSION['farmerId'];
        echo "<br>Farmer id: " . $userId . "<br>";

        // inserting likes into Like table 
		if(mysqli_query($con, "INSERT INTO `likes` (`userId`, `postId`) VALUES ('$userId', '$postid');")){
            echo "<br> Like inserted..<br>";
        }
        else{
            echo "<br>like was not inserted<br>";
        }

        // Updating likes in community Table 
		if(mysqli_query($con, "UPDATE community SET `post-like`=$updateLike WHERE id=$postid")){
            echo "Liked...<br>";
        }
        else{
            echo "Not liked <br>";
        }

		echo "<br> Updated Like : ". ($n+1);
    }
    // Updating Dislikes 
    // if (isset($_GET['unliked'])) {
	// 	$postid = $_GET['postid'];  
	// 	$result = mysqli_query($con, "SELECT * FROM community WHERE id=$postid");
	// 	$row = mysqli_fetch_array($result);
	// 	$n = $row['post-like'];

	// 	mysqli_query($con, "DELETE FROM likes WHERE postid=$postid AND userid=1");
	// 	mysqli_query($con, "UPDATE community SET `post-like`=$n-1 WHERE id=$postid");
		
	// 	echo $n-1;
	// 	exit();
	// }

?>