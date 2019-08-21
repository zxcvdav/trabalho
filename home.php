<?php
session_start();
if (isset($_SESSION['userID'])){

$email = $_SESSION['userEmail'];
$id = $_SESSION['userID'];
}else{
    header("location: login.php?err=102");
}
?>
<html>
<head>
<title> home page </title>
</head>
<body>
<p>
<h1>Bem-vindo</h1> <?php echo $email; ?>
</p>
<p>
<a href="logoff.php">Logoff</a>
</p>
</body>
</html>