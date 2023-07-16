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

<style>
  .btn1 {
  transition-duration: 0.4s;
  color: red;
  border-color: red;
}

.btn1:hover {
  background-color: #4CAF50; /* Green */
  color: white;
  border-color: white;
}
</style>


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

<div class="slide-one-item home-slider owl-carousel">
  <div class="site-blocks-cover overlay" style="background-image: url(https://www.aljazeera.com/wp-content/uploads/2021/06/2021-06-28T220439Z_2107545029_UP1EH6S1PBPB2_RTRMADP_3_SOCCER-EURO-FRA-SWI-REPORT.jpg?resize=1800%2C1511);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-start">
        <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
          <h1 class="bg-text-line">France World Cup Championship</h1>
          <p><a href="#" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="site-blocks-cover overlay" style="background-image: url(https://fifpro.org/media/5chb3dva/lionel-messi_imago1019567000h.jpg?anchor=center&mode=crop&rnd=133202937611530000);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-start">
        <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
          <h1 class="bg-text-line">Argentina World Cup ChaimpionShip</h1>
          <p><a href="#" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p>
        </div>
      </div>
    </div>
  </div>

  <div class="site-blocks-cover overlay" style="background-image: url(https://media.cnn.com/api/v1/images/stellar/prod/230621042149-01-cristiano-ronaldo-euro-200-apps-062023-restricted.jpg?c=16x9&q=h_720,w_1280,c_fill)" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-start">
        <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
          <h1 class="bg-text-line">Protugal World Cup Championship</h1>
          <p><a href="#" class="btn btn-primary btn-sm rounded-0 py-3 px-5">Read More</a></p>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="site-section pt-0 feature-blocks-1" data-aos="fade" data-aos-delay="100">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/8/8b/Cristiano_Ronaldo_WC2022_-_01_%28cropped%29.jpg');">
          <div class="text">
            <h2 class="h5 text-white">Portugal's World Cup Championship</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repellat autem illum nostrum sit distinctio!</p>
            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('https://a1.espncdn.com/combiner/i?img=%2Fphoto%2F2022%2F1102%2Fr1085228_1296x729_16%2D9.jpg');">
          <div class="text">
            <h2 class="h5 text-white">Wales's World Cup Championship</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repellat autem illum nostrum sit distinctio!</p>
            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="p-3 p-md-5 feature-block-1 mb-5 mb-lg-0 bg" style="background-image: url('https://dailypost.ng/wp-content/uploads/2022/08/Mane.jpg');">
          <div class="text">
            <h2 class="h5 text-white">Senegal's World Cup Championship</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos repellat autem illum nostrum sit distinctio!</p>
            <p class="mb-0"><a href="#" class="btn btn-primary btn-sm px-4 py-2 rounded-0">Read More</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="site-blocks-vs site-section bg-light">
  <div class="container">


    </div>

    <div class="bg-image overlay-success rounded mb-5" style="background-image: url('../images/hero_bg_1.jpg');" data-stellar-background-ratio="0.5">

      <div class="row align-items-center">
        <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">

          <div class="text-center text-lg-left">
            <div class="d-block d-lg-flex align-items-center">
              <div class="image mx-auto mb-3 mb-lg-0 mr-lg-3">
                <img src="../images/img_1_sq.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="text">
                <h3 class="h5 mb-0 text-black">Sea Hawks</h3>
                <span class="text-uppercase small country text-black">Brazil</span>
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-12 col-lg-4 text-center mb-4 mb-lg-0">
          <div class="d-inline-block">
            <p class="mb-2"><small class="text-uppercase text-black font-weight-bold">Premier League &mdash; Round 10</small></p>
            <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h3">3:2</span></div>
            <p class="mb-0"><small class="text-uppercase text-black font-weight-bold">10 September / 7:30 AM</small></p>
          </div>
        </div>

        <div class="col-md-12 col-lg-4 text-center text-lg-right">
          <div class="">
            <div class="d-block d-lg-flex align-items-center">
              <div class="image mx-auto ml-lg-3 mb-3 mb-lg-0 order-2">
                <img src="../images/img_4_sq.jpg" alt="Image" class="img-fluid">
              </div>
              <div class="text order-1">
                <h3 class="h5 mb-0 text-black">Steelers</h3>
                <span class="text-uppercase small country text-black">London</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="row">
      <div class="col-md-12">

          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

              <div class="row align-items-center">
                <div class="col-md-12">


                  <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                    <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                      <div class="text-center text-lg-left">
                        <div class="d-block d-lg-flex align-items-center">
                          <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                            <img src="../images/img_1_sq.jpg" alt="Image" class="img-fluid">
                          </div>
                          <div class="text">
                            <h3 class="h5 mb-0 text-black">Packers</h3>
                            <span class="text-uppercase small country">Brazil</span>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                      <div class="d-inline-block">
                        <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">3:2</span></div>
                      </div>
                    </div>

                    <div class="col-md-4 col-lg-4 text-center text-lg-right">
                      <div class="">
                        <div class="d-block d-lg-flex align-items-center">
                          <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                            <img src="../images/img_4_sq.jpg" alt="Image" class="img-fluid">
                          </div>
                          <div class="text order-1 w-100">
                            <h3 class="h5 mb-0 text-black">Steelers</h3>
                            <span class="text-uppercase small country">London</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- END row -->

                  <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                    <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                      <div class="text-center text-lg-left">
                        <div class="d-block d-lg-flex align-items-center">
                          <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                            <img src="../images/img_1_sq.jpg" alt="Image" class="img-fluid">
                          </div>
                          <div class="text">
                            <h3 class="h5 mb-0 text-black">Patriots</h3>
                            <span class="text-uppercase small country">Brazil</span>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                      <div class="d-inline-block">
                        <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">3:2</span></div>
                      </div>
                    </div>

                    <div class="col-md-4 col-lg-4 text-center text-lg-right">
                      <div class="">
                        <div class="d-block d-lg-flex align-items-center">
                          <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                            <img src="../images/img_4_sq.jpg" alt="Image" class="img-fluid">
                          </div>
                          <div class="text order-1 w-100">
                            <h3 class="h5 mb-0 text-black">Cowboys</h3>
                            <span class="text-uppercase small country">London</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- END row -->

                  <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                    <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                      <div class="text-center text-lg-left">
                        <div class="d-block d-lg-flex align-items-center">
                          <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                            <img src="../images/img_1_sq.jpg" alt="Image" class="img-fluid">
                          </div>
                          <div class="text">
                            <h3 class="h5 mb-0 text-black">Raiders</h3>
                            <span class="text-uppercase small country">Brazil</span>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                      <div class="d-inline-block">
                        <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">3:2</span></div>
                      </div>
                    </div>

                    <div class="col-md-4 col-lg-4 text-center text-lg-right">
                      <div class="">
                        <div class="d-block d-lg-flex align-items-center">
                          <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                            <img src="../images/img_4_sq.jpg" alt="Image" class="img-fluid">
                          </div>
                          <div class="text order-1 w-100">
                            <h3 class="h5 mb-0 text-black">Chiefs</h3>
                            <span class="text-uppercase small country">London</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- END row -->
                <a href="matches.php">  <button class="btn d-flex justify-content-center" style="margin-top: 30px; margin-left: auto; margin-right:auto; ">See More</button></a>
                </div>

              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <div class="row align-items-center">
                <div class="col-md-12">


                  <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                    <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                      <div class="text-center text-lg-left">
                        <div class="d-block d-lg-flex align-items-center">
                          <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                            <img src="../images/img_1_sq.jpg" alt="Image" class="img-fluid">
                          </div>
                          <div class="text">
                            <h3 class="h5 mb-0 text-black">Packers</h3>
                            <span class="text-uppercase small country">Brazil</span>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                      <div class="d-inline-block">
                        <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">3:2</span></div>
                      </div>
                    </div>

                    <div class="col-md-4 col-lg-4 text-center text-lg-right">
                      <div class="">
                        <div class="d-block d-lg-flex align-items-center">
                          <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                            <img src="../images/img_4_sq.jpg" alt="Image" class="img-fluid">
                          </div>
                          <div class="text order-1 w-100">
                            <h3 class="h5 mb-0 text-black">Steelers</h3>
                            <span class="text-uppercase small country">London</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- END row -->

                  <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                    <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                      <div class="text-center text-lg-left">
                        <div class="d-block d-lg-flex align-items-center">
                          <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                            <img src="../images/img_1_sq.jpg" alt="Image" class="img-fluid">
                          </div>
                          <div class="text">
                            <h3 class="h5 mb-0 text-black">Patriots</h3>
                            <span class="text-uppercase small country">Brazil</span>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                      <div class="d-inline-block">
                        <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">3:2</span></div>
                      </div>
                    </div>

                    <div class="col-md-4 col-lg-4 text-center text-lg-right">
                      <div class="">
                        <div class="d-block d-lg-flex align-items-center">
                          <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                            <img src="../images/img_4_sq.jpg" alt="Image" class="img-fluid">
                          </div>
                          <div class="text order-1 w-100">
                            <h3 class="h5 mb-0 text-black">Cowboys</h3>
                            <span class="text-uppercase small country">London</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- END row -->

                  <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                    <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                      <div class="text-center text-lg-left">
                        <div class="d-block d-lg-flex align-items-center">
                          <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                            <img src="../images/img_1_sq.jpg" alt="Image" class="img-fluid">
                          </div>
                          <div class="text">
                            <h3 class="h5 mb-0 text-black">Raiders</h3>
                            <span class="text-uppercase small country">Brazil</span>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                      <div class="d-inline-block">
                        <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">3:2</span></div>
                      </div>
                    </div>

                    <div class="col-md-4 col-lg-4 text-center text-lg-right">
                      <div class="">
                        <div class="d-block d-lg-flex align-items-center">
                          <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                            <img src="../images/img_4_sq.jpg" alt="Image" class="img-fluid">
                          </div>
                          <div class="text order-1 w-100">
                            <h3 class="h5 mb-0 text-black">Chiefs</h3>
                            <span class="text-uppercase small country">London</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- END row -->

                </div>

              </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
              <div class="row align-items-center">
                <div class="col-md-12">


                  <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                    <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                      <div class="text-center text-lg-left">
                        <div class="d-block d-lg-flex align-items-center">
                          <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                            <img src="../images/img_1_sq.jpg" alt="Image" class="img-fluid">
                          </div>
                          <div class="text">
                            <h3 class="h5 mb-0 text-black">Packers</h3>
                            <span class="text-uppercase small country">Brazil</span>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                      <div class="d-inline-block">
                        <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">3:2</span></div>
                      </div>
                    </div>

                    <div class="col-md-4 col-lg-4 text-center text-lg-right">
                      <div class="">
                        <div class="d-block d-lg-flex align-items-center">
                          <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                            <img src="../images/img_4_sq.jpg" alt="Image" class="img-fluid">
                          </div>
                          <div class="text order-1 w-100">
                            <h3 class="h5 mb-0 text-black">Steelers</h3>
                            <span class="text-uppercase small country">London</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- END row -->

                  <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                    <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                      <div class="text-center text-lg-left">
                        <div class="d-block d-lg-flex align-items-center">
                          <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                            <img src="../images/img_1_sq.jpg" alt="Image" class="img-fluid">
                          </div>
                          <div class="text">
                            <h3 class="h5 mb-0 text-black">Patriots</h3>
                            <span class="text-uppercase small country">Brazil</span>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                      <div class="d-inline-block">
                        <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">3:2</span></div>
                      </div>
                    </div>

                    <div class="col-md-4 col-lg-4 text-center text-lg-right">
                      <div class="">
                        <div class="d-block d-lg-flex align-items-center">
                          <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                            <img src="../images/img_4_sq.jpg" alt="Image" class="img-fluid">
                          </div>
                          <div class="text order-1 w-100">
                            <h3 class="h5 mb-0 text-black">Cowboys</h3>
                            <span class="text-uppercase small country">London</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- END row -->

                  <div class="row bg-white align-items-center ml-0 mr-0 py-4 match-entry">
                    <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">

                      <div class="text-center text-lg-left">
                        <div class="d-block d-lg-flex align-items-center">
                          <div class="image image-small text-center mb-3 mb-lg-0 mr-lg-3">
                            <img src="../images/img_1_sq.jpg" alt="Image" class="img-fluid">
                          </div>
                          <div class="text">
                            <h3 class="h5 mb-0 text-black">Raiders</h3>
                            <span class="text-uppercase small country">Brazil</span>
                          </div>
                        </div>
                      </div>

                    </div>
                    <div class="col-md-4 col-lg-4 text-center mb-4 mb-lg-0">
                      <div class="d-inline-block">
                        <div class="bg-black py-2 px-4 mb-2 text-white d-inline-block rounded"><span class="h5">3:2</span></div>
                      </div>
                    </div>

                    <div class="col-md-4 col-lg-4 text-center text-lg-right">
                      <div class="">
                        <div class="d-block d-lg-flex align-items-center">
                          <div class="image image-small ml-lg-3 mb-3 mb-lg-0 order-2">
                            <img src="../images/img_4_sq.jpg" alt="Image" class="img-fluid">
                          </div>
                          <div class="text order-1 w-100">
                            <h3 class="h5 mb-0 text-black">Chiefs</h3>
                            <span class="text-uppercase small country">London</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                 
                  <!-- END row -->

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="site-section block-13 bg-primary fixed overlay-primary bg-image" style="background-image: url('images/hero_bg_3.jpg');" data-stellar-background-ratio="0.5">

  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <h2 class="text-white">More Game Highlights</h2>
      </div>
    </div>

    <div class="row">
      <div class="nonloop-block-13 owl-carousel">
        <div class="item">
          <!-- uses .block-12 -->
          <div class="block-12">
            <figure>
              <img src="../images/img_1.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="../images/img_2.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="../images/img_3.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="../images/img_4.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <!-- uses .block-12 -->
          <div class="block-12">
            <figure>
              <img src="../images/img_1.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="../images/img_2.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="../images/img_3.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="../images/img_4.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <!-- uses .block-12 -->
          <div class="block-12">
            <figure>
              <img src="../images/img_1.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="../images/img_2.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="../images/img_3.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="../images/img_4.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>
        <div class="item">
          <!-- uses .block-12 -->
          <div class="block-12">
            <figure>
              <img src="../images/img_1.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="../images/img_2.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="../images/img_3.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>

        <div class="item">
          <div class="block-12">
            <figure>
              <img src="../images/img_4.jpg" alt="Image" class="img-fluid">
            </figure>
            <div class="text">
              <span class="meta">May 20th 2018</span>
              <div class="text-inner">
                <h2 class="heading mb-3"><a href="#" class="text-black">World Cup Championship</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad culpa, consectetur! Eligendi illo, repellat repudiandae cumque fugiat optio!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a href="team.php">  <button class="btn d-flex justify-content-center" style="margin-top: 30px; margin-left: auto; margin-right:auto;">See More</button></a>
  </div>

</div>

<div class="site-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-12 text-center">
        <h2 class="text-black">Latest News</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="post-entry">
          <div class="image">
            <img src="https://img.fcbayern.com/image/upload/t_cms-4x3-seo/v1601372381/cms/public/images/fcbayern-com/media/images/homepage/teams/gegner/realmadrid_ima_020414.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="text p-4">
            <h2 class="h5 text-black"><a href="#">RealMad vs Bryan Who Will Win?</a></h2>
            <span class="text-uppercase date d-block mb-3"><small>By Colorlib &bullet; Sep 25, 2018</small></span>
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat beatae doloremque, ex corrupti perspiciatis.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="post-entry">
          <div class="image">
            <img src="../images/img_2.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="text p-4">
            <h2 class="h5 text-black"><a href="#">Arsenal vs Man UTD. Who Will Win?</a></h2>
            <span class="text-uppercase date d-block mb-3"><small>By Colorlib &bullet; Sep 25, 2018</small></span>
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat beatae doloremque, ex corrupti perspiciatis.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="post-entry">
          <div class="image">
            <img src="../images/img_3.jpg" alt="Image" class="img-fluid">
          </div>
          <div class="text p-4">
            <h2 class="h5 text-black"><a href="#">Tottenham vs Lencester Who Will Win?</a></h2>
            <span class="text-uppercase date d-block mb-3"><small>By Colorlib &bullet; Sep 25, 2018</small></span>
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat beatae doloremque, ex corrupti perspiciatis.</p>
          </div>
        </div>
      </div>
    </div>
   <a href="news.php">  <button class="btn d-flex justify-content-center" style="margin-top: 30px; margin-left: auto; margin-right:auto;">See More</button></a>
  </div>
</div>

<?php
include '../layouts/footerone.php';

?>


