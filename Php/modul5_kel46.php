<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Class and Constructor</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
     <form action="modul5_kel46.php" method="POST">
        <label >System Login Kelompok xx</label><br>
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <button type="submit">Submit</button>
     </form>
    </body>
</html>

<?php
include("userService.php");

if (!empty($_POST['email']) && $_POST['password']) {
    $user = new userService($_POST['email'], $_POST['password']);

    if($get_user = $user->login()) {
        echo 'Welcome '.$user->getRole();
        echo ', Logged it as user email:'.$get_user;
    } else {
        echo 'Invalid Login';
    }
}

?>