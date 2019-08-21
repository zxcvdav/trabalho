<?php 
if ($_POST){
$str = $_POST['senha'] ;
//echo "HASH: " .md5 ($str);
if (sha1($str) === '93d51f52fbdfe1e944f084727df24993e88caee7') {
     echo "Senha correta";
     exit;
}else{
    echo "senha incorreta";
}
}

 ?>

 <html>
     <body>
         <form method="post" acttion="sha1.php">
          <label> Digite sua senha </label>
          <input type="text" name="senha" size="20"/>
</form>
</body>
</html>

     