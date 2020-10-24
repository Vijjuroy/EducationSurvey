<?php
/**
 * Created by PhpStorm.
 * User: bvidy
 * Date: 23-10-2020
 * Time: 00:37
 */
$con = mysqli_connect("localhost","root");

if ($con){

}
else{
    mysqli_close($con);
    echo "connection failed";
}

mysqli_select_db($con,'test');

$first_name   = $_POST['fname'];
$last_name    = $_POST['lname'];
$gender       = $_POST['gender'];
$email        = $_POST['email'];
$phone_number = $_POST['phone'];
$time         = $_POST['tim'];
$date         = $_POST['dat'];

$query = " insert into userdata (firstname, lastname, gender, email, phone, time, date) values ('$first_name', '$last_name', '$gender', '$email', '$phone_number', '$time', '$date') ";

//echo "first_name=".$first_name."<br/>";
//echo "last_name=".$first_name."<br/>";
//echo "gender=".$gender."<br/>";
//echo "email=".$email."<br/>";
//echo "phone_number=".$phone_number."<br/>";
//echo "time=".$time."<br/>";
//echo "date=".$date."<br/>";

mysqli_query($con, $query);
mysqli_close($con);
header('location:thank_you.html');