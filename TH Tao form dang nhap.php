<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            width: 300px;
            height: 600px;
            border: 1px solid #7777;
            /*border-collapse: collapse;*/
        }
        #abc{
            text-align: center;
        }
    </style>
</head>
<body>
<form method="get">
    <tabel>
        <tr>
            <td id="abc">Login</td>
            <br>
        </tr>
        <tr>
            <td>Username : </td>
            <br>
        </tr>
        <tr>
            <td><input type="text" name="username"></td>
            <br>
        </tr>
        <tr>
            <td>Password :</td>
            <br>
        </tr>
        <tr>
            <td><input type="password" name="password"></td>
            <br>
        </tr>
        <tr>
            <td><button type="submit">Sign in</button></td>
            <br>
        </tr>
    </tabel>
</form>

</body>
</html>

<?php
if($_SERVER["REQUEST_METHOD"] == "GET"){
    $username = $_GET["username"];
    $password = $_GET["password"];
    if ($username == "admin" && $password == "admin"){
        echo "Welcome";
    }else{
        echo "Sai thong tin dang nhap";
    }
}
