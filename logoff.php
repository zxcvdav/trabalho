<?php
session_start();
// remove todas as variáveis
session_unset();
//destrói a sessão
session_destroy();
header("location: login.php");
?>