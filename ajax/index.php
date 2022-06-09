<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head> 
<body>
    <form id="register-form">
        <input type="email" name="email" placeholder="Enter email" /><br><br>
        <input type="password" name="password" placeholder="Enter password" /><br><br>
        <button type="button" onclick="register()">Register</button>
    </form>
    <script src="./js/jquery-3.6.0.min.js"></script>
    <script>
        function register()
        {
            $.post({
                url: 'register.php',
                data: $("#register-form").serialize(),
                success: function(response)
                {
                    console.log(response);
                },
                error: function(data)
                {
                    console.log(data);
                }
            });
        }
    </script>
</body>
</html>