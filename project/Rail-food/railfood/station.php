<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Station</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap"
    rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <!-- -----form css------ -->
  <link href="css/order.css" rel="stylesheet">

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f0f0f0;
      /* Light blue background */
    }

    header {
      text-align: center;
      padding: 20px;
      /* background-color: #ff9900; Orange header */
      color: #f0f0f0;
      background: linear-gradient(135deg, #ff6f61, #ffbc67);
    }

    .date-join p {
      color: black;
      font-size: 20px;
    }

    section {
      text-align: center;
      padding: 20px;
    }

    label {
      font-weight: bold;
      color: black;
      font-size: 20px;
    }

    select {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    @media screen and (max-width: 600px) {

      /* Styles for small screens */
      header,
      section {
        padding: 10px;
      }
    }
  </style>
</head>

<body>

  <div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <!-- Spinner End -->


    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
      <?php
            include_once('header.php');
            ?>

      <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
          <h1 class="display-3 text-white mb-3 animated slideInDown">Select Station</h1>
        </div>
      </div>
    </div>
    <!-- Navbar & Hero End -->


    <!--station Start -->
    <header>
      <h1>Order Food in Ahmedabad (12345) Train</h1>
      <div class="date-join">

        <p>Journey Date: 03-Aug-2024</p>
      </div>


      <section>
        <form class="form-inline">
          <label class="my-2 mr-2" for="inlineFormCustomSelectPref">SELECT YOUR STATION: </label>
          <div class="dropdown col-md-3" style="margin:0 auto;">
            <select name="city_id" class="form-control">
              <option class="text-center">Select Station</option>
              <?php
			foreach($station_arr as $data)
			{
			?>
              <option class="form-control text-center text-dark" value="<?php echo $data->city_id?>">
                <?php echo $data->city_name?>
              </option>
              <?php
			}
			?>
            </select>

          </div>
          <button class="btn btn-outline-info btn-sm mt-2 col-md-1" type="button"> <a href="restaurants" style="color:black;">Next</a></button>

  </div>

  </form>

  </section>
  </header>

  <!--station End -->


  <!-- Footer Start -->
  <?php
        include_once('footer.php');
        ?>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
  </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/tempusdominus/js/moment.min.js"></script>
  <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Template Javascript -->
  <script src="js/main.js"></script>
</body>

</html>