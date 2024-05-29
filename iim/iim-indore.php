<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MBATOZ - IIM Indore</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>


  <main id="main">
  <?php
  include "../header.php";
  ?>

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div style="text-align:center;">
          <h2>IIM Indore CS Score</h2>
          <!-- <ol>
            <li><a href="index.php">Home</a></li>
            <li>Inner Page</li>
          </ol> -->
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page pt-4">
      <div class="container">
        <div class="formbold-main-wrapper">
          <!-- Author: FormBold Team -->
          <!-- Learn More: https://formbold.com -->
          <div class="formbold-form-wrapper">
            <form action="https://formbold.com/s/FORM_ID" method="POST">
                <div class="formbold-input-flex">
                  <div>
                      <label for="firstname" class="formbold-form-label"> CAT Score</label>
                      <input
                      type="number"
                      name=""
                      id=""
                      placeholder=""
                      class="formbold-form-input"
                      />
                  </div>
                </div>
                <div class="formbold-input-flex">
                  <div>
                      <label for="firstname" class="formbold-form-label"> Class 10 Score</label>
                      <input
                      type="number"
                      name=""
                      id=""
                      placeholder=""
                      class="formbold-form-input"
                      />
                  </div>
                </div>
                <div class="formbold-input-flex">
                  <div>
                      <label for="firstname" class="formbold-form-label"> PI Score</label>
                      <input
                      type="number"
                      name=""
                      id=""
                      placeholder=""
                      class="formbold-form-input"
                      />
                  </div>
                </div>
              <hr>
        
                <button class="formbold-btn">
                    Calculate
                </button>
            </form>
          </div>
        </div>
        <style>
          @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
          * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
          }
          body {
            font-family: "Inter", sans-serif;
          }
          .formbold-main-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px;
          }
        
          .formbold-form-wrapper {
            margin: 0 auto;
            max-width: 550px;
            width: 100%;
            background: white;
          }
        
          .formbold-input-flex {
            display: flex;
            gap: 20px;
            margin-bottom: 15px;
          }
          .formbold-input-flex > div {
            width: 100%;
          }
        
          .formbold-input-radio-wrapper {
            margin-bottom: 28px;
          }
          .formbold-radio-flex {
            display: flex;
            align-items: center;
            gap: 15px;
          }
          .formbold-radio-label {
            font-size: 14px;
            line-height: 24px;
            color: #07074D;
            position: relative;
            padding-left: 25px;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
          }
          .formbold-input-radio {
            position: absolute;
            opacity: 0;
            cursor: pointer;
          }
          .formbold-radio-checkmark {
            position: absolute;
            top: -1px;
            left: 0;
            height: 18px;
            width: 18px;
            background-color: #FFFFFF;
            border: 1px solid #DDE3EC;
            border-radius: 50%;
          }
          .formbold-radio-label .formbold-input-radio:checked ~ .formbold-radio-checkmark {
            background-color: #007aff;
          }
          .formbold-radio-checkmark:after {
            content: "";
            position: absolute;
            display: none;
          }
        
          .formbold-radio-label .formbold-input-radio:checked ~ .formbold-radio-checkmark:after {
            display: block;
          }
        
          .formbold-radio-label .formbold-radio-checkmark:after {
            top: 50%;
            left: 50%;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #FFFFFF;
            transform: translate(-50%, -50%);
          }
        
          .formbold-form-input {
            width: 30%;
            padding: 6px 22px;
            border-radius: 5px;
            border: 1px solid #DDE3EC;
            background: #FFFFFF;
            font-weight: 500;
            font-size: 16px;
            color: #07074D;
            outline: none;
            resize: none;
          }
          .formbold-form-input::placeholder {
            color: #536387;
          }
          .formbold-form-input:focus {
            border-color: #6a64f1;
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
          }
          .formbold-form-label {
            color: #07074D;
            font-size: 14px;
            line-height: 24px;
            /* display: block; */
            margin-bottom: 10px;
            min-width: 50%;
          }
        
          .formbold-btn {
            text-align: center;
            width: 100%;
            font-size: 16px;
            border-radius: 5px;
            padding: 14px 25px;
            border: none;
            font-weight: 500;
            background-color: #007aff;
            color: white;
            cursor: pointer;
            margin-top: 25px;
          }
          .formbold-btn:hover {
            box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
          }
        
        </style>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  include "../footer.php";
  ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>