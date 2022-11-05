<?php 
session_start ();
 if ($_SESSION['status_login']!=true){
    header('location: login.php');
}
?>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Landing Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <div class="container">
        <h2>Pilih Login</h2>
        <div class="btn-group btn-group-justified">
          <a href="login.php" class="btn btn-primary">Login User</a>
          <a href="login2.php" class="btn btn-primary">Login Member</a>
        </div>
      </div>
</body>
</html>