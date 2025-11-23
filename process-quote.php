<?php
include "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $names         = $_POST['name'];
    $phone         = $_POST['phone'];
    $from_city     = $_POST['from_city'];
    $to_city       = $_POST['to_city'];
    $shifting_type = $_POST['shifting_type'];

    $sql = "INSERT INTO requests (names, phone, from_city, to_city, shifting_type)
            VALUES ('$names', '$phone', '$from_city', '$to_city', '$shifting_type')";

    if ($conn->query($sql) === TRUE) {

        // Show alert and redirect to home.php
        echo "<script>
                alert('Thank you $names! Your request has been submitted successfully.');
                window.location.href = 'home.php';
              </script>";
        exit;

    } else {
        echo "<script>
                alert('Something went wrong: " . $conn->error . "');
                window.location.href = 'home.php';
              </script>";
        exit;
    }
}
?>
