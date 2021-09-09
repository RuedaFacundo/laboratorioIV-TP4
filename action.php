<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Add-Bill</title>
</head>
<body>
    <?php
        require_once "header.php";
        require_once "nav.php";

        $myUser = $_POST["user"];
        $myPassword = $_POST["password"];

        if(strcmp($myUser, "Cosme Fulanito") == 0 && strcmp($myPassword, "strongPassword!") == 0 )
        {
            require_once "add-bill.php";
        } else 
        {
            header("location:index.php");            
        }

        require_once "footer.php";
    ?>
</body>
</html>

