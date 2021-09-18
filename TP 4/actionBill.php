<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill-Content</title>
</head>
<body>
    <?php
        require_once "header.php";
        require_once "nav.php";

        $dateBill = strtotime($_GET["dateBill"]);
        $dateToday = strtotime(date('d-m-Y'));
        //$typeBill = $_GET["typeBill"];
        //$numberBill = $_GET["numberBill"];
        var_dump($dateBill);
        if( $dateBill < $dateToday )
        {
            require_once "bill-content.php";
        } else 
        {
            header("location:action.php");            
        }

        require_once "footer.php";
    ?>
</body>
</html>
