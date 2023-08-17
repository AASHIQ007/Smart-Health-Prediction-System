<?php include('model/dbConfig.php'); ?>

<?php
    header("Cache-Control: no-store, must-revalidate, max-age=0");
    header("Pragma: no-cache");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

    $user = isset($_COOKIE["cookie_user"]);
    setcookie("user_page", "searchdiesese.php", time()+(86400 * 30), "/", $servername);

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
    <title>Search Diseases</title>
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
    <div style="margin-top: 100px;">
      <div class="row">
                
                 <div id="qs1">
                          <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                              <h4 class="text-center m-y-md">
                                <span><b>Please Select a Symptom</b></span>

                              </h4>
                              <div class="row">
                                <div class="col-sm-12">
                                    <center>
                                       <form class="btn btn-primary">
                                                      <select id="gender"  name="category"  class="custom-select" data-msg-required="Please indicate your gender." style="width: 300px;">
                                                        <option value="" disabled="disabled" selected="selected">Select...</option>
                                                        <option value="Cough">Cough</option>
                                                        <option value="Headache">Headache</option>
                                                        <option value="Tiredness">Tiredness</option>
                                                        <option value="Aches_and_pains">Aches and pains</option>
                                                        <option value="Loss of taste or smell">Loss of taste or smell</option>
                                                        <option value="Diarrhea">Diarrhea</option>
                                                        <option value="Fever">Fever</option>
                                                        <option value="Rashes">Rashes</option>
                                                        <option value="Discomfort">Discomfort</option>
                                                        <option value="Chest Pain">Chest Pain</option>
                                                        <option value="Fullness">Fullness</option>
                                                        <option value="Increase_heart_rate">Increase heart rate</option>
                                                        <option value="Runny_nose">Runny nose</option>
                                                        <option value="Sore_throat">Sore throat</option>
                                                        <option value="Sneezing">Sneezing</option>
                                                        <option value="Mussel_cramps">Mussel cramps</option>
                                                        <option value="Itchy_eyes">Itchy eyes</option>
                                                        <option value="Severe_dysentery">Severe dysentery</option>
                                                      </select>
                                            </form>
                                        <br>
                                        <br>

                                        <div class="form-group">
                                            <button id="btn1" class="btn btn-primary" type="button" style="width:120px;">Next</button>
                                        </div>
                                </div>
                              </div>
                            </div>
                          </div>  
                        </div>  

                 <div id="qs2" style="display:none">    
                          <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                              <h4 class="text-center m-y-md">
                                <span>Are you experienceing any other symptoms?</span>
                              </h4>
                              <div class="row">
                                <div class="col-sm-12">
                                    <center>
                                        <div class="form-group">
                                           <ul style="list-style-type: none; color: white;">
                                               <li>Tiredness</li>
                                               <li>Aches and pains</li>
                                               <li>Loss of taste or smell</li>
                                               <li>Cough</li>
                                               <li>Headache</li>
                                               <li>Diarrhea</li>
                                               <li>Rashes</li>
                                               <li>Sore throat</li>
                                               <li>Runny nose</li>
                                               
                                           </ul>
                                            <form class="btn btn-primary">
                                                      <select id="gender"  name="category"  class="custom-select" data-msg-required="Please indicate your gender." style="width: 300px;">
                                                        <option value="" disabled="disabled" selected="selected">Select...</option>
                                                        <option value="Cough">Cough</option>
                                                        <option value="Headache">Headache</option>
                                                        <option value="Tiredness">Tiredness</option>
                                                        <option value="Aches_and_pains">Aches and pains</option>
                                                        <option value="Loss of taste or smell">Loss of taste or smell</option>
                                                        <option value="Diarrhea">Diarrhea</option>
                                                        <option value="Fever">Fever</option>
                                                        <option value="Rashes">Rashes</option>
                                                        <option value="Discomfort">Discomfort</option>
                                                        <option value="Chest Pain">Chest Pain</option>
                                                        <option value="Fullness">Fullness</option>
                                                        <option value="Increase_heart_rate">Increase heart rate</option>
                                                        <option value="Runny_nose">Runny nose</option>
                                                        <option value="Sore_throat">Sore throat</option>
                                                        <option value="Sneezing">Sneezing</option>
                                                        <option value="Mussel_cramps">Mussel cramps</option>
                                                        <option value="Itchy_eyes">Itchy eyes</option>
                                                        <option value="Severe_dysentery">Severe dysentery</option>
                                                      </select>
                                            </form>
                                        </div>
                                        <div class="form-group">
                                            <button id="btn2" class="btn btn-primary" type="button" style="width:120px;">Next</button>
                                            <button id="btn" class="btn btn-primary" type="button" style="width:300px;">No, I don't have any other symptoms</button>
                                        </div>
                                    </center>
                                </div>
                              </div>
                             </div>
                            </div>
   </div>

                 <div id="qs3" style="display:none">
                          <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                              <h4 class="text-center m-y-md">
                                <span>Are you experienceing any other symptoms?</span>
                              </h4>
                              <div class="row">
                                <div class="col-sm-12">
                                      <center>
                                        <div class="form-group">
                                           <ul style="list-style-type: none; color: white;">
                                               <li>Tiredness</li>
                                               <li>Aches and pains</li>
                                               <li>Loss of taste or smell</li>
                                               <li>Cough</li>
                                               <li>Diarrhea</li>
                                               <li>Rashes</li>
                                               <li>Sore throat</li>
                                               <li>Runny nose</li>
                                           </ul>
                                            <form class="btn btn-primary">
                                                      <select id="gender"  name="category"  class="custom-select" data-msg-required="Please indicate your gender." style="width: 300px;">
                                                        <option value="" disabled="disabled" selected="selected">Select...</option>
                                                         <option value="Cough">Cough</option>
                                                        <option value="Headache">Headache</option>
                                                        <option value="Tiredness">Tiredness</option>
                                                        <option value="Aches_and_pains">Aches and pains</option>
                                                        <option value="Loss of taste or smell">Loss of taste or smell</option>
                                                        <option value="Diarrhea">Diarrhea</option>
                                                        <option value="Fever">Fever</option>
                                                        <option value="Rashes">Rashes</option>
                                                        <option value="Discomfort">Discomfort</option>
                                                        <option value="Chest Pain">Chest Pain</option>
                                                        <option value="Fullness">Fullness</option>
                                                        <option value="Increase_heart_rate">Increase heart rate</option>
                                                        <option value="Runny_nose">Runny nose</option>
                                                        <option value="Sore_throat">Sore throat</option>
                                                        <option value="Sneezing">Sneezing</option>
                                                        <option value="Mussel_cramps">Mussel cramps</option>
                                                        <option value="Itchy_eyes">Itchy eyes</option>
                                                        <option value="Severe_dysentery">Severe dysentery</option>
                                                      </select>
                                            </form>
                                        </div>
                                        <div class="form-group">
                                            <button id="btn3" class="btn btn-primary" type="button" style="width:120px;">Next</button>
                                            <button id="btn13" class="btn btn-primary" type="button" style="width:300px;">No, I don't have any other symptoms</button>
                                        </div>
                                    </center>
                                </div>
                              </div>
                            </div>
                          </div>
      </div>

                 <div id="qs4" style="display:none">
                          <div class="tab-content">  
                            <div id="tab-1" class="tab-pane active">
                             <h4 class="text-center m-y-md">
                                <span>Are you experienceing any other symptoms?</span>
                              </h4>
                              <div class="row">
                                <div class="col-sm-12">
                                    <center>
                                        <div class="form-group">
                                           <ul style="list-style-type: none; color: white;">
                                                <li>Tiredness</li>
                                               <li>Aches and pains</li>
                                               <li>Loss of taste or smell</li>  
                                               <li>Diarrhea</li>
                                               <li>Sore throat</li>
                                               <li>Runny nose</li>
                                               
                                           </ul>
                                            <form class="btn btn-primary">
                                                      <select id="gender"  name="category"  class="custom-select" data-msg-required="Please indicate your gender." style="width: 300px;">
                                                        <option value="" disabled="disabled" selected="selected">Select...</option>
                                                         <option value="Cough">Cough</option>
                                                        <option value="Headache">Headache</option>
                                                        <option value="Tiredness">Tiredness</option>
                                                        <option value="Aches_and_pains">Aches and pains</option>
                                                        <option value="Loss of taste or smell">Loss of taste or smell</option>
                                                        <option value="Diarrhea">Diarrhea</option>
                                                        <option value="Fever">Fever</option>
                                                        <option value="Rashes">Rashes</option>
                                                        <option value="Discomfort">Discomfort</option>
                                                        <option value="Chest Pain">Chest Pain</option>
                                                        <option value="Fullness">Fullness</option>
                                                        <option value="Increase_heart_rate">Increase heart rate</option>
                                                        <option value="Runny_nose">Runny nose</option>
                                                        <option value="Sore_throat">Sore throat</option>
                                                        <option value="Sneezing">Sneezing</option>
                                                        <option value="Mussel_cramps">Mussel cramps</option>
                                                        <option value="Itchy_eyes">Itchy eyes</option>
                                                        <option value="Severe_dysentery">Severe dysentery</option>
                                                      </select>
                                            </form>
                                        </div>
                                        <div class="form-group">
                                            <button id="btn4" class="btn btn-primary" type="button" style="width:120px;">Next</button>
                                            <button id="btn11" class="btn btn-primary" type="button" style="width:300px;">No, I don't have any other symptoms</button>
                                        </div>
                                    </center>
                                </div>
                              </div>
                            </div>
                          </div>
      </div>         

                 <div id="qs5" style="display:none">
                          <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                              <h4 class="text-center m-y-md">
                                <span>Are you experienceing any other symptoms?</span>
                              </h4>
                              <div class="row">
                                <div class="col-sm-12">
                                    <center>
                                        <div class="form-group">
                                           <ul style="list-style-type: none; color: white;">
                                                <li>Tiredness</li>
                                               <li>Aches and pains</li>
                                               <li>Sore throat</li>
                                               <li>Diarrhea</li>
                                           </ul>
                                            <form class="btn btn-primary">
                                                      <select id="gender"  name="category"  class="custom-select" data-msg-required="Please indicate your gender." style="width: 300px;">
                                                        <option value="" disabled="disabled" selected="selected">Select...</option>
                                                         <option value="Cough">Cough</option>
                                                        <option value="Headache">Headache</option>
                                                        <option value="Tiredness">Tiredness</option>
                                                        <option value="Aches_and_pains">Aches and pains</option>
                                                        <option value="Loss of taste or smell">Loss of taste or smell</option>
                                                        <option value="Diarrhea">Diarrhea</option>
                                                        <option value="Fever">Fever</option>
                                                        <option value="Rashes">Rashes</option>
                                                        <option value="Discomfort">Discomfort</option>
                                                        <option value="Chest Pain">Chest Pain</option>
                                                        <option value="Fullness">Fullness</option>
                                                        <option value="Increase_heart_rate">Increase heart rate</option>
                                                        <option value="Runny_nose">Runny nose</option>
                                                        <option value="Sore_throat">Sore throat</option>
                                                        <option value="Sneezing">Sneezing</option>
                                                        <option value="Mussel_cramps">Mussel cramps</option>
                                                        <option value="Itchy_eyes">Itchy eyes</option>
                                                        <option value="Severe_dysentery">Severe dysentery</option>
                                                      </select>
                                            </form>
                                        </div>
                                        <div class="form-group">
                                            <button id="btn5" class="btn btn-primary" type="button" style="width:120px;">Next</button>
                                            <button id="btn14" class="btn btn-primary" type="button" style="width:300px;">No, I don't have any other symptoms</button>
                                        </div>
                                    </center>
                                </div>
                              </div>
                            </div>
                           </div>
   </div>     

                 <div id="qs6" style="display:none">
                          <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                              <h4 class="text-center m-y-md">
                                <span>Are you experienceing any other symptoms?</span>
                              </h4>
                              <div class="row">
                                <div class="col-sm-12">
                                    <center>
                                        <div class="form-group">
                                           <ul style="list-style-type: none; color: white;">
                                               <li>Tiredness</li>
                                               <li>Aches and pains</li>
                                           </ul>
                                            <form class="btn btn-primary">
                                                      <select id="gender"  name="category"  class="custom-select" data-msg-required="Please indicate your gender." style="width: 300px;">
                                                        <option value="" disabled="disabled" selected="selected">Select...</option>
                                                       <option value="Cough">Cough</option>
                                                        <option value="Headache">Headache</option>
                                                        <option value="Tiredness">Tiredness</option>
                                                        <option value="Aches_and_pains">Aches and pains</option>
                                                        <option value="Loss of taste or smell">Loss of taste or smell</option>
                                                        <option value="Diarrhea">Diarrhea</option>
                                                        <option value="Fever">Fever</option>
                                                        <option value="Rashes">Rashes</option>
                                                        <option value="Discomfort">Discomfort</option>
                                                        <option value="Chest Pain">Chest Pain</option>
                                                        <option value="Fullness">Fullness</option>
                                                        <option value="Increase_heart_rate">Increase heart rate</option>
                                                        <option value="Runny_nose">Runny nose</option>
                                                        <option value="Sore_throat">Sore throat</option>
                                                        <option value="Sneezing">Sneezing</option>
                                                        <option value="Mussel_cramps">Mussel cramps</option>
                                                        <option value="Itchy_eyes">Itchy eyes</option>
                                                        <option value="Severe_dysentery">Severe dysentery</option>
                                                      </select>
                                            </form>
                                        </div>
                                        <div class="form-group">
                                            <button id="btn6" class="btn btn-primary" type="button" style="width:120px;">Next</button>
                                            <button id="btn15" class="btn btn-primary" type="button" style="width:300px;">No, I don't have any other symptoms</button>
                                        </div>
                                    </center>
                                </div>
                              </div>
                            </div>
                          </div>
   </div>  
                     
                <div id="qs7" style="display:none">    
                  <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                      <h4 class="text-center m-y-md">
                                <span>Are you experienceing any other symptoms?</span>
                              </h4>
                              <div class="row">
                                <div class="col-sm-12">
                                    <center>
                                        <div class="form-group">
                                           <ul style="list-style-type: none; color: white;">
                                               <li>Tiredness</li>  
                                           </ul>
                                            <form class="btn btn-primary">
                                                      <select id="gender"  name="category"  class="custom-select" data-msg-required="Please indicate your gender." style="width: 300px;">
                                                        <option value="" disabled="disabled" selected="selected">Select...</option>
                                                        <option value="Cough">Cough</option>
                                                        <option value="Headache">Headache</option>
                                                        <option value="Tiredness">Tiredness</option>
                                                        <option value="Aches_and_pains">Aches and pains</option>
                                                        <option value="Loss of taste or smell">Loss of taste or smell</option>
                                                        <option value="Diarrhea">Diarrhea</option>
                                                        <option value="Fever">Fever</option>
                                                        <option value="Rashes">Rashes</option>
                                                        <option value="Discomfort">Discomfort</option>
                                                        <option value="Chest Pain">Chest Pain</option>
                                                        <option value="Fullness">Fullness</option>
                                                        <option value="Increase_heart_rate">Increase heart rate</option>
                                                        <option value="Runny_nose">Runny nose</option>
                                                        <option value="Sore_throat">Sore throat</option>
                                                        <option value="Sneezing">Sneezing</option>
                                                        <option value="Mussel_cramps">Mussel cramps</option>
                                                        <option value="Itchy_eyes">Itchy eyes</option>
                                                        <option value="Severe_dysentery">Severe dysentery</option>
                                                      </select>
                                            </form>
                                        </div>
                                        <div class="form-group">
                                            <button id="btn17" class="btn btn-primary" type="button" style="width:120px;">Next</button>
                                            <button id="btn12" class="btn btn-primary" type="button" style="width:300px;">No, I don't have any other symptoms</button>
                                        </div>
                                    </center>
                        </div>
                      </div>
                    </div>
                   </div>
                    </div>
                    
                <div id="qs8" style="display:none">  
                  <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                       <h4 class="text-center m-y-md">
                                <span>Are you experienceing any other symptoms?</span>
                              </h4>
                              <div class="row">
                                <div class="col-sm-12">
                                    <center>
                                        <div class="form-group">
                                           <ul style="list-style-type: none; color: white;">
                                               <li>Tiredness</li>
                                               <li>Aches and pains</li>
                                               <li>Loss of taste or smell</li>
                                               <li>Cough</li>
                                               <li>Diarrhea</li>
                                               <li>Rashes</li>
                                               <li>Sore throat</li>
                                               <li>Runny nose</li>
                                           </ul>
                                            <form class="btn btn-primary">
                                                      <select id="gender"  name="category"  class="custom-select" data-msg-required="Please indicate your gender." style="width: 300px;">
                                                        <option value="" disabled="disabled" selected="selected">Select...</option>
                                                        <option value="Cough">Cough</option>
                                                        <option value="Headache">Headache</option>
                                                        <option value="Tiredness">Tiredness</option>
                                                        <option value="Aches_and_pains">Aches and pains</option>
                                                        <option value="Loss of taste or smell">Loss of taste or smell</option>
                                                        <option value="Diarrhea">Diarrhea</option>
                                                        <option value="Fever">Fever</option>
                                                        <option value="Rashes">Rashes</option>
                                                        <option value="Discomfort">Discomfort</option>
                                                        <option value="Chest Pain">Chest Pain</option>
                                                        <option value="Fullness">Fullness</option>
                                                        <option value="Increase_heart_rate">Increase heart rate</option>
                                                        <option value="Runny_nose">Runny nose</option>
                                                        <option value="Sore_throat">Sore throat</option>
                                                        <option value="Sneezing">Sneezing</option>
                                                        <option value="Mussel_cramps">Mussel cramps</option>
                                                        <option value="Itchy_eyes">Itchy eyes</option>
                                                        <option value="Severe_dysentery">Severe dysentery</option>
                                                      </select>
                                            </form>
                                        </div>
                                        <div class="form-group">
                                            <button id="btn7" class="btn btn-primary" type="button" style="width:120px;">Next</button>
                                            <button id="btn16" class="btn btn-primary" type="button" style="width:300px;">No, I don't have any other symptoms</button>
                                        </div>
                                    </center>
                        </div>
                      </div>
                    </div>
                   </div> 
                    </div>
                
                <div id="qs9" style="display:none">
                  <div class="tab-content Cough box">
                    <div id="tab-1" class="tab-pane active">
                      <h4 class="text-center m-y-md">
                        <span>The Symptoms you entered shows that you might have: </span>
                        <h3 class="text-center" style="color: white;">Flu</h3>
                      </h4>
                      <div class="row">
                     <div class="col-sm-12">
                            <center>
                            <h3>Suggested Doctor</h3>
                            <table class="table table-dark" style="width: 500px;">
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
                                  <th scope="row">1001</th>
                                  <td>Suresh</td>
                                  <td>city A</td>
                                  <td>Fever</td>
                                  <td>9876543210</td>
                                </tr>
                              </tbody>
                            </table> 
                            </center>
                        </div>
                      </div>
                    </div>
                   </div>
                    </div>
                
                <div id="qs10" style="display:none">
                     
                  <div class="tab-content Cough box">
                    <div id="tab-1" class="tab-pane active">
                      <h4 class="text-center m-y-md">
                        <span>The Symptoms you entered shows that you might have: </span>
                        <h3 class="text-center" style="color: white;">Dengue</h3>
                      </h4>
                      <div class="row">
                     <div class="col-sm-12">
                            <center>
                            <h3>Suggested Doctor</h3>
                            <table class="table table-dark" style="width: 500px;">
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
                                  <th scope="row">1003</th>
                                  <td>Rahul</td>
                                  <td>city C</td>
                                  <td>cardiologist</td>
                                  <td>8123456790</td>
                                </tr>
                              </tbody>
                               <tbody>
                                <tr>
                                  <th scope="row">1002</th>
                                  <td>Lavanya</td>
                                  <td>city B</td>
                                  <td>Neurologist</td>
                                  <td>9123456789</td>
                                </tr>
                              </tbody>
                            </table> 
                            </center>
                        </div>
                      </div>
                    </div>
                   </div>
                  </div>
                
                <div id="qs11" style="display:none">
                     
            <div class="tab-content Cough box">
                    <div id="tab-1" class="tab-pane active">
                      <h4 class="text-center m-y-md">
                        <span>The Symptoms you entered shows that you might have: </span>
                        <h3 class="text-center" style="color: white;">Corona</h3>
                      </h4>
                      <div class="row">
                     <div class="col-sm-12">
                            <center>
                            <h3>Suggested Doctor</h3>
                            <table class="table table-dark" style="width: 500px;">
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
                                  <th scope="row">1004</th>
                                  <td>Gowtham</td>
                                  <td>city D</td>
                                  <td>All</td>
                                  <td>7190234215</td>
                                </tr>
                              </tbody>
                            </table> 
                            </center>
                        </div>
                      </div>
                    </div>
                   </div>
                  </div>
            </div>
          </div>
         
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script>
          $(document).ready(function(){
             
        $("#btn1").click(function(){
        $("#qs2").show();
      });
      
        $("#btn1").click(function(){
        $("#qs1").hide();
      });
              
      
        $("#btn2").click(function(){
        $("#qs3").show();
      });
      
        $("#btn2").click(function(){
        $("#qs2").hide();
      });
      
        $("#btn3").click(function(){
        $("#qs4").show();
      });
      
        $("#btn3").click(function(){
        $("#qs3").hide();
      });
          
        $("#btn4").click(function(){
        $("#qs5").show();
      });
        
        $("#btn4").click(function(){
        $("#qs4").hide();
      });
          
            
        $("#btn5").click(function(){
        $("#qs6").show();
      });
            
              
        $("#btn5").click(function(){
        $("#qs5").hide();
      });
          
        $("#btn6").click(function(){
        $("#qs7").show();
      });
            
              
        $("#btn6").click(function(){
        $("#qs6").hide();
      });
          
            
        $("#btn7").click(function(){
        $("#qs7").hide();
      });
          
        $("#btn7").click(function(){
        $("#qs8").show();
      });
           
            
        $("#btn8").click(function(){
        $("#qs8").hide();
      });
          
        $("#btn8").click(function(){
        $("#qs9").show();
      });
        $("#btn9").click(function(){
        $("#qs9").hide();
      });
           
        $("#btn9").click(function(){
        $("#qs10").show();
      });
        
        $("#btn").click(function(){
        $("#qs9").show();
      });
        
        $("#btn13").click(function(){
        $("#qs9").show();
      }); 
        
         $("#btn14").click(function(){
        $("#qs9").show();
      });
        
        $("#btn15").click(function(){
        $("#qs9").show();
      }); 
              
        $("#btn11").click(function(){
        $("#qs10").show();
      });
         
        $("#btn12").click(function(){
        $("#qs11").show();
      });
              
        $("#btn16").click(function(){
        $("#qs11").show();
      });
        
         $("#btn17").click(function(){
        $("#qs11").show();
      });
          });
            
      </script>
    
    <script src="js/vendor.min.js"></script>
    <script src="js/elephant.min.js"></script>
    <script src="js/landing-page.min.js"></script>
   
  </body>     
</html>