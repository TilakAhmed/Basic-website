<?php
 
$con= mysqli_connect('localhost','root', '', 'test1' );

if($con){
    echo "Thank You for Your Response";
    }
    else {
        echo "No connection";
    }

    mysqli_select_db ($con, 'test1');
     

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];


$query = "insert into feedback (user,email,mobile,comment) values('$user','$email','$mobile','$comment')" ;

mysqli_query($con, $query);

?>