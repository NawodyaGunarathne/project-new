<?php
session_start();
$user_id = $_SESSION['user_id'];

if (!isset($user_id)) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        
        body{
            margin: 0;
        padding: 0;
        font-family: "open sans",sans-serif;
        background: #F4F4F4;
        background-size: cover;
        height: 100%;
 
}
        .about-section{
        width: 70%;
        background:#fff;
        padding: 40px 0;
        margin-left: auto;
        margin-right:auto;
        margin-top: 170px;
        box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
        border-radius: 30px;
        border-left: 50px solid mediumslateblue;
        border-right: 50px solid mediumslateblue;
        
        
        }
.inner-width{
  max-width: 1000px;
  overflow: hidden;
  padding: 0 20px;
  margin: auto;
}
.about-section h1{
  text-align: center;
}
.border{
  width: 100px;
  height: 3px;
  background: mediumslateblue;
  margin: 40px auto;
}
.about-section-row{
  display: flex;
  flex-wrap: wrap;
}
.about-section-col{
  flex: 50%;
}
.about{
  padding-right: 30px;
}
.about p{
  text-align: justify;
  margin-bottom: 20px;
  color: #7E7C7A;
  font-size: 17px;
}
.about a{
  display: inline-block;
  color: #7E7C7A;
  text-decoration: none;
  border: 2px solid mediumslateblue;
  border-radius: 24px;
  padding: 8px 40px;
  transition: 0.4s linear;
}
.about a:hover{
  color: #fff;
  background: mediumslateblue;
}
.skills{
  padding-left: 30px;
}
.skill{
  margin-bottom: 10px;
}
.title{
  color: #7E7C7A
}
.progress{
  width: 100%;
  height: 12px;
  background: #ddd;
  border-radius: 12px;
}
.progress-bar{
  height: 12px;
  background: mediumslateblue;
  border-radius: 12px;
}
.p1{
  width: 90%;
}
.p2{
  width: 70%;
}
.p3{
  width: 50%;
}
.progress-bar span{
  float: right;
  margin-right: 6px;
  line-height: 13px;
  color: #fff;
  font-size: 12px;
}
@media screen and (max-width:700px) {
  .about-section-col{
    flex: 100%;
    margin: 10px 0;
  }
  .about,.skills{
    padding: 0;
  }
  .about{
    text-align: center;
  }
}
</style>
</head>
<body>
<?php
     include 'header.php'
     ?>
    
    <div class="about-section">
        <div class="inner-width">
          <h1>About Us</h1>
          <div class="border"></div>
          <div class="about-section-row">
            <div class="about-section-col">
              <div class="about">
                <p>
                Welcome to Home Workshop, where craftsmanship meets creativity! Established with a passion for creating exceptional home products, we strive to enhance the charm of every living space.
                </p>
                <a href="#">Read More</a>
              </div>
            </div>
            <div class="about-section-col">
              <div class="skills">
                <div class="skill">
                  <div class="title">Craftsmanship Excellence</div>
                  <div class="progress">
                    <div class="progress-bar p1"><span>90%</span></div>
                  </div>
                </div>
 
                <div class="skill">
                  <div class="title">Customer-Centric Approach</div>
                  <div class="progress">
                    <div class="progress-bar p2"><span>70%</span></div>
                  </div>
                </div>
 
                <div class="skill">
                  <div class="title">Sustainable Practices</div>
                  <div class="progress">
                    <div class="progress-bar p3"><span>50%</span></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
</html>
