<?php
/**
 * Created by PhpStorm.
 * User: bvidy
 * Date: 24-10-2020
 * Time: 19:33
 */

$con = mysqli_connect("localhost","root");

if($con){

}
else{
    echo "<h1>Database Not Found</h1>";
    mysqli_close($con);
}

$username =  $_POST['uname'];
$password = $_POST['upass'];

if(mysqli_select_db($con,'test')){
    $query = " select * from admin where username='".$username."' and password='".$password."'";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        header("location:registrated_data.php");
    }
    else{
        header("location:login.html");
    }
}
else{
    echo "<h1>Database Error!</h1>";
}
mysqli_close($con);