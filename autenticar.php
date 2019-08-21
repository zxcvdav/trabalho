<?php
if($_POST){
session_start();
$conn = mysqli_connect('localhost','root','');
$banco = mysqli_select_db($conn,'sistemalogin');
mysqli_set_charset($conn,'utf8');

$email = $_POST['email'];
$senha = md5($_POST['senha']);
if (filter_var($email, FILTER_VALIDATE_EMAIL)){
$query = $conn->query("SELECT * FROM cliente WHERE 
email = '{$email}' AND senha ='{$senha}'");
$row = $query->fetch_assoc();

$count = $query->num_rows;        


if ($count > 0){
    $_SESSION['userEmail'] =$row['email'];
    $_SESSION['userID'] =$row['id'];
    header("location: home.php");
}else{
   header("location: login.php?err=101"); 
}
}else{
    header("location: login.php?err=103"); 
 
 }

}else{
    header("location: login.php?err=102"); 
 
 
}
    //echo '<a href="login.php">';
    //echo "<a href=\"login.php\">";
    //echo "<p>{$nome}</p>";
    //echo "<p>".$nome."</p>";
    //echo '<p>'.$nome."</p>";


?>