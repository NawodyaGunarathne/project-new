<?php
session_start(); // Start the session
include('connect.php');

$username = $_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$std = $_POST['std'];

// Prepare and bind
$stmt = $con->prepare("SELECT * FROM `userdata` WHERE username = ? AND mobile = ? AND standard = ?");
$stmt->bind_param("sss", $username, $mobile, $std);
$stmt->execute();
$result = $stmt->get_result();

// Check if user exists
if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    // Verify password
    if (password_verify($password, $data['password'])) {
        // Fetch group data if the login is successful
        $stmt_group = $con->prepare("SELECT username, photo, votes, id FROM `userdata` WHERE standard = 'group'");
        $stmt_group->execute();
        $resultgroup = $stmt_group->get_result();
        
        if ($resultgroup->num_rows > 0) {
            $groups = $resultgroup->fetch_all(MYSQLI_ASSOC);
            $_SESSION['groups'] = $groups;
        }

        $_SESSION['id'] = $data['id'];
        $_SESSION['status'] = $data['status'];
        $_SESSION['data'] = $data;

        echo '<script>window.location="../partials/dashboard.php";</script>';
    } else {
        echo '<script>alert("Invalid credentials"); window.location="../";</script>';
    }
} else {
    echo '<script>alert("Invalid credentials"); window.location="../";</script>';
}

$stmt->close();
$con->close();
?>
