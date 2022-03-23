<?php
$account=$_POST["account"];
$password=$_POST["password"];
$pwcheck=$_POST["pwcheck"];

if ($pwcheck==$password){
    echo "註冊成功";
    header("Refresh:3;url=login.php");
    
}else{
    echo "請再次檢查密碼";
    header("Refresh:3;url=signup.php");
}


?>
