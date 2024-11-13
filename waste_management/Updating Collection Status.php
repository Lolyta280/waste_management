<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $schedule_id = $_POST['schedule_id'];
    $status = $_POST['status'];

    $stmt = $conn->prepare("UPDATE schedules SET status = ? WHERE id = ?");
    $stmt->bind_param("si", $status, $schedule_id);
    $stmt->execute();
    echo "Status updated successfully";
}
?>
