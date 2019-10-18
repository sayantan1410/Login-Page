<?php

$host = "localhost";
$user = "root";
$password = "Sayantan@123";
$db = "Mind webs";


mysql_connect($host,$user,$password);
mysql_select_db($db);
if(isset($_POST['username'])){
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * form loginform where User='".$uname."'AND Password='" .$password."'limit 1'";
    $result=mysql_querry($sql);
    
    if(mysql_num_rows($result)==1){
        echo "you have successfully logged in";
        exit();
        
    }
    else{
        echo "you have entered incorrect password";
        exit();
        
    }
}



?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page </title>
            <link rel="stylesheet" type="text/css" href="style.css">
        <body>
            <div class="template">
                <img src="web%20template%202.jpg">
                </div>
            
            <div class="loginbox">

                <h1>LOGIN HERE</h1>
                <form method="POST" action="#">
                    <p>Username</p>
                    <h3><input type="text" name="username" placeholder="Enter username"></h3>
                    <p>Password</p>
                    <h3><input type="password" name="password" placeholder="enter password"></h3><br>
                    <h2><input type="submit" name=""></h2><br>
                    <a>forgot password ?</a><br>
                    <a>click here to sign in </a>
                    <H1>--------------</H1>
                    <h1> "WE ARE YOUNG BUT BOLD !!! </h1>
                
                
                    
                           
                           
                
                </form>
                 
            
            
            
            </div>
            <H3>Decorating our shelf</H3>
            <h1> 
            </h1>
        
        </body>
    
        
    </head>





























</html>
