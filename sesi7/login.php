<?php
    session_start();
    include("cmd/user.php");
    
    if(isset($_POST["txUSER"])){
        $user = $_POST["txUSER"];
        $pwd = $_POST["txPASS"];

        $islogin = ceklogin($user, $pwd);
         if($islogin["STATUS"]){
             $_SESSION["login"] = md5($user);
             $_SESSION["NAMA"] = $islogin["NAMA"];

             header("location: dashboard.php");
         }else{
             $_SESSION["login"] = "";
             $_SESSION["NAMA"] = "";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>
<body>
    
    <form action="login.php" method="POST" class="m-auto border p-4 mt-4 w-25">
        <h3>Form Login🔥</h3>
    <div>
        Username🔥
        <input type="text" name="txUSER" class="form-control mb-2">
    </div>

    <div>
        Password🔥
        <input type="password" name="txPASS" class="form-control mb-2">
    </div>

            <button type="submit" class=" btn btn-danger  mt-2">🔥🔥🔥</button>
    </div>
    </form>
</body>
</html>