<?php
/**
 * Created by PhpStorm.
 * User: bvidy
 * Date: 23-10-2020
 * Time: 23:28
 */
echo "<head>
   <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
   <style>
      div{
         margin-top: 60px;
         display: flex;
         justify-content: center;
      }
</style>
</head>";
$con = mysqli_connect("localhost","root");

if($con){

}
else{
    echo "connection failed";
    mysqli_close($con);
}


if(mysqli_select_db($con,'test')){
    $query  = " select * from userdata ";
    $result = mysqli_query($con,$query);
    if (mysqli_num_rows($result) > 0) {
        echo "<div>";
        echo "<table border='2'><tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>Gender</th><th>Email</th><th>Phone</th><th>Time</th><th>Date</th></tr>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>"."<td>".$row["id"]."</td>". "<td>".$row["firstname"]."</td>". "<td>".$row["lastname"]."</td>". "<td>".$row["gender"]."</td>". "<td>".$row["email"]."</td>". "<td>".$row["phone"]."</td>". "<td>".$row["time"]."</td>"."<td>".$row["date"]."</td></tr>";
        }
        echo "</table>";
        echo "</div>";
    }
     else {
        echo "<h3>No Registrations done yet!!</h3>";
    }
}
else{
    echo "database error";
}
mysqli_close($con);