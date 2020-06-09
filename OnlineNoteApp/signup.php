<!-- <?php
	// echo '<div class="alert alert-warning" style="color:green" >Success</div>';
?> -->

<?php
// <!-- start session -->
session_start();
// <!-- connect to the databse -->
include('connection.php');
// <!-- check user inputs -->
// 	<!-- define error message -->
$missingUsername = '<p><strong>Please enter a username.</strong></p>';
$missingEmail = '<p><strong>Please enter your email address.</strong></p>';
$invalidEmail = '<p><strong>Invalid email address.</strong></p>';
$missingPassword = '<p><strong>Please choose a password.</strong></p>';
$invalidPassword = '<p><strong>Password must be atleast 6 characters long with atleast one uppercase letter and a number.</strong></p>';
$differentPassword = '<p><strong>Passwords don\'t match.</strong></p>';
$missingConfirm_Password = '<p><strong>please confirm your password.</strong></p>';


// 	<!-- get username,email, password, confirm_password -->
// 	<!-- store the errors in the $errors variable -->
	if(empty($_POST["username"])){
		$errors .= $missingUsername;
	}else{
		$username = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
	}

	if(empty($_POST["email"])){
		$errors .= $missingEmail;
	}else{
		$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
		if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
			$errors .= $invalidEmail;
		}
	}

	if(empty($_POST["password"])){
		$errors .= $missingPassword;
	}elseif(!(strlen($_POST["password"]) >= 6 )){
		$errors .= $invalidPassword;
	}
	// elseif(!(strlen($_POST["password"]) >= 6 ) &&  preg_match('/[A-Z]/', $_POST["password"]) &&  preg_match('/[0-9]/', $_POST["password"])){
	// 	$errors .= $invalidPassword;
	// }
	else{
		$password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
		//if confirm_password matches
		if(empty($_POST["confirm_password"])){
			$errors .= $missingConfirm_Password;
		}else{
			$confirm_password = filter_var($_POST["confirm_password"], FILTER_SANITIZE_STRING);

			if($password !== $confirm_password){
				$errors .= $differentPassword;
			}

		}
	}

// 	<!-- if errors found, print errors -->
if($errors){
	$resultMessage = '<div class="alert alert-danger">' . $errors.'</div>';
	echo $resultMessage;
	exit;
}
// 	<!-- else, no error -->
// 		<!-- prepare variables for the queries -->
		$username = mysqli_real_escape_string($link , $username);
		$email = mysqli_real_escape_string($link , $email);
		$password = mysqli_real_escape_string($link , $password);
		// $password = md5($password);	//hashing
		$password = hash('sha256',$password);
					//128 bits ->32 characters   		md5($password);
					//256 bits ->62 characters        hash('sha256',$password);
		$sql = "SELECT * FROM users WHERE username='$username'";						
		//check for syntactical error in query	(if the query is not successful)			
		$result = mysqli_query($link, $sql);//mysqli_query(output of mysqli_connect,sql_query)
		if(!$result){
			echo "ERROR: Unable to execute $sql" ;
            // mysql_error($link);
            echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';
            exit;
		}
		// 		<!-- if username exists in the users table print error -->
        $results = mysqli_num_rows($result);
        if($results){
        	echo '<div class="alert alert-danger">Username already exists!</div>';
        	exit;
        }
// 		<!-- else -->
// 			<!-- if email exists in the users table, print error -->
			$sql = "SELECT * FROM users WHERE email='$email'";								
				//check for syntactical error in query	(if the query is not successful)
			$result = mysqli_query($link, $sql);//mysqli_query(output of mysqli_connect,sql_query)
			if(!$result){
				echo "ERROR: Unable to execute $sql" ;	            // mysql_error($link);
	            echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';
            	exit;
			}
	        $results = mysqli_num_rows($result);
	        if($results){
	        	echo '<div class="alert alert-danger">Email already registered!</div>';
	        	exit;
	        }
// 			<!-- else -->
// 				<!-- create a unique activation code-->
	        						//        https://www.php.net/manual/en/function.openssl-random-pseudo-bytes.php
	        	$activationCode = bin2hex(openssl_random_pseudo_bytes(16)); 
// 	        		//16 bytes = 128 bits -> can be represented as 2*2*2*...*2 (128 times which meas eact bit either 0 or 1 can be taken into consideration)
// 	        	//   128/4 =8   (divided by 4 (2 power 4 =16) because data is stored in hexadecimal format)
// // 				<!-- insert users details and activation code in the users table -->
	        	$sql = "INSERT INTO users(username,email,password,activation) VALUES('$username','$email','$password','$activationCode')";
	        	$result = mysqli_query($link, $sql);   //mysqli_query(output of mysqli_connect,sql_query)
	        	// var_dump($result);
				if(!$result){
					// echo "ERROR: Unable to execute $sql" ;	            // mysql_error($link);
		            echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';
		            echo '<div class="alert alert-danger">Unable to insert user details into the table!</div>';
	            	exit;
				}

// 				<!-- send the user an email with a link to activation.php with their email and activation code
		        $to = $email;
				$subject = "Activation code for new registration in MyNotes Online App.";
				$message = "<h2 style='color:red; font-family:cursive'>Click on the link below to create a new account in MyNotes Online App. All your notes are secured with us.</h2>";
				$message .= "http://noteitdown.host20.uk/OnlineNoteApp/activate.php?email=" .urlencode($email). "&key=$activationCode";
				    
				    
				$headers = "Content-type: text/html;";
				if(mail($to,$subject,$message,$headers)){
					echo "<div class='alert alert-success'>Activation code sent to $email. Please check.</div>";
				}
				// if(mail($to,$subject,$message,'From: '.'ashishmeher216@gmail.com')){
				// 	echo "<div class='alert alert-success'>Activation code sent to $email. Please check.</div>";
				// }
?>	


							<!-- "<html>
							<body><h1 style='color:red; font-family:cursive'>Click on the link below to create a new account in MyNotes Online App. All your notes are secured with us.</h1>
							"http://noteitdown.host20.uk/OnlineNoteApp/activate.php?email="urlencode($email)."&key=$activationCode";

							</body>
							</html>"; -->














<!-- start session -->

<!-- connect to the databse -->

<!-- check user inputs -->
	<!-- define error message -->
	<!-- get username,email, password, confirm_password -->
	<!-- store the errors in the eroors variable -->
	<!-- if errors found, print errors -->

	<!-- else, no error -->
		<!-- prepare variables for the queries -->
		<!-- if username exists in the users table print error -->
		<!-- else -->
			<!-- if email exists in the users table,print error -->
			<!-- else -->
				<!-- create a unique activation code-->
				<!-- insert users details and activation code in the users table -->
				<!-- send the user an email with a link to activation.php with their email and activation code