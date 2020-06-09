<?php
// user is redirected to this activation.php file after clicking the activation link
// signup link contains two GET parameters: email and activation key
session_start();
include('connection.php');

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>
        Account Activation
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1 {
            color: purple;
        }

        .contact_form {
            border: 1px solid purple;
            border-radius: 5px;
        }

        .container-fluid {
            margin-top: 100px;
        }
        .btn{
            margin-right: 30px;
            margin-bottom: 20px;
        }

    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="col-sm-offset-1 col-sm-10 contact_form">
            <h1>Account Activation</h1>
     
<?php
//If email or activation key is missing show an error
if(!isset($_GET['email']) || !isset($_GET['key'])){
    echo '<div class="alert alert-danger">There was an error. Please click on the activation link you received by email.</div>'; exit;
}
//else
    //Store them in two variables
$email = $_GET['email'];
$key = $_GET['key'];
    //Prepare variables for the query
$email = mysqli_real_escape_string($link, $email);
$key = mysqli_real_escape_string($link, $key);
    //Run query: set activation field to "activated" for the provided email
$sql = "UPDATE users SET activation='activated' WHERE (email='$email' AND activation='$key') LIMIT 1";
$result = mysqli_query($link, $sql);
    //If query is successful, show success message and invite user to login
if(mysqli_affected_rows($link) == 1){
    echo '<div class="alert alert-success">Your account has been activated.</div>';
    echo '<a href="index.php" type="button" class="btn btn-success">Log in<a/>';
    
}else{
    //Show error message
    echo mysqli_error($link);
    echo "<div class='alert alert-warning'>We are sorry! Your account could not be created.</div>";
	echo "<div class='alert alert-warning'>Please try again after sometime. Thank you.</div>";
	echo "<a href='index.php' type='button' class='btn btn-info'>Go back to homepage.</a>";
	echo "<a href='https://www.google.com/'  target='_blank' type='button' class='btn btn-info'>Google</a>";   
    
}
?>

           
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>

</body>

</html>





























<!-- user is redirected to this activation.php file after clicking the activation link -->
<!-- signup link contains two GET parameters: email and activation key -->
<!-- if email or activation key is missing, show error -->
<!-- else -->
	<!-- store them in two variables -->
	<!-- prepare variables for the query -->
	<!-- run query : set activation field in the database to "activated" for the provided email -->
	<!-- if query is successful, show success message and invite user gor login -->
	<!-- else -->
		<!-- show error message -->