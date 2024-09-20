<?php

$con= mysqli_connect('localhost','root');

if($con){
echo "Connection seccessfull";
}
else {
    echo "No connection";
}
 
mysqli_select_db ($con, 'ecommerce');

$email = $_POST['email'];

$query = "insert into userinfodata (email) values('$email')" ;

mysqli_query($con, $query);


?>