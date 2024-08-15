<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="head.css">
</head>
<body>

   <div class="header">
<header>
        
        
        <nav>
        <div class="logo">
                    <img src="/Assignment Project/images/jjjjj.png" alt="logo" class="logo-img" width="90px" height="100px">
                </div>
            <ul>
            <li><a href="/Assignment Project/display_all.php">Home</a></li>
            <li><a href="index.php">Products</a></li>
            <li><a href="/Assignment Project/Voting/index.php">Vote</a></li>
            <li><a href="/Assignment Project/Voting/partials/registration.php">Candidate</a></li>
            <li><a href="index.php" class="btn">Buy Now </a></li>
            <li><a href="index.php?logout=<?php echo $user_id; ?>" onclick="return confirm('are your sure you want to logout?');" class="l-btn">logout</a></li>
            </ul>
        </nav>
    </header>
   </div> 
</body>
</html>
