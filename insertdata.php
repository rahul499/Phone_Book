<?php
    

    include 'conn.php';

    $name1 = $_POST['name'];
    $dob1 = $_POST['dob'];
    $mobile11 = $_POST['mobile1'];
    $mobile12 = $_POST['mobile1'];
    $email11 = $_POST['email1'];
    $email12 = $_POST['email1'];


$query = " insert into contactinfo ( name, dob, mobile1, mobile2, email1, email2 ) 
values ( '$name1', '$dob1', '$mobile11', '$mobile12', '$email11', '$email12') ";


    mysqli_query($con, $query);

     header('location:index.php');

?>