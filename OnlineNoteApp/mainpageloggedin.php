<!DOCTYPE html>
<html lang="en">
  <head>
    <title>My Notes</title>
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
            margin-top: 125px;
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
              <li><a href="#">Profile</a></li>
              <li><a href="#">??????</a></li>
              <li><a href="#">Contact us</a></li>
              <li class="active"><a href="#">My Notes</a></li>
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
            <div class="col-md-offset-2 col-md-8">
                <div class="options">
                    <button id="newNote" type="button" class="btn btn-primary btn-lg pull-left">New Note</button>
                    <button id="edit" type="button" class="btn btn-primary btn-lg pull-right">Edit</button>     
                    <button id="done" type="button" class="btn btn-success btn-lg pull-right">Done</button>
                    <button id="allNotes" type="button" class="btn btn-primary btn-lg pull-left">All Notes</button>
                </div>

                 <div class="notepad">
                    <textarea rows="12" class="border border-danger"></textarea> 
                </div> 
                <div id="notes" class="notes">
                    <!-- Ajax call to php -->
                </div>
            </div>    
        </div>         
      </div>

      
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