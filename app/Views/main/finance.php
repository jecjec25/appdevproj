<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Calapan City</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    <link rel="icon" href="img/l.png" type="image/gif">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <?php include('include/header.php');?>
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                    <div class="col-md-6 p-5 mt-lg-5">
                    </div>
                    <br>
                <div class="col-md-6 animated fadeIn">
                    <div class="owl-carousel header-carousel">
                        <div class="owl-carousel-item">
                            <img class="img-fluid img-con" src="img/finance1.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid img-con" src="img/finance2.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid img-con" src="img/finance3.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid img-con" src="img/finance4.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid img-con" src="img/finance5.jpg" alt="">
                        </div>
                        <div class="owl-carousel-item">
                            <img class="img-fluid img-con" src="img/finance6.jpg" alt="">
                        </div>
                        
                        <div class="owl-carousel-item">
                            <img class="img-fluid img-con" src="img/finance7.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <br>
        <br>
        <form method="post">
                                    <div class="tab-content">
                                    <div id="approved" class="tab-pane active in">
                                        <table id="table" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Fiscal Year</th>
                                                    <th>Annual Regular Income</th>
                                                    <th>Change</th>
                                            </tr>
                                            </thead>
                                          <tbody>
                                          <?php foreach ($fin as $St): ?>
                                            <th><?= $St['FiscalYear'];?></th>
                                            <th><?= $St['AnnualRegularIncome']?></th>
                                            <th><?=  $St['Change'];  echo('%')?></th>
              
                                            </tbody>
                                            <?php endforeach;?>
                                        </table>

                                        </div>

                                      <div id="disapproved" class="tab-pane">
                                        <table id="table1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Resident Name</th>
                                                    <th>Findings</th>
                                                    <th>Purpose</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                            </tbody>
                                        </table>

                                        </div>


                                        </div>
                                

                                    </form>





        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>