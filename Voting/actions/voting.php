<?php
session_start();
include('connect.php');

// Ensure session variables are set
if (!isset($_POST['groupvotes']) || !isset($_POST['groupid']) || !isset($_SESSION['id'])) {
    echo '<script>
        alert("Invalid session or input data");
        window.location="../partials/dashboard.php";
        </script>';
    exit();
}

// Sanitize inputs
$votes = (int) $_POST['groupvotes'];
$totalvotes = $votes + 1;

$gid = (int) $_POST['groupid'];
$uid = (int) $_SESSION['id'];

// Check if the user has already voted
$checkStatusStmt = $con->prepare("SELECT status FROM `userdata` WHERE id=?");
$checkStatusStmt->bind_param("i", $uid);
$checkStatusStmt->execute();
$checkStatusStmt->bind_result($status);
$checkStatusStmt->fetch();
$checkStatusStmt->close();

if ($status == 1) {
    echo '<script>
        alert("You have already voted.");
        window.location="../partials/dashboard.php";
        </script>';
    exit();
}

// Update votes using prepared statements
$updatevotes_stmt = $con->prepare("UPDATE `userdata` SET votes=? WHERE id=?");
$updatevotes_stmt->bind_param("ii", $totalvotes, $gid);
$updatevotes = $updatevotes_stmt->execute();

// Update status using prepared statements
$updatestatus_stmt = $con->prepare("UPDATE `userdata` SET status=1 WHERE id=?");
$updatestatus_stmt->bind_param("i", $uid);
$updatestatus = $updatestatus_stmt->execute();

if ($updatevotes && $updatestatus) {
    // Retrieve groups data
    $getgroups = mysqli_query($con, "SELECT username, photo, votes, id FROM `userdata` WHERE standard='group'");
    if ($getgroups) {
        $groups = mysqli_fetch_all($getgroups, MYSQLI_ASSOC);
        $_SESSION['groups'] = $groups;
        $_SESSION['status'] = 1;
        echo '<script>
            alert("Voting successful");
            window.location="../partials/dashboard.php";
            </script>';
    } else {
        echo '<script>
            alert("Failed to retrieve groups");
            window.location="../partials/dashboard.php";
            </script>';
    }
} else {
    echo '<script>
        alert("Technical error !! Vote after sometime");
        window.location="../partials/dashboard.php";
        </script>';
}

// Close statements and connection
$updatevotes_stmt->close();
$updatestatus_stmt->close();
$con->close();
?>
