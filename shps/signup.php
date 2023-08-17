<?php
    header("Cache-Control: no-store, must-revalidate, max-age=0");
    header("Pragma: no-cache");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    $user = isset($_COOKIE["cookie_user"]);
    $page = isset($_COOKIE["page"]);

    if ($user) {
      header("Location:myprofile.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <meta name="description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta property="og:url" content="http://demo.madebytilde.com/elephant">
    <meta property="og:type" content="website">
    <meta property="og:title" content="The fastest way to build Modern Admin APPS for any platform, browser, or device.">
    <meta property="og:description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta property="og:image" content="http://demo.madebytilde.com/elephant.jpg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@madebytilde">
    <meta name="twitter:creator" content="@madebytilde">
    <meta name="twitter:title" content="The fastest way to build Modern Admin APPS for any platform, browser, or device.">
    <meta name="twitter:description" content="Elephant is an admin template that helps you build modern Admin Applications, professionally fast! Built on top of Bootstrap, it includes a large collection of HTML, CSS and JS components that are simple to use and easy to customize.">
    <meta name="twitter:image" content="http://demo.madebytilde.com/elephant.jpg">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#f1595d">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700">
    <link rel="stylesheet" href="css/vendor.min.css">
    <link rel="stylesheet" href="css/elephant.min.css">
    <link rel="stylesheet" href="css/signup-3.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="signup">
      <div class="signup-body">
        <h3 class="signup-heading">Sign up</h3>
        <div class="signup-form">
          <form data-toggle="md-validator" action="db/action.php" method="post">
            
           <div class="row">
              <div class="col-sm-12">
                <div class="md-form-group md-label-floating">
                  <input class="md-form-control" type="text" name="name_signup" minlength="6" placeholder="Patient Name" autocomplete="off">
                </div>
              </div>
            </div>
            
                <div class="row">
              <div class="col-sm-12">
                <div class="md-form-group md-label-floating">
                  <input class="md-form-control" type="text" name="address_signup" placeholder="Address" spellcheck="false" autocomplete="off" data-msg-required="Please enter your email address." required>
                </div>
              </div>
            </div>
            
           <div class="row">
              <div class="col-sm-12">
                <div class="md-form-group md-label-floating">
                  <input class="md-form-control" type="text" name="mobile_signup" placeholder="Mobile No" autocomplete="off">
                </div>
              </div>
            </div>    
             <div class="row">
              <div class="col-sm-12">
                <div class="md-form-group md-label-floating">
                  <input class="md-form-control" type="text" name="username_signup" spellcheck="false" autocomplete="off" data-msg-required="Please enter your email address." required placeholder="User Name">
                </div>
              </div>
            </div>
            
           <div class="row">
              <div class="col-sm-12">
                <div class="md-form-group md-label-floating">
                  <input class="md-form-control" type="password" name="password_signup"  data-msg-minlength="Password must be 6 characters or more." data-msg-required="Please enter your password." required placeholder="Password">
                </div>
              </div>
            </div>
            <button class="btn btn-primary btn-block" type="submit" name="btn_signup_patient">Sign up</button>
          </form>
        </div>
      </div>
      <div class="signup-footer">
        Already have an account? <a href="signin.php">Log in</a>
      </div>
    </div>
    <script src="js/vendor.min.js"></script>
   
  </body>
</html>