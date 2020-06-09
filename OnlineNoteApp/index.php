<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Online Notes</title>
    <link rel="shortcut icon" href="images/logo.png">  <!--Favicon-->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Social buttons -->
    <!-- <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet" > -->
 
      <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Google font--><!--Vollkorn family-->
    <link href="https://fonts.googleapis.com/css?family=Vollkorn&display=swap" rel="stylesheet">
    
    <!-- show/hide password  -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-show-password/1.0.3/bootstrap-show-password.min.js"></script>

    <script type="text/javascript">
        $("#password").password('toggle');
        $("#confirm_password").password('toggle');
    </script>
      

  </head>
  <body>
    <!-- <div id="main"> -->

      <!-- <h1>Hello brother</h1> -->
      <!-- Navigation Bar -->
      <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
        <div class="container-fluid">
          <!-- Brand -->
          <div class="navbar-header">
            <!-- <a class="navbar-brand">NoteAlways</a> -->
            <a class="navbar-brand">NoteItDown</a>
            
            <button type="button" class="navbar-toggle" data-target="#toCollapse" data-toggle="collapse">
              <span class="sr-only">Toggle Navigation</span>

              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <!-- Collapsable content -->
          <div class="navbar-collapse collapse" id="toCollapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">??????</a></li>
              <li><a href="#">Contact us</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">  <!--pull-right can also be used-->
              <li><a href="#loginModal" data-toggle="modal">Login</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <div>
        <ul class="date pull-left btn btn-default">  <!--pull-right can also be used-->
            <?php 
                $timestamp = time(); echo date("F d, d-m-Y",$timestamp);
            ?>
        </ul>
        <ul class="time pull-right btn btn-default">  <!--pull-right can also be used-->
            <?php 
                echo date("h:i:s A");
            ?>
        </ul>
      </div>
      <!-- Jumbotron which containes a heading  and sign up option -->
      <div class="jumbotron" id="jumboContainer">
        <h1>Online Notes App</h1>
        <p>Access from any corner of the world</p>
        <p>Easy to use, protects your secrets.</p>
        <button type="button" class="btn btn-danger btn-lg signup" href="#" data-target="#signupModal" data-toggle="modal">Register for Free</button>
      </div>
         	
      <!-- Login form -->
      <form method="post" id="loginForm">
        <div class="modal" id="loginModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <button type="button" class="close" data-dismiss="modal" style="color: red;">
                        &times;
                        </button>
                        <h4 id="myModalLabel">
                        Login - NoteItDown
                        </h4>  
                    </div>
                    <div class="modal-body bg-info">
<!--                        Login messages - success/error from php-->
                        <div id="loginMessage">
                        </div>
        
<!--                        email-->
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <i class="fa fa-envelope icon"></i>
                            <input type="email" id="loginEmail" class="form-control" name="loginEmail" placeholder="Email" maxlength="30">
                        </div>
<!--                        password-->
                        <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <i class="fa fa-key icon"></i>
                            <input type="password" id="loginPassword" class="form-control" name="loginPassword" placeholder="Password" maxlength="30" data-toggle="password">
                        </div>
                        

                        <div class="checkbox">
                            <!--Remember me check box-->            
                            <label><input type="checkbox" name="rememberMe" id="rememberMe">Remember me</label>
                             <!--Forgot password-->
                            <a class="pull-right" data-dismiss="modal" data-target="#forgotpasswordModal" data-toggle="modal" style="cursor:pointer;">Forgot Password?</a>
                        </div>
                           
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success blockButton">
                        Login
                        </button>
<!--
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                        Cancel
                        </button>
-->						
						<br>
						<br>
						<button type="submit" class="btn btn-info blockButton" data-dismiss="modal" data-target="#signupModal" data-toggle="modal" >
                        New User? Register here.
                        </button>
                    </div>

                    <hr>
                    <div class="socialMedia bg-info">
                        <!--Facebook-->
                        <button type="button" class="btn btn-fb"><i class="fab fa-facebook-f pr-1"></i> Facebook</button>
                        <!--Google +-->
                        <button type="button" class="btn btn-gplus"><i class="fab fa-google-plus-g pr-1"></i> Google +</button>
                        <!--Linkedin-->
                        <button type="button" class="btn btn-li"><i class="fab fa-linkedin-in pr-1"></i> Linkedin</button>
                        <!--Github-->
                        <button type="button" class="btn btn-git"><i class="fab fa-github pr-1"></i> Github</button>
                        
                    </div>
                </div>
            </div>
        </div>

      </form>
      <!-- Sign up form -->
      <form method="post" id="signupForm">
        <div class="modal" id="signupModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <button type="button" class="close" data-dismiss="modal" style="color: red;">
                        &times;
                        </button>
                        <h4 id="myModalLabel">
                        NoteItDown - A notebook for your secrets
                        </h4>  
                    </div>
                    <div class="modal-body bg-info">
<!--                        Sign up messages - success/error from php-->
                        <div id="signupMessage">
                        </div>
                        
<!--                        username-->
                        <div class="form-group">
                            <label for="username" class="sr-only">Username</label>
                            <i class="fa fa-user icon"></i>
                            <input type="text" id="username" class="form-control" name="username" placeholder="Username" maxlength="30">
                        </div>
<!--                        email-->
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <i class="fa fa-envelope icon"></i>
                            <input type="email" id="email" class="form-control" name="email" placeholder="Email" maxlength="30">
                        </div>
<!--                        password-->
                        <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <i class="fa fa-key icon"></i>
                            <input type="password" id="password" class="form-control" name="password" placeholder="Choose a password" maxlength="30" data-toggle="password">
                        </div>
<!--                        confirm password-->
                        <div class="form-group">
                            <label for="confirm_password" class="sr-only">Confirm password</label>
                            <i class="fa fa-key icon"></i>
                            <input type="password" id="confirm_password" class="form-control" name="confirm_password" placeholder="Confirm password" maxlength="30" data-toggle="password">
                        </div>
                    </div>
                    <div class="modal-footer bg-info">
                        <button type="submit" class="btn btn-success blockButton">
                        Sign up
                        </button>
<!--
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                        Cancel
                        </button>
-->

                    </div>
                    <hr>
                    <div class="socialMedia">
                        <!--Facebook-->
                        <button type="button" class="btn btn-fb"><i class="fab fa-facebook-f pr-1"></i> Facebook</button>
                        <!--Google +-->
                        <button type="button" class="btn btn-gplus"><i class="fab fa-google-plus-g pr-1"></i> Google +</button>
                        <!--Linkedin-->
                        <button type="button" class="btn btn-li"><i class="fab fa-linkedin-in pr-1"></i> Linkedin</button>
                        <!--Github-->
                        <button type="button" class="btn btn-git"><i class="fab fa-github pr-1"></i> Github</button>
                        
                    </div>
                </div>
                
            </div>
        </div>

      </form>

      <!-- forgot password form -->
      <form method="post" id="forgotpasswordForm">
        <div class="modal" id="forgotpasswordModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <button type="button" class="close" data-dismiss="modal" style="color: red;">
                        &times;
                        </button>
                        <h4 id="myModalLabel">
                        Please Enter your email address
                        </h4>  
                    </div>
                    <div class="modal-body bg-info">
<!--                        forgot password's message from php-->
                        <div id="forgotpasswordMessage">
                        </div>
        
<!--                        email-->
                        <div class="form-group">
                            <label for="forgotpasswordEmail" class="sr-only">Email</label>
                            <i class="fa fa-envelope icon"></i>
                            <input type="email" id="forgotpasswordEmail" class="form-control" name="forgotpasswordEmail" placeholder="Email" maxlength="30">
                        </div>

                           
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success blockButton">
                        Submit
                        </button>
<!--
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                        Cancel
                        </button>
-->						
						<br>
						<br>
						<button type="submit" class="btn btn-info blockButton" data-dismiss="modal" data-target="#signupModal" data-toggle="modal" >
                        New User? Register here.
                        </button>
                    </div>

                    <hr>
                    <div class="socialMedia bg-info">
                        <!--Facebook-->
                        <button type="button" class="btn btn-fb"><i class="fab fa-facebook-f pr-1"></i> Facebook</button>
                        <!--Google +-->
                        <button type="button" class="btn btn-gplus"><i class="fab fa-google-plus-g pr-1"></i> Google +</button>
                        <!--Linkedin-->
                        <button type="button" class="btn btn-li"><i class="fab fa-linkedin-in pr-1"></i> Linkedin</button>
                        <!--Github-->
                        <button type="button" class="btn btn-git"><i class="fab fa-github pr-1"></i> Github</button>
                        
                    </div>
                </div>
            </div>
        </div>

      </form>


      <!-- Remember me -->
      


      <!-- footer -->
      <div class="footer">
        <div class="container-fluid">
          <p>Copyright &copy; AsKMe Pvt Ltd 2019-<?php $today = date("Y"); echo $today;?></p>
        </div>
      </div>
    <!-- </div> -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- the below is the javascrip file which perform azax call to signup.php  login.php  forgotpassword.php -->
    <script src="index.js"></script>
  </body>
</html>