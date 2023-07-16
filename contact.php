<?php
include 'layouts/header.php';

?>
</header>

<div class="site-blocks-cover overlay" style="background-image: url(https://a1.espncdn.com/combiner/i?img=%2Fphoto%2F2023%2F0325%2Fr1149798_1296x729_16%2D9.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-start">
      <div class="col-md-6 text-center text-md-left" data-aos="fade-up" data-aos-delay="400">
        <h1 class="bg-text-line">Contact Us</h1>
        <p class="mt-4"></p>
      </div>
    </div>
  </div>
</div>

<div class="site-section bg-light" data-aos="fade-up">
  <div class="container">
    <div class="row align-items-first">
      <div class="col-md-7">
        <form action="#" method="post" class="bg-white">

          <div class="p-3 p-lg-5 border">
            <div class="form-group row">
              <div class="col-md-6">
                <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_fname" name="c_fname" required>
              </div>
              <div class="col-md-6">
                <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="c_lname" name="c_lname" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" id="c_email" name="c_email" placeholder="" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_subject" class="text-black">Subject </label>
                <input type="text" class="form-control" id="c_subject" name="c_subject" required>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="c_message" class="text-black">Message </label>
                <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-12">
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message">
              </div>
            </div>
          </div>
        </form>
      </div>

      <div class="col-md-5">
        <div class="p-4 border mb-3 bg-white">
          <p class="mb-0">Address</p>
          <p class="mb-4">Kathmandu, koteswor, Nepal</p>

          <p class="mb-0">Phone</p>
          <p class="mb-4"><a href="#">+977 9827461729</a></p>

          <p class="mb-0">Email Address</p>
          <p class="mb-4"><a href="#">youremail@gmail.com</a></p>

        </div>

      </div>

    </div>
  </div>
</div>





<?php
include 'layouts/footer.php';

?>