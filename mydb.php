<?php
   session_start();
   $conn = mysqli_connect('localhost','root','','test');

    //fetching from session
    $firstname = mysqli_real_escape_string($conn, $_SESSION['firstname']);
    $lastname = mysqli_real_escape_string($conn, $_SESSION['lastname']);
    $mailid= mysqli_real_escape_string($conn, $_SESSION['mailid']);
    $password = mysqli_real_escape_string($conn, $_SESSION['password']);
    $birthday = mysqli_real_escape_string($conn, $_SESSION['birthday']);
    $number= mysqli_real_escape_string($conn, $_SESSION['number']);
    $gender = mysqli_real_escape_string($conn, $_SESSION['gender']);
    $address = mysqli_real_escape_string($conn, $_SESSION['address']);
    $country= mysqli_real_escape_string($conn, $_SESSION['country']);
    $state = mysqli_real_escape_string($conn, $_SESSION['state']);
    $city= mysqli_real_escape_string($conn, $_SESSION['city']);
    $pincode = mysqli_real_escape_string($conn, $_SESSION['pincode']);
    //fetching from form
    $schoolname = mysqli_real_escape_string($conn, $_REQUEST['schoolname']);
    $SSLCmark = mysqli_real_escape_string($conn, $_REQUEST['SSLCmark']);
    $HSCmark= mysqli_real_escape_string($conn, $_REQUEST['HSCmark']);
    $degree = mysqli_real_escape_string($conn, $_REQUEST['degree']);
    $dept = mysqli_real_escape_string($conn, $_REQUEST['dept']);
    echo $number;




	// Database connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	  }
	   else {
		$sql = "INSERT INTO client1 (firstname, lastname, mailid, password,birthday,number,gender,address,country,state,city,pincode,schoolname,SSLCmark,HSCmark,degree,dept)VALUES('$firstname','$lastname','$mailid','$password','$birthday','$number','$gender','$address','$country','$state','$city','$pincode','$schoolname','$SSLCmark','$HSCmark','$degree','$dept')";

	}
    
	if (mysqli_query($conn,$sql)) {

	  } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	  }
	  
	  mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educational Details</title>
    <!--linkn css file-->
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="whole">
        <h1 class="heading">Educational Details</h1>
        <div>
            <div class="form-box2">
                <div class='input-group-register'>
                <h1 id="text">Data entry successful!!</h1>
                </div>
            </div>
        </div>
        <footer>
            <p class="text-copy " style="color: #ffffff; ">
                Copyright &copy; 2021 All rights reserved by TCS
            </p>
        </footer>
    </div>
</body>

</html>