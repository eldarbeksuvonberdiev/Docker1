<?php
session_start();
// session_destroy();
if (isset($_GET['sum'])) {
    $num = $_GET['sum'];
    if ($num == 60) {
        $_SESSION['page'] = 60;
        header("Location:page-2.php");
    } else {
        echo "Noto'g'ri hisoblangan!";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Yig'indini hisoblang:</h2>

    <h3>15 + 45 = </h3>

    <form action="" method="get">
        <input type="text" name="sum">
        <input type="submit" value="Send">
    </form>

</body>

</html>