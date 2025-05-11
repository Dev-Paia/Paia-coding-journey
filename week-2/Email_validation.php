<?php
if($_SEVER["REQUEST_METHOD"]=="POST"){
  $email=$_POST["email"];

    if(preg_match("/^[\w\.-]+@[\w.-]+\.\w{2,}$/",$email)){
      echo"Valid email";
    }
    else{
      echo"Incorrect email format";
    }
}
?>


<html>
  <head>
    <title>Email_validation</title>
  </head>
  <body>
    <form action="" method="POST">
      <label for="email">Enter Email: </label>
      <input type="text" name="email" required>
      <button type="submit">Submit</button>
    </form>
  </body>
</html>