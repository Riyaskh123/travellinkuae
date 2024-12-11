<!DOCTYPE html>

<html lang="en">



<head>
<?php include 'head.php' ?>
<!--====== Required meta tags ======-->
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Cars</title>
    <meta name="description" content="Cars" />
    <meta name="keywords" content="Cars" />
    <link rel="canonical" href="https://travellinkuae.com/cars.php" />
     <meta property="og:locale" content="en_US" />
     <meta property="og:site_name" content="Travel Link UAE" />
     <meta property="og:type" content="website" />
     <meta property="og:title" content="Cars" />
     <meta property="og:description"
         content="Cars." />
     <meta property="og:url" content="https://travellinkuae.com/cars.php" />
     <meta property="og:image"
         content="https://travellinkuae.com/img/carousel-1.jpg" />
     <meta property="og:image:secure_url"
         content="https://travellinkuae.com/img/carousel-1.jpg" />
     <meta name="twitter:card" content="summary_large_image" />
     <meta name="twitter:title" content="Cars" />
     <meta name="twitter:description"
         content="Cars" />
     <meta name="twitter:image"
         content="https://travellinkuae.com/img/carousel-1.jpg" />
</head>



<body>



    <?php include 'body.php' ?>



    <?php include 'header.php' ?>



    <!-- Header Start -->

    <div class="container-fluid bg-breadcrumb">

        <div class="container text-center py-5" style="max-width: 900px;">

            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Cars</h4>

            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">

                <li class="breadcrumb-item"><a href="index.php">Home</a></li>

                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->

                <li class="breadcrumb-item active text-primary">Cars</li>

            </ol>

        </div>

    </div>

    <!-- Header End -->



    <!-- Car categories Start -->

    <div class="container-fluid categories py-2">

        <div class="container pb-5">

            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">

                <!-- <h1 class="display-5 text-capitalize mb-3">Most Moving<span class="text-primary"> Cars</span></h1> -->

                <p class="mt-2">Discover our most popular rental cars, perfect for any journey. Each vehicle offers excellent performance, comfort, and reliability to ensure your driving experience is exceptional.</p>

            </div>

            <div class="row justify-content-center" >

                <?php

                include 'datas/cars.php';

                $cars = cars();

                for ($i = 0; $i < count($cars); $i++) {

                    ?>

                    <div class="col-12 col-md-6 col-lg-4 col-xl-3 categories-item p-4 wow fadeInUp" data-wow-delay="<?php echo $i>9 ? bcdiv($i,10,1) : "0.".$i ?>s">

                        <div class="categories-item-inner">

                            <div class="categories-img rounded-top p-2">

                                <img src="img/cars/<?php echo $cars[$i]['image'] ?>" class="img-fluid rounded-top"

                                    alt="<?php echo $cars[$i]["name"]; ?>" style="height: 180px; object-fit: contain;">

                            </div>

                            <div class="categories-content rounded-bottom p-4">

                                <!-- <h4>Mercedes Benz R3</h4> -->

                                <div class="mb-4">

                                    <h6 class="bg-white text-primary rounded-pill py-2 px-4 mb-0">Starting at

                                        <?php echo $cars[$i]["rate"]; ?> AED</h6>

                                </div>

                                <div class="row gy-2 gx-0 text-center mb-4">

                                    <div class="col-6 border-end border-white">

                                        <i class="fa fa-car text-dark"></i> <span

                                            class="text-body ms-1"><?php echo $cars[$i]["model"]; ?></span>

                                    </div>

                                    <div class="col-6 ">

                                        <i class="fa fa-users text-dark"></i> <span

                                            class="text-body ms-1"><?php echo $cars[$i]["seats"]; ?> Seats</span>

                                    </div>

                                    <div class="col-6 border-end border-white">

                                        <i class="fa fa-window-restore text-dark"></i> <span

                                            class="text-body ms-1"><?php echo $cars[$i]["doors"]; ?> Doors</span>

                                    </div>

                                    <div class="col-6">

                                        <i class="fa fa-briefcase text-dark"></i> <span

                                            class="text-body ms-1"><?php echo $cars[$i]["luggage"]; ?></span>

                                    </div>

                                </div>

                                <div class="d-flex gap-2">

                                    <a href="cardetails.php?id=<?php echo $i; ?>" class="btn btn-primary flex-fill rounded-pill">View Details</a>

                                    <a href="enquiry.php" class="btn btn-secondary flex-fill rounded-pill ">Book Now</a>

                                </div>

                            </div>

                        </div>

                    </div>

                    <?php

                }

                ?>

            </div>

        </div>

    </div>



    <!-- Car categories End -->



    <?php include 'footer.php' ?>





    <!-- JavaScript Libraries -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="lib/wow/wow.min.js"></script>

    <script src="lib/easing/easing.min.js"></script>

    <script src="lib/waypoints/waypoints.min.js"></script>

    <script src="lib/counterup/counterup.min.js"></script>

    <script src="lib/owlcarousel/owl.carousel.min.js"></script>





    <!-- Template Javascript -->

    <script src="js/main.js"></script>

</body>



</html>