<?php
//get values pass from user.html
$username= $_POST['username'];
$password= $_POST['password'];

//to prevent mysql injection
$username=stripcslashes($username);
$password=stripcslashes($password);
$username=mysqli_real_escape_string($username);
$password=mysqli_real_escape_string($password);

//connect to the server and select DB
mysqli_connect("localhost","root","");
mysqli_select_db("courtroom");

//query the database for user
$result=mysqli_query("select * from users where username= '$username' and password='$password'") or die("Failed to query database".mysqli_error());
$row=mysqli_fetch_array($result);
if ($row['username']== $username && $row['password'] == $password){
    echo"Login successfully".$row['username'];
}else{
    echo"Failed to login";
}
?>