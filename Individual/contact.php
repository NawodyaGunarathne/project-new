<?php

@include 'connection.php';

session_start();

if(isset($_SESSION['user_info'])){


if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $number = $_POST['number'];
    $number = filter_var($number, FILTER_SANITIZE_STRING);
    $msg = $_POST['msg'];
    $msg = filter_var($msg, FILTER_SANITIZE_STRING);

    $select_message = $conn->prepare("SELECT * FROM `message` WHERE name = ? AND email = ? AND number = ? AND message = ?");
    $select_message->bind_param('ssss', $name, $email, $number, $msg); // Bind parameters
    $select_message->execute();
    $select_message->store_result();

    if ($select_message->num_rows > 0) {
        $message[] = 'already sent message!';
    } else {
        $insert_message = $conn->prepare("INSERT INTO `message`(id, name, email, number, message) VALUES(?,?,?,?,?)");
        $insert_message->bind_param('issss', $user_id, $name, $email, $number, $msg); // Bind parameters
        $insert_message->execute();

        $message[] = 'sent message successfully!';
    }

    $select_message->close(); // Close the statement
    $insert_message->close(); // Close the statement
}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style2.css">

</head>
<body>
   
<?php include 'header.php'; ?>
<center><img src="img/crd.jpg"></center>


<section class="contact">

   <h1 class="title">get in touch</h1>

   <form action="" method="POST">
      <input type="text" name="name" class="box" required placeholder="enter your name">
      <input type="email" name="email" class="box" required placeholder="enter your email">
      <input type="number" name="number" min="0" class="box" required placeholder="enter your number">
      <textarea name="msg" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" value="send message" class="btn" name="send">
   </form>

</section>








<?php include 'footer.php'; ?>



</body>
</html>