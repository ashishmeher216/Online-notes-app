//Ajax call for signup form

//Once the form is submitted
$("#signupForm").submit(function(event){
	//prevent default php processing
	event.preventDefault();
	//collect user input
	var datatopost = $(this).serializeArray();
	console.log(datatopost);
	//send them to signup.php using AZAX
	$.ajax({
		url: "signup.php",
		type: "POST",
		data: datatopost,
		//AZAX call successful : show success message
		success: function(data){	//data is whatever the signup.php file returns
			if(data){
				$("#signupMessage").html(data);
			}
		},
		//AZAX call failure: show error message
		error: function(data){
			$("#signupMessage").html('<div class="alert alert-danger">There was an error with the AJAX call. Please wait we are working on it.</div>');
		}
	});
												// $.post({}).done("write a function specifying what to do if success");
												// $.post({}).fail("write a function specifying what to do if failure");
												// $.get({}).done("write a function specifying what to do if success");
												// $.get({}).fail("write a function specifying what to do if failure");
});






$("#loginForm").submit(function(event){
	//prevent default php processing
	event.preventDefault();
	//collect user input
	var datatopost = $(this).serializeArray();
	console.log(datatopost);
	//send them to signup.php using AZAX
	$.ajax({
		url: "login.php",
		type: "POST",
		data: datatopost,
		//AZAX call successful : show success message
		success: function(data){	//data is whatever the login.php file returns
			console.log(data);
			if(data =="success"){	//if data returned from the login file is "success"
				window.location = "mainpageloggedin.php";
			}else{
				$("#loginMessage").html(data);
			}
		},
		//AZAX call failure: show error message
		error: function(data){
			$("#loginMessage").html('<div class="alert alert-danger">There was an error with the AJAX call. Please wait we are working on it.</div>');
		}
	});
});















//Ajax call for signup form

//Once the form is submitted
	//prevent default php processing
	//collect user input
	//send them to signup.php using AZAX
		//AZAX call successful : show success message
		//AZAX call failure: show error message



//Azax call for login form
//Once the form is submitted
	//prevent default php processing
	//collect user input
	//send them to login.php using AZAX
		//AZAX call successful
			//If php file returns "success", redirect the user to mynotes page i.e mainpageloggin.php
		//AZAX call failure: show error message


//Azax call for forgotpassword form
//Once the form is submitted
	//prevfent default php processing
	//collect user input
	//send them to forgotpassword.php using AZAX
		//AZAX call successful : show success message
		//AZAX call failure: show error message