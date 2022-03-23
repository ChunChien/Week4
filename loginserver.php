<?php
$url="index_2.php";
$account=$_POST["account"];
$password=$_POST["password"];

if ($account=="a1074350" && $password=="ashin1206"){
    echo "登入成功，3秒後進行跳轉";
    header("Refresh:3;url=$url");
    
}elseif($account=="a1074350" && $password!="ashin1206"){
    echo "密碼錯誤，3秒後返回登入頁面";
    header("Refresh:3;url=login.php");
}
else{
    echo "無會員資料，將進入註冊頁面";
    header("Refresh:3;url=signup.php");
}


?>