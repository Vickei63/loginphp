
<?php
    include("database.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
        <div id="form">
            <h1>Login page</h1>

            <form action="login.php" name="form" onsubmit="return invalid()" method="post">
                <label for="">Username: </label>
                <input type="text" name="username"><br><br>

                <label for="">Password: </label>
                <input type="text" name="password"><br><br>

                <input type="submit" value="Login" id="submitBtn" name="submit"><br><br>
            </form>

        </div>


        <script>

            function invalid(){
               var username = document.form.username.value;
                var password = document.form.password.value;

                if(username.length == "" && password.length == ""){
                    alert ("Username and password empty");
                    return false;
                }
                if(username.length == ""){
                    alert ("Username empty");
                    return false;
                }
                if(password.length == ""){
                    alert ("Password empty");
                    return false;
                }

            }
        </script>
</body>
</html>