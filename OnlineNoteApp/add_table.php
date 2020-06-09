<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,
    initial-scale=1">
    <title>
        Create Tables
    </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        h1{
            color: orangered;
        }
        .containingDiv{
            border:1px solid #7c73f6;
            margin-top:100px;
            border-radius: 15px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="col-sm-offset-1 col-sm-10 containingDiv">
            <h1>Connect to Database:</h1>
            <?php
            //1.procedural way to connect to a database
            //mysqli_connect to connect to a database
            //mysqli_connect(host,usernmae,password,database name)

            $link = mysqli_connect("localhost","noteitdo_ashish","helloworld216%%%","noteitdo_onlinenotes");
           var_dump($link);
            
            //check connection
            if(mysqli_connect_error()){
                die("ERROR: Unable to Connect : ".mysqli_connect_error());
            }
            echo '<div class="alert alert-success">Connected successfully to the database.';
            ?>
            <h1>Create table:</h1>
            <?php
                // $sql_users = "CREATE TABLE users(user_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,username VARCHAR(30) NOT NULL, email VARCHAR(50), password VARCHAR(30), activation CHAR(32))";
                
                // if(mysqli_query($link, $sql_users)){
                //     echo "<p>TABLE 'users' was created successfully</p>";
                // }else{
                //     echo "ERROR: Unable to execute $sql_users \n" .
                //     mysqli_error($link);
                // }

                // $sql_rememberme = "CREATE TABLE rememberme(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,authentificator1 CHAR(12) NOT NULL, f2authentificator2 CHAR(64) NOT NULL, user_id INT NOT NULL,expires DATETIME)";
                
                // if(mysqli_query($link, $sql_rememberme)){
                //     echo "<p>TABLE 'rememberme' was created successfully</p>";
                // }else{
                //     echo "ERROR: Unable to execute $sql_rememberme \n" .
                //     mysqli_error($link);
                // }
                // $sql_forgotpassword = "CREATE TABLE forgotpassword(id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,user_id INT NOT NULL, chabi CHAR(32) NOT NULL, samay INT NOT NULL, status VARCHAR(7))";
                

                // if(mysqli_query($link, $sql_forgotpassword)){
                //     echo "<p>TABLE 'fogotpassword' was created successfully</p>";
                // }else{
                //     echo "ERROR: Unable to execute $sql_forgotpassword \n" .
                //     mysqli_error($link);
                // }
                
            ?>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/j
        query.min.js">
    </script>
    <script src="js/bootstrap.min.js">
    </script>

</body>

</html>
