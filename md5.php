<?php 
if ($_POST){
$str = $_POST['senha'] ;
//echo "HASH: " .md5 ($str);
if (md5($str) === 'e10adc3949ba59abbe56e057f20f883e') {
     echo "Senha correta";
     exit;
}else{
    echo "senha incorreta";
}
}

 ?>

 <html>
     <body>
         <form method="post" acttion="md5.php">
          <label> Digite sua senha </label>
          <input type="text" name="senha" size="20"/>
</form>
</body>
</html>

     
