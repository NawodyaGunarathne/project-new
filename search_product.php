<!--Connect file-->
<?php
include('includes/connect.php');
include('functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce website using php and mysql</title>
    <!--boostrap Css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--css file-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--navbar-->
    <div class="container-fluid p-0">
       <!--first child-->
       <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="./images/jjjjj.png" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Assignment Project/Voting/index.php">Vote</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Assignment Project/Voting/partials/registration.php">Candidate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display_all.php">Winners</a>
        </li>
        <!--<li class="nav-item">
          <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price:100/-</a>
        </li>-->
      </ul>
      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
        <input type="submit" value="Search" class="btn btn-outline-light" name="search_data_product">
      </form>
    </div>
  </div>
</nav>

<!--calling cart function-->
<?php

cart();

?>


<!--Second child-->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
  <ul class="navbar nav me-auto">
  <li class="nav-item">
          <a class="nav-link" href="#">Welcome Guest</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
  </ul>
</nav>



<!--third child-->
<div class="bg-light">
  <h3 class="text-center">ARTISTIC ODYSSEY</h3>
  <p class="text-center">You Can Enjoy Your Life with Arts</p>
</div>


<!--fourth child-->
<div class="row px-1">
  <div class="col-md-10">
    <!--products-->
<div class="row">

<!--fetching products-->
<?php
//calling function
search_product();
get_unique_categories();
get_unique_brands();

?>
  <!--row end-->
  </div>
  <!--column end-->
</div>
  <div class="col-md-2 bg-secondary p-0">
    <!--brands to be displayed-->
    <ul class="navbar-nav me-auto text-center">
      <li class="nav item bg-info ">
        <a href="#" class="nav-link text-light"><h4>Profiles</h4></a>
      </li>

      <?php

        getbrands();

      ?>



    </ul>
   <!--categories to be desplayed-->
   <ul class="navbar-nav me-auto text-center">
      <li class="nav item bg-info ">
        <a href="#" class="nav-link text-light"><h4>Categories</h4></a>
      </li>
      <?php

       getcategories();

      ?>
    </ul>
  </div>
</div>




<!--last child-->
<!--include footer-->
<?php
include("./includes/footer.php")
?>


</div>


<!--boostrsp js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>