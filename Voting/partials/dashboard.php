<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location:../');
}
$data=$_SESSION['data'];
if($_SESSION['status']==1){
    $status='<b class="text-success">Voted</b>';
}
else{
    $status='<b class="text-danger">Not Voted</b>';
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System Dashboard</title>
    <!--boostrap Css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--css file-->
    <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-secondary text-light">
    <div class="container my-5"></div>
    <a href="../"><button class="btn btn-dark text-light px-3 my-3">Back</button></a>
    <a href="logout.php"><button class="btn btn-dark text-light px-3">Logout</button></a>
    <h1 class="text-center p-3">Voting System</h1>
    <div class="row my-5">
        <div class="col-md-7">

        <?php
if (isset($_SESSION['groups'])) {
    $groups = $_SESSION['groups'];
    for ($i = 0; $i < count($groups); $i++) {
        ?>
        <div class="row">
            <div class="col-md-4">
                <img src="../uploads/<?php echo $groups[$i]['photo']; ?>" alt="painting image">
            </div>
            <div class="col-md-8">
                <strong class="text-dark h5">Candidate name: <?php echo $groups[$i]['username']; ?></strong></br>
                <strong class="text-dark h5">Votes: <?php echo $groups[$i]['votes']; ?></strong></br>
            </div>
        </div>
        
        <form action="../actions/voting.php" method="post">
            <input type="hidden" name="groupvotes" value="<?php echo $groups[$i]['votes']; ?>">
            <input type="hidden" name="groupid" value="<?php echo $groups[$i]['id']; ?>">

         <?php
          if($_SESSION['status']==1){
            ?>
            <button class="bg-success my-3 text-white px-3">voted</button>
            <?php
          }
          else{
            ?>
            <button class="bg-danger my-3 text-white px-3" type="submit">vote</button>
            <?php
          }

         ?>


        </form>
        <hr>
        <?php
    }}
    else{
        ?>
        <div class="container">
            <p>No groups to display</p>
        </div>
        <?php
    }

?>

           
            <!--groups-->
            
        </div>
        <div class="col-md-5">
            <!--user profile-->
            <img src="../uploads/<?php echo $data['photo'] ; ?>" alt="User image">
            </br></br>
            <strong class="text-dark h5">Name:</strong>
            <?php echo $data['username'] ; ?></br></br>
            <strong class="text-dark h5">Mobile:</strong>
            <?php echo $data['mobile'] ; ?></br></br>
            <strong class="text-dark h5">Status:</strong>
            <?php echo $status; ?></br></br>
        </div>
    </div>
</body>
</html>