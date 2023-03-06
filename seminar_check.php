<?php
$password = "stat306"; // Set the password
if(isset($_POST['password']) && $_POST['password'] == $password) {
    header("Location: seminar_real.php"); // Redirect to the real seminar page
    exit();
} else {
    echo "Invalid password. Please try again.";
}
?>