<!DOCTYPE html>
<html lang="en">
<head>
    <title>Discuss</title>
    <?php include("./client/commonFile.php") ?>
</head>
<body>
    <?php 
    session_start();
    include("./client/header.php");

    if (isset($_GET["signup"]) && (!isset($_SESSION['user']) || !isset($_SESSION['user']['username']))) {
        include("./client/signup.php");
    } 
    else if (isset($_GET["login"]) && (!isset($_SESSION['user']) || !isset($_SESSION['user']['username']))) {
        include("./client/login.php");
    }
    ?>

</body>
</html>