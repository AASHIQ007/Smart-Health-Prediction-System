<?php
$servername = "localhost";      //variable
$username = "root";         //variable
$password = "";           //variable
$dbname = "smarthealth";   //variable
$conn = new mysqli($servername, $username, $password, $dbname); //connect with database
?>

<?php
   $admin = isset($_COOKIE["admin_log"]);

   if(isset($_POST['btnsignin_doctor'])) {
      $email = $_POST["txtEmail"];
      $pass = $_POST["txtPassword"];
      $page = isset($_COOKIE["user_page"]);

      if (!$page) {
         $page = "Location:../doctorprofile.php";
      }
      else {
         $page = $_COOKIE["user_page"];
         $page = "Location:../" . $_COOKIE["user_page"];
      }

      $sql = "SELECT * FROM doctor_profile WHERE mail = '$email' AND password = '$pass'";
      $result = mysqli_query($conn, $sql);

      if($result->num_rows > 0) {
         $row = $result->fetch_assoc();
         $id = $row["doctor_id"];
         setcookie("cookie_user", "doctor", time()+(86400 * 30), "/", $servername);
         setcookie("cookie_id", $id, time()+(86400 * 30), "/", $servername);
         header($page);
      }
      else {
         setcookie("loginfailed", "Y", time()+(86400 * 30), "/", $servername);
         header("Location:../doctorsignin.php");
      }
   }

   else if(isset($_POST['btnsignin'])) {
      $user_name = $_POST["user_name"];
      $password = $_POST["password"];
      $page = isset($_COOKIE["user_page"]);

      if (!$page) {
         $page = "Location:../myprofile.php";
      }
      else {
         $page = $_COOKIE["user_page"];
         $page = "Location:../" . $_COOKIE["user_page"];
      }

      $sql = "SELECT * FROM patient WHERE username = '$user_name' AND password = '$password'";
      $result = mysqli_query($conn, $sql);

      if($result->num_rows > 0) {
         $row = $result->fetch_assoc();
         $id = $row["patient_id"];
         setcookie("cookie_user", "patient", time()+(86400 * 30), "/", $servername);
         setcookie("cookie_id", $id, time()+(86400 * 30), "/", $servername);
         header($page);
      }
      else {
         setcookie("loginfailed", "Y", time()+(86400 * 30), "/", $servername);
         header("Location:../signin.php");
      }
   }

   else if(isset($_POST['btn_add_doctor']) && $admin) {
      $doctor_id = $_POST["doctor_id"];
      $doctor_name = $_POST["doctor_name"];
      $address = $_POST["address"];
      $mobile_no = $_POST["mobile_no"];
      $category = $_POST["category"];

      $sql = "INSERT INTO doctor_profile (name, address, mobile_no, specialist, mail, password)
         VALUES ( '$doctor_name', '$address', '$mobile_no', '$category', '', '')";
      mysqli_query($conn,$sql);
      session_destroy();  
      header("Location:../adddoctor.php");
   }

   else if(isset($_POST['btn_adddisease'])) {
      $disease_id = $_POST["disease_id"];
      $disease_name = $_POST["disease_name"];
      $symptoms = $_POST["symptoms"];
      $types_of_disease = $_POST["types_of_disease"];

      $sql = "INSERT INTO disease (disease_id, disease_name, symptoms, types_of_disease)
         VALUES ('$disease_id', '$disease_name', '$symptoms', '$types_of_disease')";
      mysqli_query($conn,$sql);

      header("Location:../adddiease.php");
   }

   else if(isset($_POST['btnsignin_admin'])) {
      $user_name = $_POST["user_name"];
      $password = $_POST["password"];
      $page = isset($_COOKIE["page"]);
      if (!$page) {
         $page = "Location:../adddoctor.php";
      }
      else {
         $page = $_COOKIE["page"];
         $page = "Location:../" . $_COOKIE["page"];
      }

      if ($user_name == "admin" && $password == "admin") {
         setcookie("admin_log", "Yes", time()+(86400 * 30), "/", $servername);
         header($page);
      }
      else {
         setcookie("loginfailed", "Y", time()+(86400 * 30), "/", $servername);
         header("Location:../admin.php");
      }
   }

   elseif (isset($_POST['btn_doctor_feedback'])) {
      $doctor_id = $_COOKIE["cookie_id"];

      $sql = "SELECT * FROM doctor_profile WHERE doctor_id = '$doctor_id'";
      $result = mysqli_query($conn, $sql);
      $row = $result->fetch_assoc();

      $name = $row["name"] . "(doctor)";
      $address = $row["address"];
      $doctor_feedback = $_POST["doctor_feedback"];

      $sql = "INSERT INTO feedback (name, address, feedback) VALUES ('$name', '$address', '$doctor_feedback')";
      mysqli_query($conn,$sql);

      header("Location:../doctorfeedback.php");
   }

   elseif (isset($_POST['btn_signup_patient'])) {
      $name = $_POST["name_signup"];
      $address = $_POST["address_signup"];
      $mobile = $_POST["mobile_signup"];
      $username = $_POST["username_signup"];
      $password = $_POST["password_signup"];

      $sql = "INSERT INTO patient (name, address, mobile_no, username, password) VALUES ('$name', '$address', 
      '$mobile', '$username', '$password')";
      mysqli_query($conn,$sql);

      $sql = "SELECT * FROM patient WHERE username = '$username' AND password = '$password'";
      $result = mysqli_query($conn, $sql);

      if($result->num_rows > 0) {
         $row = $result->fetch_assoc();
         $id = $row["patient_id"];
         $page = "Location:../myprofile.php";
         setcookie("cookie_user", "patient", time()+(86400 * 30), "/", $servername);
         setcookie("cookie_id", $id, time()+(86400 * 30), "/", $servername);
         header($page);
      }
   }
?>