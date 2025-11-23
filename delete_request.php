<?php
require "db_connect.php";

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM requests WHERE id = ?");
    if ($stmt) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }

    header("Location: admin.php");
    exit;
} else {
    header("Location: admin.php");
    exit;
}
?>
