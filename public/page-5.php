<?php
session_start();

if (isset($_GET['sum'])) {
    $num = $_GET['sum'];
    if ($num == 768) {
        echo "Barakalla!";
        session_destroy();
    } else {
        echo "Noto'g'ri hisoblangan!";
    }
}

?>
<?php
if ($_SESSION['page-4']) { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>

        <h2>
            Hisoblang
        </h2>

        <h3>
            <?php
            echo $_SESSION['page'] . '+' . $_SESSION['page-2'] . '+' . $_SESSION['page-3'] . '+' . $_SESSION['page-4'];
            ?>
        </h3>

        <form action="" method="get">
            <input type="text" name="sum">
            <input type="submit" value="Send">
        </form>

    </body>

    </html>
<?php } else {
    header("Location:page-4.php");
}

?>