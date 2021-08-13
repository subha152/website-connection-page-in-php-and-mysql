<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$gen=$_POST['gender'];
$pass1=$_POST['pass1'];
$pass2=$_POST['pass2'];

$servername="localhost";
$username="root";
$password="";
$dbname="college1";
$con=mysqli_connect($servername,$username,$password,$dbname);
if(!$con){
	die("Error".mysqli_connect_error());
}
if($pass1==$pass2){

	$sql="INSERT INTO `registration`(`full name`, `email`, `phnumber`, `date`, `password`, `gender`) 
	VALUES ('$name','$email','$phone','$date','$pass1','$gen');";
	if(mysqli_query($con,$sql)){
		echo "Registration successfully";
	}else{
		echo "wrong......";
	}

}else{
	echo "Password must be same";
}

?>