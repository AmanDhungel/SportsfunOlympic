<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>
<?php
include '../layouts/headerone.php';

?>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
<link rel="stylesheet" href="../fonts/icomoon/style.css">

<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/magnific-popup.css">
<link rel="stylesheet" href="../css/jquery-ui.css">
<link rel="stylesheet" href="../css/owl.carousel.min.css">
<link rel="stylesheet" href="../css/owl.theme.default.min.css">


<link rel="stylesheet" href="../css/aos.css">

<link rel="stylesheet" href="../css/style.css">




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
iframe{
    /* margin-right: 10px; */
    /* width: 500px; */
     height: 315px;
}

.card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
  padding: 2px 16px;
}

@media screen and (max-width: 600px) {
  iframe{
    width: 300px;
     height: 215px;
  }

  body{
    width: 350px;
  }
}


</style>


<div class="container">
   
    <div class="d-flex" style="flex-wrap: wrap;">
    <div class="card" style="width: 500px; margin-right:10px;  margin-bottom: 10px;">
         <iframe width="100%" src="https://www.youtube.com/embed/T8ZOcqZfadA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <div class="container">
    <h4><b>Best Goals of football</b></h4>
    <p>Season 2022/23</p>
  </div>
</div>

<div class="card" style="width: 500px; margin-right:10px;  margin-bottom: 10px;">
<iframe width="100%" src="https://www.youtube.com/embed/LPDnemFoqVk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> <div class="container">
    <h4><b>Warriors & Lakers Instant Classic</b></h4>
    <p>2021 Play-In Tournament 🔥| NBA Classic Game</p>
  </div>
</div>

<div class="card" style="width: 500px; margin-right:10px;  margin-bottom: 10px;">
<iframe width="100%" src="https://www.youtube.com/embed/e2e_VbAjx5g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  <div class="container">
    <h4><b>The best 90 meter javelin throws</b></h4>
    <p>javelin throws from the IAAF Diamond League</p>
  </div>
</div>

<div class="card" style="width: 500px; margin-right:10px;  margin-bottom: 10px;">
<iframe width="100%" src="https://www.youtube.com/embed/uIj03RsGrJA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
   <div class="container">
    <h4><b>Men's Badminton</b></h4>
    <p> Gold Medal Match | Tokyo Replays</p>
  </div>
</div>
     </div>

    <div class="d-flex" style="flex-wrap: wrap;">
    <div class="card" style="width: 500px; margin-right:10px;  margin-bottom: 10px;">
    <iframe width="100%" src="https://www.youtube.com/embed/qEpLh1DmonY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
       <div class="container">
    <h4><b>Full Beach Volleyball Final</b></h4>
    <p>okyo 2020! | Tokyo Replays 🥇🏐</p>
  </div>
</div>

<div class="card" style="width: 500px; margin-right:10px;  margin-bottom: 10px;">
<iframe width="100%" src="https://www.youtube.com/embed/ms80nCeFYds" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
   <div class="container">
    <h4><b>🥊 Men's Boxing Super Heavyweight</b></h4>
    <p>+91kg Final | Tokyo Replays</p>
  </div>
</div>

<div class="card" style="width: 500px; margin-right:10px;  margin-bottom: 10px;">
<iframe width="100%" src="https://www.youtube.com/embed/T8ZOcqZfadA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  <div class="container">
    <h4><b>Best Goals of the Season</b></h4>
    <p>Season 2022/2023</p>
  </div>
</div>

<div class="card" style="width: 500px; margin-right:10px;  margin-bottom: 10px;">
<iframe width="100%" src="https://www.youtube.com/embed/9gyv2xh7qQw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
  <div class="container">
    <h4><b>FULL MATCH | Manchester City v Arsenal</b></h4>
    <p>Fourth Round | Emirates FA Cup 2022-23</p>
  </div>
</div>
     </div>

   
    <div class="d-flex" style="flex-wrap: wrap;">
    <div class="card" style="width: 500px; margin-right:10px;  margin-bottom: 10px;">
    <iframe width="100%" src="https://www.youtube.com/embed/rLWvkjRupK0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
       <div class="container">
    <h4><b>Diving World Cup 2021</b></h4>
    <p>Architect & Engineer</p>
  </div>
</div>


</div>

</body>
</html>