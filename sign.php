<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection successful";
}else{
	echo "no Connection";
}
mysqli_select_db($con,'signup');
$name = $_POST['name'];
$email = $_POST['email'];
$password= $_POST['password'];
$number= $_POST['number'];

$query = " insert into  usersignupdata (name, email, password, number) 
values ('$name', '$email', '$password', '$number')";

echo "$query";

mysqli_query($con,$query );

header('location:home.html');

?>