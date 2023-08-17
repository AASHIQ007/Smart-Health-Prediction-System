<?php include('model/dbConfig.php'); ?>

<?php
    header("Cache-Control: no-store, must-revalidate, max-age=0");
    header("Pragma: no-cache");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

    $user = isset($_COOKIE["cookie_user"]);
    setcookie("user_page", "searchdoctor.php", time()+(86400 * 30), "/", $servername);

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
    <title>serach doctor</title>
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
   
    <div class="signup">
      <div class="signup-body">
        <div class="signup-divider">
          <div class="divider">
            <div class="divider-content" class="btn btn-block">Search Doctor</div>
          </div>
        </div>
        <div id="qs1" class="signup-form">
          <form method="post" action="#" enctype="multipart/form-data" >  
           
            <div class="row gutter-xs">
              <div class="col-xs-12">
                <div class="form-group">
                  <label for="gender">Search By</label>
                  <select id="gender"  name="ddlgender"  class="custom-select" data-msg-required="Please indicate your gender." required>
                    <option value="" disabled="disabled" selected="selected">Select...</option>
                    <option value="1">Category</option>
                    <option value="2">Name</option>
                    <option value="3">Not specified</option>
                  </select>
                </div>
              </div>
            </div>
            
            <div class="row gutter-xs">
              <div class="col-xs-12">
                <div class="form-group">
                  <label for="gender">Enter Search Value</label>
                  <form class="form-inline d-flex justify-content-center md-form form-sm active-pink active-pink-2 mt-2">
              <i class="fas fa-search" aria-hidden="true"></i>
              <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search"
                aria-label="Search">
            </form>
                </div>
              </div>
            </div>

            <button id="btn1" class="btn btn-primary btn-block" name="btnSignup" type="submit">Search</button>
           
          </form>
          
        </div>
      </div>
      <div id="qs2" style="display:none">
      <center>
        <h3>Search Results</h3>
      </center>
        <table class="table table-dark">
          <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Adress</th>
              <th scope="col">Specialist</th>
              <th scope="col">Mobile No.</th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Suresh</td>
              <td>city A</td>
              <td>Fever</td>
              <td>9876543210</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Lavanya</td>
              <td>city B</td>
              <td>Neurologist</td>
              <td>8123456790</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Rahul</td>
              <td>city C</td>
              <td>cardiologist</td>
              <td>9123456789</td>
            </tr>
          </tbody>
        </table>
            </div>
            </div>
            <script src="js/vendor.min.js"></script>
            <script src="js/elephant.min.js"></script>
    

        
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     
     <script>
          $(document).ready(function(){
             
        $("#btn1").click(function(){
        $("#qs2").show();
      });
      
        
     
    });
         </script>
    
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/landing-page.min.js"></script>
   
  </body>
</html>