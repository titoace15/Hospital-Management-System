<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $doctor = htmlspecialchars($_POST['doctor']);
    $date = htmlspecialchars($_POST['date']);
    $time = htmlspecialchars($_POST['time']);
    
    echo "Appointment booked successfully for Dr. $doctor on $date at $time.";
}
?>
