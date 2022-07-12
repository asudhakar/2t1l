<pre>

<?php


print_r($_REQUEST);


include('connect.php');

$option = $_REQUEST['option'];

$sql = "INSERT INTO user_data (`value`) VALUES ('$option')";


$result = mysqli_query($conn, $sql);



if ($result) {
	echo "New location record created successfully";
	header('location:index.php?status=success');
} else {
	die(mysqli_error($conn));
	header('location:index.php?status=failure');
}

?>