<?php include('db/db.php'); ?>
<?php include('model/dbConfig.php'); ?>
<?php setcookie("loginfailed", "", time()+(86400 * 30), "/", $servername); ?>

<?php
    header("Cache-Control: no-store, must-revalidate, max-age=0");
    header("Pragma: no-cache");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

    $user = isset($_COOKIE["cookie_user"]);

  if ($user) {
    $page = "Location:" . $_COOKIE["user_page"];
    header($page);
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Smart Health</title>
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
    <link rel="stylesheet" href="css/style.css">
  </head>
<body class="spinner spinner-primary spinner-lg">
    <div class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">
           <h4>SHP</h4>
          </a>
        </div>
        <nav id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <div class="navbar-btn-group">
                <a class="navbar-btn btn btn-primary btn-block" href="signup.php">Sign up</a>
              </div>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <div class="masthead">
      <div class="masthead-inner">
        <div class="container">
          <div class="row">
          <div class="col-xs-12" data-animation-name="fadeIn" data-animation-delay="0.1s">
            <h2>Smart Health Prediction</h2> 
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-6 " data-animation-name="fadeIn" data-animation-delay="02s">
                <a href="doctorsignin.php"><img width="170" height="170" src="img/doctorsign.jpg" alt="Bootstrap">
                <h4>DOCTOR</h4>
                <p>
                  <small>Doctor Login.</small>
                </p></a>
              </div>
              <div class="divider divider-vertical">
                <div class="divider-content">
                  <strong class="fz-lg">+</strong>
                </div>
              </div>
              <div class="col-sm-6" data-animation-name="fadeIn" data-animation-delay="03s">
                <a href="signin.php"><img width="170" height="170" src="img/patient.jpg" alt="Plugins">
                <h4>Patient</h4>
                <p>
                  <small>Patient Login.</small>
                </p></a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
   
    
     <footer id="footer">
       <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 footer-info">
                    <h3><a href="index.html">Smart Health <span>Prediction</span></a></h3> 
                    <p>This project can be used for the data mining techniques such as medical field, research
                    field, and educational field and various aspects. </p>
                </div>

            </div>
        </div>
    </div>
    
        
    </footer>
    </div>
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/landing-page.min.js"></script>
    <script>
      (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-83990101-1', 'auto');
      ga('send', 'pageview');
    </script>
  </body>
</html>