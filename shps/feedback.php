<?php include('model/dbConfig.php'); ?>

<?php
    header("Cache-Control: no-store, must-revalidate, max-age=0");
    header("Pragma: no-cache");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

    $user = isset($_COOKIE["cookie_user"]);
    setcookie("user_page", "feedback.php", time()+(86400 * 30), "/", $servername);

    if (!$user) {
      if ($user != "patient") {
        header("Location:signin.php");
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>feedback</title>
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
    <link rel="stylesheet" href="css/landing-page.min.css">
    <link rel="stylesheet" href="css/signup-2.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="spinner spinner-primary spinner-lg">
    <div class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">
            <center><h4>Patient</h4></center>
          </a>
        </div>
        <nav id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
             <li><a href="myprofile.php">My Profile </a></li>
            <li><a href="searchdiesese.php">Search Disease</a></li>
            <li><a href="searchdoctor.php">Search Doctor</a></li>
            <li><a href="feedback.php">Feedback</a></li>
            <li><a href="logoutpatient.php">Logout</a></li>
          </ul>
        </nav>
      </div>
    </div>
   
         <body>
    <div class="signup">
      <div class="signup-body">
        <div class="signup-divider">
          <div class="divider">
            <div class="divider-content" class="btn btn-block">Feedback</div>
          </div>
        </div>
        <div class="signup-form">
          <form method="post" action="#" enctype="multipart/form-data" >  
           
            
           
            <div class="row">
              <div class="col-sm-12">
                <div class="md-form-group md-label-floating">
                  <textarea class="md-form-control" type="comment" name="comment" spellcheck="false" autocomplete="off" row="5"data-msg-required="Please enter your email address." required></textarea>
                  <label class="md-control-label">Feedback</label>
                </div>
              </div>
            </div>
            
           
            <button class="btn btn-primary btn-block" name="btnSignup" type="submit">submit</button>
           
          </form>
          
        </div>
      </div>
      
            </div>
            <script src="js/vendor.min.js"></script>
            <script src="js/elephant.min.js"></script>
    
  </body>
        
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     
    
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/landing-page.min.js"></script>
   
  </body>
</html>