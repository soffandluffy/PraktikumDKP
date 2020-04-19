<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Class and Constructor</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <!-- form html dengan action ke file itu sendiri dan method POST -->
     <form action="modul5_kel46.php" method="POST">
        <label >System Login Kelompok 46</label><br>
        <!-- input email dengan type email dan input password dengan type password dan button submit,  -->
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <button type="submit">Submit</button>
     </form>
    </body>
</html>

<?php
// include file userService.php agar bisa menggunakan method yang ada didalam class userService
include("userService.php");

// mengecek apakah hasil post email dan password tidak kosong
if (!empty($_POST['email']) && $_POST['password']) {
    // membuat constructor baru untuk userService dengan variabel user
    $user = new userService($_POST['email'], $_POST['password']);

    // memanggil function login dan mengecek apakah email dan password sudah sesuai dengan data
    if($get_user = $user->login()) {
        // menampilkan pesan welcome role dan email user yang login
        echo 'Welcome '.$user->getRole();
        echo ', Logged it as user email:'.$get_user;
    } else {
        // jika login gagal atau email dan password tidak sesuai akan menampilkan invalid login
        echo 'Invalid Login';
    }
}

?>