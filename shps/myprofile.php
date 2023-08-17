<?php include('model/dbConfig.php'); ?>

<?php
    header("Cache-Control: no-store, must-revalidate, max-age=0");
    header("Pragma: no-cache");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

    $user = isset($_COOKIE["cookie_user"]);
    setcookie("user_page", "myprofile.php", time()+(86400 * 30), "/", $servername);

    if (!$user) {
      if ($user != "patient") {
        header("Location:signin.php");
      }
    }
    $row;
    if(isset($_COOKIE['cookie_id'])){
      $id = $_COOKIE['cookie_id'];
      $sql = "SELECT * FROM patient WHERE patient_id = $id";
      $result = mysqli_query($conn, $sql);
      $row = $result->fetch_assoc();
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Patient Profile</title>
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
          <a class="navbar-brand" href="myprofile.php">
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
      <div class="container" style="background-color:#ffcccc">
         
          <center><h4>Patient Information</h4></center>
            <form >
              <div class="form-group">
                <label for="formGroupExampleInput">Patient ID</label>
                <div class="form-control" id="formGroupExampleInput"><?php echo $row["patient_id"]; ?></div>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Name</label>
                <div class="form-control" id="formGroupExampleInput"><?php echo $row["name"]; ?></div>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Address</label>
                <div class="form-control" id="formGroupExampleInput"><?php echo $row["address"]; ?></div>
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Mobile No</label>
                <div class="form-control" id="formGroupExampleInput"><?php echo $row["mobile_no"]; ?></div>
              </div>
            
            </form>
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