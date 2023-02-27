<?php
$localhost="localhost";
$user="root";
$pass="";
$db_name="schoolmanagement";
$conn=new mysqli($localhost,$user,$pass,$db_name);
if($conn==true){
	echo "yes it is working";
}
else {
	echo "not working";
}