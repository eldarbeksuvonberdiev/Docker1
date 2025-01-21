<?php
session_start();

if (isset($_GET['sum'])) {
    $num = $_GET['sum'];
    if ($num == 3) {
        $_SESSION['page-3'] = 3;
        header("Location:page-4.php");
    } else {
        echo "Noto'g'ri hisoblangan!";
    }
}

?>
<?php
if (isset($_SESSION['page-2'])) { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <h2>Bo'linmani hisoblang:</h2>

        <h3>45 / 15 = </h3>

        <form action="" method="get">
            <input type="text" name="sum">
            <input type="submit" value="Send">
        </form>

    </body>

    </html>
<?php } else {
    header("Location:page-2.php");
}

?>