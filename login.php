<html>

<head>
    <title>會員登入</title>
</head>


<body>
    <form action="loginserver.php" method="post" enctype="multipart/form-data">
    <div style="background-color:#F5FFE8;padding:7px;margin-left: 100;margin-right: 100">
        <h1><center>會員登入</center></h1>
    </div>
    <div style="background-color:#FFFFFF;padding:7px;margin-left: 300;margin-right: 300">
        <table align="center" cellspacing="10px">
            <tr>
                <td><span style="font-size:20px;"><b>帳號:</b></span></td>
                <td><span style="padding:5px"><input type="text" name="account" placeholder="帳號" style="font-size:15px;padding:3px"></span></td>
            </tr>
            <tr>
                <td><span style="font-size:20px;"><b>密碼:</b></span></td>
                <td><span style="padding:5px"><input type="text" name="password" placeholder="密碼" style="font-size:15px;padding:3px"></span></td>
            </tr>
            
            
        </table>
        <center>
        <button type="submit" name="登入" class="btn">登入</button>
        <p>
            還未加入會員嗎?<a href="signup.php">註冊會員</a>
        </p>
        </center>
       

    </div>
    
</body>

</html>