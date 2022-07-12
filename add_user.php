<?php
include 'conn.php';

$sql="insert into user (name, num_phone, email, gender,age, comment)
values ('$_POST[name]','$_POST[numtel]','$_POST[email]',
'$_POST[gender]','$_POST[age]'), '$_POST[comments]')";

    if(!mysqli_query($conn, $sql)){
        die('Error: '.mysqli_error());
    }
    echo "1 record successfully added... ";
    
?>