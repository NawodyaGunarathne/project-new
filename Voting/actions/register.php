<?php
include('connect.php');

$username = $_POST['username'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$std = $_POST['std'];

// Check if passwords match
if ($password != $cpassword) {
    echo '<script>
    alert("Passwords do not match");
    window.location="../partials/registration.php";
    </script>';
    exit();
}

// Move uploaded file
$target_dir = "../uploads/";
$target_file = $target_dir . basename($image);

// Check if file is a real image or fake image
$check = getimagesize($tmp_name);
if ($check === false) {
    echo '<script>
    alert("File is not an image.");
    window.location="../partials/registration.php";
    </script>';
    exit();
}

// Check if file already exists
if (file_exists($target_file)) {
    echo '<script>
    alert("Sorry, file already exists.");
    window.location="../partials/registration.php";
    </script>';
    exit();
}

// Check file size (example: 500KB limit)
if ($_FILES['photo']['size'] > 500000) {
    echo '<script>
    alert("Sorry, your file is too large.");
    window.location="../partials/registration.php";
    </script>';
    exit();
}

// Allow certain file formats (example: JPG, JPEG, PNG, GIF)
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
$allowed_file_types = ['jpg', 'jpeg', 'png', 'gif'];
if (!in_array($imageFileType, $allowed_file_types)) {
    echo '<script>
    alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
    window.location="../partials/registration.php";
    </script>';
    exit();
}

// Move file to the target directory
if (!move_uploaded_file($tmp_name, $target_file)) {
    echo '<script>
    alert("Sorry, there was an error uploading your file.");
    window.location="../partials/registration.php";
    </script>';
    exit();
}

// Hash the password
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

// Prepare and bind
$stmt = $con->prepare("INSERT INTO `userdata` (username, mobile, password, photo, standard, status, votes) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssi", $username, $mobile, $hashed_password, $image, $std, $status, $votes);

// Set parameters and execute
$status = 0;
$votes = 0;
if ($stmt->execute()) {
    echo '<script>
    alert("Registration successful");
    window.location="../";
    </script>';
} else {
    echo '<script>
    alert("Error: ' . $stmt->error . '");
    window.location="../partials/registration.php";
    </script>';
}

$stmt->close();
$con->close();
?>
