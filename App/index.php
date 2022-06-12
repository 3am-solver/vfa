<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VFA @Virtual Farming Assistant APP</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <?php include('./include/base-css.php'); ?>
</head>

<body>
    <script>
        let login = sessionStorage.getItem("userLoggedin");
        if (!login) {
            window.location.href = "../auth";
        } else {
            window.location.href = "../home/";
        }
    </script>

</body>

</html>