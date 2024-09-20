<?php
$con= mysqli_connect('localhost','root', '', 'email' );

if($con){
    echo "Submission seccessfull";
    }
    else {
        echo "No connection";
    }

    mysqli_select_db ($con, 'email');


$email = $_POST['email'];

$query = "insert into email (email) values('$email')" ;

mysqli_query($con, $query);

?>