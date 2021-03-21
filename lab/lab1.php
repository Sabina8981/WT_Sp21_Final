<?php
if($_server["Request_Method"]=="POST"){
$username=$_POST["username"];
$password=$_POST["password"];
if(username =="Sabina" && $password=="12345"){
setcookie("username",$username,time)
  header("Location: dashboard.php");
  }
  }
  ?>
  <html>
  <head> </head>
  <body>
  <form action="" method="POST">
   username:<input type="text" name="username"><br>
   password:<input type="text" name="password"><br>
   <input type="submit" name="submit" value="login">
   </form>
   </body>
   </html>
   