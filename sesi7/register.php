<?php
    include("cmd/user.php");
    $psn = "";
    //cek pengirima form
    if(isset($_POST["txPASS1"])){
        if($_POST["txPASS1"] == $_POST["txPASS2"]){
            $nama = $_POST["txNAMA"];
            $email = $_POST["txEMAIL"];
            $user = $_POST["txUSER"];
            $PASS = $_POST["txPASS1"];

            if( crateuser($nama, $email, $user, $PASS)  ){
             $psn = "Create Data User Sukses";
            }else{
             $psn = "Create Data User Gagal";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register User</title>
</head>
<body>

    <form method="POST" action="register.php">
        <div>
            Nama Lengkap🔥
            <input type="text" name="txNAMA">
        </div>
        <div>
            Email🔥
            <input type="email" name="txEMAIL">
        </div>
        <div>
            Username🔥
            <input type="text" name="txUSER">
        </div>
        <div>
            Password🔥
            <input type="password" name="txPASS1">
        </div>
        <div>
            Verifikasi Password🔥
            <input type="password" name="txPASS2">
        </div>

        <div>
            <button type="submit"> Register </button>
        </div>

    </form>

</body>
</html>