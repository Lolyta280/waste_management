<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $area_name = $_POST['area_name'];
    $collection_date = $_POST['collection_date'];

    $stmt = $conn->prepare("INSERT INTO schedules (area_name, collection_date, status) VALUES (?, ?, 'scheduled')");
    $stmt->bind_param("ss", $area_name, $collection_date);
    $stmt->execute();
    echo "Schedule added successfully";
}
?>
