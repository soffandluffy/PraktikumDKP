<?php
include("userService.php");

?>
<html>
<head>
  <title>PraktikumDKP</title>
  <link rel="stylesheet" type="text/css" href="../css/materialize.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

  <div class="row">
    <div class="col l4 offset-l4">
      <div class="card">
        <div class="card-content">
          <?php
            if (!empty($_POST['email']) && $_POST['password']) {
              $user = new userService($_POST['email'], $_POST['password']);

              if($get_user = $user->login()) {
                echo '<div class="card-panel teal center">';
                echo '<span class="white-text">';
                echo 'Welcome '.$user->getRole();
                echo ', Logged it as user email:'.$get_user;
                echo '</span>';
                echo '</div>';
                  
              } else {
                echo '<div class="card-panel red center" style="padding:2%;">';
                echo '<span class="white-text">';
                  echo 'Invalid Login';
                echo '</span>';
                echo '</div>';
              }
          }
          ?>
          <span class="card-title">Login</span>
          <form method="POST" action="modul5_iseng.php">
            <div class="row">
                  <div class="input-field col s12">
                    <input id="email" type="email" name="email" value="<?php echo (isset($email))?$email:''; ?>">
                    <label for="email">Email</label>
                  </div>
                  <div class="input-field col s12">
                    <input id="password" type="text" name="password" value="<?php echo (isset($password))?$password:''; ?>">
                    <label for="password">Password</label>
                  </div>
                  <div class="input-field col s12 center">
                    <button class="btn green waves-effect waves-light" type="submit" name="action">
                      Login
                    </button>
                  </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="../js/vendors.min.js"></script>
</body>
</html>
