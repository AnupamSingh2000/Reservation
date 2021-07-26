<?php

$server='localhost';
$username='root';
$password='';
$con=mysqli_connect($server,$username,$password);
$selec=mysqli_select_db($con,'reserves');
if(!($con && $selec))
{
    echo "Failed";
    die();
}
else
{
    /*echo "Connection to database succeded";*/
}

if(isset($_POST['price']))
{
$username=$_POST['username'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$phone=$_POST['phoneno'];
$email=$_POST['email'];
$price=$_POST['price'];
$noofticketsbooked=$_POST['noofticketsbooked'];
if($price==0)
echo 0;
if($con->query("INSERT INTO reserves (`username`, `firstname`, `lastname`, `phone`, `email`, `price`, `noofticketsbooked`) VALUES ('$username', '$firstname', '$lastname', '$phone', '$email', '$price', '$noofticketsbooked');")==TRUE)
{
echo 1;
}
else
echo 0;
}
else if(isset($_POST['username']))
{
    $username=$_POST['username'];
    if(($con->query("DELETE FROM `reserves` WHERE `username`='$username'"))==TRUE)
    {
    echo 1;
    } 
    else
    echo 0;
}
?>