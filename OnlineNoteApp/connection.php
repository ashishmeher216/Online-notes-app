<?php
//mysqli_connect(host,usernmae,password,database name)
$link = mysqli_connect("localhost","noteitdo_ashish","helloworld216%%%","noteitdo_onlinenotes");
		// var_dump($link);
//check connection
if(mysqli_connect_error()){
    die("ERROR: Unable to Connect : ".mysqli_connect_error());	//die prints something and tops the whole php code
    echo "<script>window.alert('What the hell!')</script>";
}
// echo '<div class="alert alert-success">Connected successfully to the database.</div>';
?>