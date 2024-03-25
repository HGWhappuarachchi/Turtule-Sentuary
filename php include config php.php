<?php
include 'config.php';

if (isset($_GET['data'])) {
    $data = $_GET['data'];
    $dataArr = explode(":", $data);

    $sensor1_value = $dataArr[1];
    $sensor2_value = $dataArr[3];
    $sensor3_value = $dataArr[5];

    // Insert data into database
    $sql = "INSERT INTO sensor_data (sensor1_value, sensor2_value, sensor3_value) VALUES ('$sensor1_value', '$sensor2_value', '$sensor3_value')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

