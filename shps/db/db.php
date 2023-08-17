<?php
$servername = "localhost";				//variable
$username = "root";						//variable
$password = "";							//variable
$dbname = "smarthealth";			//variable

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
mysqli_query($conn,$sql);

$conn = new mysqli($servername, $username, $password, $dbname); //connect with database

$table = "SELECT * FROM doctor_profile";         //check if table is already created
$checkTable = mysqli_query($conn,$table);
if (!$checkTable) {														
	$createTable = "CREATE TABLE doctor_profile ( doctor_id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name TEXT(15) NOT NULL,
	address TEXT(25) NOT NULL, mobile_no TEXT(15) NOT NULL, specialist TEXT(20) NOT NULL, mail TEXT(20) NOT NULL, password TEXT(20) NOT NULL)";
	mysqli_query($conn,$createTable);				//create doctor_profile table
}

$table = "SELECT * FROM disease";         //check if table is already created
$checkTable = mysqli_query($conn,$table);
if (!$checkTable) {														
	$createTable = "CREATE TABLE disease ( id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, disease_id TEXT(5) NOT NULL, disease_name TEXT(15) NOT NULL,
	symptoms TEXT(50) NOT NULL, types_of_disease TEXT(15) NOT NULL)";
	mysqli_query($conn,$createTable);				//create disease
}

$table = "SELECT * FROM patient";         //check if table is already created
$checkTable = mysqli_query($conn,$table);
if (!$checkTable) {														
	$createTable = "CREATE TABLE patient ( patient_id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name TEXT(15) NOT NULL,
	address TEXT(25) NOT NULL, mobile_no TEXT(15) NOT NULL, username TEXT(20) NOT NULL, password TEXT(20) NOT NULL)";
	mysqli_query($conn,$createTable);				//create patient table
}

$table = "SELECT * FROM feedback";         //check if table is already created
$checkTable = mysqli_query($conn,$table);
if (!$checkTable) {														
	$createTable = "CREATE TABLE feedback ( id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY, name TEXT(15) NOT NULL,
	address TEXT(50) NOT NULL, feedback TEXT(100) NOT NULL)";
	mysqli_query($conn,$createTable);				//create feedback
}


/**********************************insert data***********************************/

$selectTable = "SELECT * FROM doctor_profile";
$result = mysqli_query($conn,$selectTable);
if ($result->num_rows < 1) {
	$sql = "INSERT INTO doctor_profile (name, address, mobile_no, specialist, mail, password)
	 		VALUES ('Farhad', 'Dhaka', '01988-908798', 'Medicine', 'farhad@gmail.com', '992872872')";
	mysqli_query($conn,$sql);

	$sql = "INSERT INTO doctor_profile (name, address, mobile_no, specialist, mail, password)
	 		VALUES ('Ashik', 'Rajshahi', '01721-099999', 'Cardiology', 'ashik23@gmail.com ', '90991')";
	mysqli_query($conn,$sql);

	$sql = "INSERT INTO doctor_profile (name, address, mobile_no, specialist, mail, password)
	 		VALUES ('Alex', 'USA', '01200-098614', 'Neuro Scientiest', 'alexneuro@gmail.com', 'abcdef')";
	mysqli_query($conn,$sql);

}

$selectTable = "SELECT * FROM disease";
$result = mysqli_query($conn,$selectTable);
if ($result->num_rows < 1) {
	$sql = "INSERT INTO disease (disease_id, disease_name, symptoms, types_of_disease)
	 		VALUES ('000GGIOOP0', 'Fever', 'Caugh', 'Fever')";
	mysqli_query($conn,$sql);

	$sql = "INSERT INTO disease (disease_id, disease_name, symptoms, types_of_disease)
	 		VALUES ('00HIJIJDIJ', 'Liver Syrosis', 'Liver Pain, Fever', 'Cancer')";
	mysqli_query($conn,$sql);

	$sql = "INSERT INTO disease (disease_id, disease_name, symptoms, types_of_disease)
	 		VALUES ('9033030JKIJ000', 'Diarrhoea', 'Belly Pain', 'Diarrhoea')";
	mysqli_query($conn,$sql);

}

$selectTable = "SELECT * FROM patient";
$result = mysqli_query($conn,$selectTable);
if ($result->num_rows < 1) {
	$sql = "INSERT INTO patient (name, address, mobile_no, username, password)
	 		VALUES ('Archer', 'Dhaka', '01988-908798', 'archer', '992872872')";
	mysqli_query($conn,$sql);

	$sql = "INSERT INTO patient (name, address, mobile_no, username, password)
	 		VALUES ('Iqbal Mahmud', 'Netrokona', '01988-9088878', 'mahmud', '8887765uh')";
	mysqli_query($conn,$sql);

	$sql = "INSERT INTO patient (name, address, mobile_no, username, password)
	 		VALUES ('Michel', 'USA', '01988-898776', 'michel', '12345')";
	mysqli_query($conn,$sql);

}

$selectTable = "SELECT * FROM feedback";
$result = mysqli_query($conn,$selectTable);
if ($result->num_rows < 1) {
	$sql = "INSERT INTO feedback (name, address, feedback)
	 		VALUES ('Farhad (patient)', 'Dhaka', 'Very good service')";
	mysqli_query($conn,$sql);

	$sql = "INSERT INTO feedback (name, address, feedback)
	 		VALUES ('Alex (doctor)', 'USA', 'Recommended')";
	mysqli_query($conn,$sql);

}

$conn->close();
?>