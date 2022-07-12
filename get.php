
<?php


include('connect.php');


$options = ['option_1', 'option_2', 'option_3', 'no_idea'];

$final_data = getTotalCountFromDb($conn, $options);

$result=mysqli_query($conn, "SELECT count('*') as total from user_data");
$count=mysqli_fetch_assoc($result);

// print_r($final_data);

// print_r($count);

$admin_values = convertValueToPercentage($final_data, $count['total']);


function getTotalCountFromDb($conn, $options){
    foreach ($options as $key => $option) {
        $result=mysqli_query($conn, "SELECT count('value') as ".$option." from user_data where value='".$option."'");
        $data=mysqli_fetch_assoc($result);
        $final_data[$option] = $data[$option];
    }
    return $final_data;
}

function convertValueToPercentage($values, $total){
    foreach ($values as $key => $value) {
        $final_data[$key] = ($value / $total) * 100;
    }
    return $final_data;
}

?>