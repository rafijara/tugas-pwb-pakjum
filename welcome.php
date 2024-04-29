<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            background-color: rgb(134, 205, 218);
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="color :rgb(6, 66, 4);">SELAMAT DATANG!</h1>
    welcome <?php echo $_POST["first-name"];
    ?>  <?php echo $_POST["last-name"];
    ?>!<br />
    Your Gender Is <?php echo $_POST["gender"];
    ?> <br />
    Your Nationality Is <?php echo $_POST["nationality"];
    ?> <br />
    Your Language Spoke Is <?php echo $_POST["language"];
    ?> <br />
    Your Bio Is <?php echo $_POST["bio"];
    ?> <br />
    <p style="color:rgb(1, 9, 54)">Terima kasih telah bergabung di website kami. Media belajar kita bersama!</p>
</body>
</html>