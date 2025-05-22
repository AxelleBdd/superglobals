<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
    </h1>
    
    <form action="index.php" method="POST">
        <p>Votre nom : <input type="text" name="first_name" /></p>
        <p><input type="submit" value="OK"></p>
    </form>

    <?php
    session_start();
    if ($_GET["first_name"]) {
        echo 'Bonjour ' . $_GET["first_name"] . '.';

    } elseif($_SESSION["first_name"]) {
        echo 'Bonjour ' .$_SESSION["first_name"]. '.';

    } elseif(isset($_POST['first_name'])) {
        echo 'Bonjour ' .$_POST['first_name']. '.';
        $_SESSION["first_name"] = $_POST['first_name'];

    } else {
        echo 'Bonjour Anonyme.';
    }
        
    ?>
</body>
</html>