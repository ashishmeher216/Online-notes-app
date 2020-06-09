<!-- start session -->
<!-- connect to the database -->

<!-- check user inputs -->
	<!-- define error message -->
	<!-- get email -->
	<!-- store errors to errors variable -->
	<!-- if there are any error -->
		<!-- print errors -->
	<!-- else -->
		<!-- prepare variables for query -->
		<!-- run query : if mail exists in the users table -->
		<!-- if mail does not exisit -->
			<!-- print error -->
		<!-- else -->
			<!-- get the user id -->
			<!-- create unique activation code -->
			<!-- insert user details and activation code in the forgotpassword table -->
			<!-- send email with a link to to resetpassword.php page with user id and activartion code -->
			<!-- if mail sent sucessfully, print success message -->