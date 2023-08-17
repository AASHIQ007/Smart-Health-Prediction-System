<?php include('model/dbConfig.php'); ?>
<?php
  header("Cache-Control: no-store, must-revalidate, max-age=0");
  header("Pragma: no-cache");
  header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
  $admin = isset($_COOKIE["admin_log"]);
  setcookie("page", "adddoctor.php", time()+(86400 * 30), "/", $servername);

  if (!$admin) {
    header("Location:admin.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Doctor</title>
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
          <a class="navbar-brand" href="admin.php">
            <center><h4>ADMIN</h4></center>
          </a>
        </div>
        <nav id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="adddoctor.php">Add Doctor</a></li>
            <li><a href="adddiease.php">Add Disease</a></li>
            <li><a href="adminviewdoctor.php">View Doctor</a></li>
            <li><a href="adminviewpatient.php">View Patient</a></li>
             <li><a href="adminviewdisease.php">View Diease</a></li>
              <li><a href="adminviewfeedback.php">View Feedback</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </nav>
      </div>
    </div>
      <div class="container" style="background-color:#ffcccc; margin-top: 80px;">
         
          <center><h4>Add Doctor</h4></center>
            <form action="db/action.php" method="post">
              <div class="form-group">
                <label for="formGroupExampleInput">Doctor ID</label>
                <input type="text" name="doctor_id" class="form-control" id="formGroupExampleInput" placeholder="Doctor ID">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput2">Doctor Name</label>
                <input type="text" name="doctor_name" class="form-control" id="formGroupExampleInput2" placeholder="Doctor Name">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Address</label>
                <input type="text" name="address" class="form-control" id="formGroupExampleInput" placeholder="Address">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Mobile No</label>
                <input type="text" name="mobile_no" class="form-control" id="formGroupExampleInput" placeholder="Mobile No">
              </div>
         
               <div class="row gutter-xs">
              <div class="col-xs-12">
                <div class="form-group">
                  <label for="gender">Category</label>
                  <select id="gender"  name="category"  class="custom-select" data-msg-required="Please indicate your gender." required>
                    <option value="" disabled="disabled" selected="selected">Select...</option>
                    <option value="Medicine">Medicine</option>
                    <option value="surgery">surgery</option>
                    <option value="MBBS">MBBS</option>
                  </select>
                </div>
              </div>
            </div>
             <div class="form-group">
                <label for="formGroupExampleInput">Email Address</label>
                <input type="text" name="username" class="form-control" id="formGroupExampleInput" placeholder="Email Address">
              </div>
            
            <div class="form-group">
                <label for="formGroupExampleInput">Password</label>
                  <input type="password" name="password" class="form-control" id="formGroupExampleInput" placeholder="Password">
              </div>
             <button class="btn btn-info btn-block" name="btn_add_doctor" type="submit" style="margin-bottom: 10px;">ADD</button>
            </form>
       </div>
           <div class="section">
               
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