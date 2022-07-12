<?php

include('connect.php');

if (mysqli_query($conn,'TRUNCATE TABLE user_data')) {
    header('location:admin.php?status=success');
}else{
    header('location:admin.php?status=failure');
}


?>