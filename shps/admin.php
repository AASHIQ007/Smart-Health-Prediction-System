<?php
    header("Cache-Control: no-store, must-revalidate, max-age=0");
    header("Pragma: no-cache");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    $admin = isset($_COOKIE["admin_log"]);
    $page = isset($_COOKIE["page"]);
    if ($page) {
      $page = $_COOKIE["page"];
    }
    if ($admin) {
      $page = "Location:" . $_COOKIE["page"];
      header($page);
    }
    $loginfailed = isset($_COOKIE["loginfailed"]);
?>
<!DOCTYPE html>
<html lang="en">
  <head><meta charset="gb18030">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign In</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="description" content="">
    
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f1595d">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="css/vendor.min.css">
    <link rel="stylesheet" href="css/elephant.min.css">
    <link rel="stylesheet" href="css/login-2.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="login">
      <div class="login-footer" style="background: red; color: white;">
        <?php
          if ($loginfailed) {
            echo "Wrong E-mail or Password!!! Please, try again.";
          }
        ?>
      </div>
      <div class="login-body">
        <a class="login-brand" href="#">
         <center><h3>Sign In</h3> </center> 
        </a>
        <div class="login-form">
          <form data-toggle="validator" action="db/action.php" method="post">
            <div class="form-group">
              <label for="email">User Name</label>
              <input id="email" name="user_name" class="form-control" type="text" name="txtEmail" spellcheck="false" autocomplete="off" data-msg-required="Please enter your email address." required>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input id="password" name="password" class="form-control" type="password" name="txtPassword" minlength="4" data-msg-minlength="Password must be 4 characters or more." data-msg-required="Please enter your password." required>
            </div>
            <div class="form-group">
              <label class="custom-control custom-control-primary custom-checkbox">
                <input class="custom-control-input" type="checkbox" checked="checked">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-label">Keep me signed in</span>
              </label>
              
              
            </div>
            <button class="btn btn-primary btn-block" name="btnsignin_admin" type="submit">Sign in</button>
            
            
          </form>
        </div>
      </div>
     
    </div>
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    
  </body>
</html>