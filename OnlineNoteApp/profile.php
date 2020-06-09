<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Profile</title>
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
      <style>
          .container{
            margin-top: 105px;
          }

          #allNotes , #done{
            display: none;
          }

          .options{
            margin-bottom: 65px;
          }
          .notepad textarea{
            width: 100%;
            max-width: 100%;
            background-color: whitesmoke;
            font-size: 16px;
            line-height: 1.3em;
            /*background:linear-gradient(#F9EFAF, #F7E98D);
            background:-o-linear-gradient(#F9EFAF, #F7E98D);
            background:-ms-linear-gradient(#F9EFAF, #F7E98D);
            background:-moz-linear-gradient(#F9EFAF, #F7E98D);
            background:-webkit-linear-gradient(#F9EFAF, #F7E98D);*/
          }
          .notepad, #done, #allNotes{
            display: none;
          }

          .tr{
            cursor: pointer;
          }
      </style>
      
    
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
              <li class="active"><a href="#">Profile</a></li>
              <li><a href="#">??????</a></li>
              <li><a href="#">Contact us</a></li>
              <li><a href="#">My Notes</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">  <!--pull-right can also be used-->
                <li><a href="#">Logged in as <b>username</b></a></li>
              <li><a href="#">Log out</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <div>
        <ul class="date pull-left btn btn-default">  <!--pull-right can also be used-->
            <?php $timestamp = time(); echo date("F d, d-m-Y",$timestamp);?>
        </ul>
        <ul class="time pull-right btn btn-default">  <!--pull-right can also be used-->
            <?php echo date("h:i:s A");?>
        </ul>
      </div>
     
        
      <!-- Container -->
      <div class="container" id="container">
        <div class="row">
            <div class="col-md-offset-3 col-md-6">
                <h1>Profile Settings</h1>
                <div class="table-responsive">
                  <table class="table table-hover table-responsive table-condensed table-bordered">
                    <tr data-target="#updateUsernameModal" data-toggle="modal">
                      <td>Username</td>
                      <td>Value</td>
                    </tr>
                    <tr data-target="#updateEmailModal" data-toggle="modal">
                      <td>Email</td>
                      <td>Value</td>
                    </tr>
                    <tr data-target="#updatePasswordModal" data-toggle="modal">
                      <td>Password</td>
                      <td>hidden</td>
                    </tr>
                  </table>
                </div>
            </div>    
        </div>         
      </div>

      <!-- update username modal-->
      <form method="post" id="updateUsernameForm">
        <div class="modal" id="updateUsernameModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <button type="button" class="close" data-dismiss="modal" style="color: red;">
                        &times;
                        </button>
                        <h4 id="myModalLabel">
                        Change Your Username
                        </h4>  
                    </div>
                    <div class="modal-body bg-info">
<!--                        Login messages - success/error from php-->
                        <div id="updateUsernameMessage">
                        </div>
        
<!--                        username-->
                        <div class="form-group">
                            <label for="username" class="sr-only">Username</label>
                            <i class="fa fa-user icon"></i>
                            <input type="username" id="username" class="form-control" name="username" maxlength="30" value="usernameValue">
                        </div>

                           
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success blockButton">
                        Change
                        </button>
<!--
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                        Cancel
                        </button>
-->           
                    </div>
            </div>
        </div>
          </div>
      </form>
      

      <!--  update email modal-->
      <form method="post" id="updateEmailForm">
        <div class="modal" id="updateEmailModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <button type="button" class="close" data-dismiss="modal" style="color: red;">
                        &times;
                        </button>
                        <h4 id="myModalLabel">
                        Change Your Email
                        </h4>  
                    </div>
                    <div class="modal-body bg-info">
<!--                        Email update message - success/error from php-->
                        <div id="updateEmailMessage">
                        </div>
        
<!--                        Email-->
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <i class="fa fa-envelope icon"></i>
                            <input type="email" id="email" class="form-control" name="email" maxlength="50" value="emailValue">
                        </div>

                           
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success blockButton">
                        Change
                        </button>
<!--
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                        Cancel
                        </button>
-->           
                  </div>
            </div>
        </div>
        </div>
      </form>


      <!-- update password modal-->
      <form method="post" id="updatePasswordForm">
        <div class="modal" id="updatePasswordModal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <button type="button" class="close" data-dismiss="modal" style="color: red;">
                        &times;
                        </button>
                        <h4 id="myModalLabel">
                        Change Your Password
                        </h4>  
                    </div>
                    <div class="modal-body bg-info">
<!--                        Password update message - success/error from php-->
                        <div id="updatePasswordMessage">
                        </div>
        
<!--                        current password-->
                        <div class="form-group">
                            <label for="password" class="sr-only">Current Password</label>
                            <i class="fa fa-key icon"></i>
                            <input type="password" id="currentPassword" class="form-control" name="password" maxlength="30" value="passwordValue">
                        </div>

                        <!--new password-->
                        <div class="form-group">
                            <label for="password" class="sr-only">New Password</label>
                            <i class="fa fa-key icon"></i>
                            <input type="password" id="password" class="form-control" name="password" maxlength="30" placeholder="Enter new password">
                        </div>

                        <!--confirm password-->
                        <div class="form-group">
                            <label for="confirmPassword" class="sr-only">Confirm Password</label>
                            <i class="fa fa-key icon"></i>
                            <input type="password" id="confirmPassword" class="form-control" name="confirmPassword" maxlength="30" placeholder="Confirm new password">
                        </div>

                           
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success blockButton">
                        Change
                        </button>
<!--
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                        Cancel
                        </button>
-->           
                    </div>
            </div>
        </div>
        </div>
      </form>

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
  </body>
</html>