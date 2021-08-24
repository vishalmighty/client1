<?php
// Storing variables in session
session_start();
    $_SESSION['firstname'] = $_REQUEST['firstname'];
    $_SESSION['lastname'] = $_REQUEST['lastname'];
    $_SESSION['mailid'] = $_REQUEST['mailid'];
    $_SESSION['password'] = $_REQUEST['password'];
    $_SESSION['birthday'] = $_REQUEST['birthday'];
    $_SESSION['number'] = $_REQUEST['number'];
    $_SESSION['gender'] = $_REQUEST['gender'];
    $_SESSION['address'] = $_REQUEST['address'];
    $_SESSION['country'] = $_REQUEST['country'];
    $_SESSION['state'] = $_REQUEST['state'];
    $_SESSION['city'] = $_REQUEST['city'];
    $_SESSION['pincode'] = $_REQUEST['pincode'];

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
                    <form action="mydb.php" method="GET">
                        <span>School Name : </span><input type='text' class='input-field' placeholder='School Name' name="schoolname" id="schoolname" required><br>
                        <span>SSLC Mark : </span><input type='text' class='input-field' placeholder='SSLC Mark' name="SSLCmark" required><br>
                        <span>HSC Mark : </span><input type='text' class='input-field' placeholder='HSC Mark' name="HSCmark" required><br>
                        <span >Course Applied for : </span> <input type="radio" id="BE" name="degree" value="BE"><span for="BE">BE </span> <input type="radio" id="BTECH" name="degree" value="BTECH"><span for="BTECH">BTECH </span><br>
                        <span>Department : </span><select class="dept" name="dept">
                        <option value="CSE">CSE</option>
                        <option value="EEE">EEE</option>
                        <option value="ECE">ECE</option>
                        <option value="Mech">Mech</option>
                        </select>
                        <button type='submit' class='submit-btn2'>SAVE</button>


                    </form>
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