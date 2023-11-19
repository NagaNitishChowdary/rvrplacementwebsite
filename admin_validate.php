<?php
include_once 'db-inc.php';

$userName=$_POST["uname"];
$pswd=$_POST["pwd"];

$sqlStatement = 'select * from adminlogin;';
$queryResult = mysqli_query($dbConnection,$sqlStatement);
$resultCheck = mysqli_num_rows($queryResult);

if($resultCheck>0) {
  while($row=mysqli_fetch_assoc($queryResult)) {
    if($row['uname']==$userName && $row['password']==$pswd) {
      // header("Location:admin.php?submission=success");
      header("submission=success");
      echo '<script>';
      echo 'alert("Login Successfull");';
      echo 'window.location="admin.html";';
      echo '</script>';
    }
    else {
      // header("Location:admin_login.php?submission=failed");
      header("submission=failed");
      echo '<script>';
      echo 'alert("Incorrect Username or Password");';
      echo 'window.location="admin_login.html";';
      echo '</script>';
    }
  }
}

?>
