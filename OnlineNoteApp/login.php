<?php  
// start session
session_start();
// connect to the database
include('connection.php');


// check user inputs
// 	define error message
$missingEmail = '<p><stong>Please enter your email address!</strong></p>';
$missingPassword = '<p><stong>Please enter your password!</strong></p>'; 
    //Get email and password
    //Store errors in errors variable
if(empty($_POST["loginEmail"])){
    $errors .= $missingEmail;   
}else{
    $email = filter_var($_POST["loginEmail"], FILTER_SANITIZE_EMAIL);
}
if(empty($_POST["loginPassword"])){
    $errors .= $missingPassword;   
}else{
    $password = filter_var($_POST["loginPassword"], FILTER_SANITIZE_STRING);
}
    //If there are any errors
if($errors){
    //print error message
    $resultMessage = '<div class="alert alert-danger">' . $errors .'</div>';
    echo $resultMessage;   
}
// 	else, no error
// 		prepare variables for the queries
		$email = mysqli_real_escape_string($link , $email);
		$password = mysqli_real_escape_string($link , $password);
		$password = hash('sha256',$password);
// 		run query : check combination of email and password exits or not
		$sql = "SELECT * FROM users WHERE (email='$email' AND password='$password' AND activation='activated')";
// 		if email or password does not match , print error
		$result = mysqli_query($link, $sql);//mysqli_query(output of mysqli_connect,sql_query)
		// var_dump($result);
		// check if there is error
		if(!$result){
				echo "ERROR: Unable to execute $sql" ;	            // mysql_error($link);
	            echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';
            	exit;
		}

		// if email,password does not match , print error
		if(mysqli_num_rows($result) !== 1){
			echo '<div class="alert alert-danger">Incorrect Email or Password</div>';	
		}else{
			// log the user in, and set the session variables
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
			$_SESSION["user_id"] = $row["user_id"];
			$_SESSION["username"] = $row["username"];
			$_SESSION["email"] = $row["email"];
			// if remember me is not checked, print success
			if(empty($_POST["rememberMe"])) {
				return "success";
			}else{
				// // create two variables : athentificator1 and authentificator2	
				// $authentificator1 = bin2hex(openssl_random_pseudo_bytes(10));		//10 bytes = 80 bits -> 80 character  => (2*2*2*2*2....*2 80 times) => to store in hevadecimal we need (2*2*2*2*2....*2 80 times)/16 = 20 bytes , so size of authentificatir1 in rememberme table should be 20 byts
				// $authentificator2 = bin2hex(openssl_random_pseudo_bytes(20));
				// //similarly calculate for authentificator2 , we wil get 64 bytes

				// // store them in a cookie
				// 	function f1($x , $y){
				// 		$z = $x . ',' . $y ;
				// 		return $z;
				// 	}
				// $cookieValue = f1($authentificator1,$authentificator2);
				// 	//sestcookie(cookie_name, cookie_value, expiration time);
				// setcookie("rememberMe",
				// 		  $cookieValue,
				// 		  time() + 30 * 24 * 3600	//1 month expiration time

				// );

				// 	function f2($x){
				// 		$z = hash('sha216',$x);
				// 		return $z;
				// 	}
				// $f2authentificator2 = f2($authentificator2);
				// echo "authentificator1 : $authentificator1";
				// echo'\n';
				// echo "authentificator2 : $f2authentificator2";
				// echo'\n';
				// $yoy = bin2hex(openssl_random_pseudo_bytes(10));
				// $yoyo = openssl_random_pseudo_bytes(20);
				
				// echo "yoy : $yoy";
				// echo'\n';
				// echo "yoyo : $yoyo";


				//Create two variables $authentificator1 and $authentificator2
        $authentificator1 = bin2hex(openssl_random_pseudo_bytes(10));
        //2*2*...*2
        $authentificator2 = openssl_random_pseudo_bytes(20);
        //Store them in a cookie
        function f1($a, $b){
            $c = $a . "," . bin2hex($b);
            return $c;
        }
        $cookieValue = f1($authentificator1, $authentificator2);
        setcookie(
            "rememberme",
            $cookieValue,
            time() + 1296000
        );
        
        //Run query to store them in rememberme table
        function f2($a){
            $b = hash('sha256', $a); 
            return $b;
        }
        $f2authentificator2 = f2($authentificator2);
  //       echo "authentificator1 : $authentificator1";
		// echo'\n';
		// echo "authentificator2 : $f2authentificator2";







				$user_id = $_SESSION['user_id'];
				$expirationtime = date('Y-m-d H:i:s', time() + 30 * 24 * 3600);
				// run query to store them in rememberme table
				$sql = "INSERT INTO rememberme(authentificator1,f2authentificator2,user_id,expires) VALUES('$authentificator1','$f2authentificator2','$user_id','$expirationtime')";
	        	$result = mysqli_query($link, $sql);   //mysqli_query(output of mysqli_connect,sql_query)
	        	
	        	// if query unsuccessful, print error
				if(!$result){
					// echo "ERROR: Unable to execute $sql" ;	            // mysql_error($link);
		            // echo '<div class="alert alert-danger">' . mysqli_error($link) . '</div>';
		            echo '<div class="alert alert-danger">Unable to insert user details into the table!</div>';
				}else{
					// print success
					echo "success";
				}

			}
		}

?>








































<!-- start session -->
<!-- connect to the databse -->

<!-- check user inputs -->
	<!-- define error message -->
	<!-- get username,email, password, confirm_password -->
	<!-- store the errors in the eroors variable -->
	<!-- if errors found, print errors -->

	<!-- else, no error -->
		<!-- prepare variables for the wueries -->
		<!-- run query : check combination of email and password exits or not -->
		<!-- if email,password does not match , print error -->
		<!-- else -->
			<!-- log the user in, and set the session variables -->
			<!-- if remember me is not checked, print success -->
			<!-- else -->
				<!-- create two variables : athentificator1 and suthentificator2-->
				<!-- store them in a cookie -->
				<!-- run query to store them in rememberme table -->
				<!-- if query unsuccessful, print error -->
				<!-- else, print success