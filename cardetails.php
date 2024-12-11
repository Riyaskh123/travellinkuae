<!DOCTYPE html>
<html lang="en">
<?php
include 'datas/cars.php';
if (!isset($_REQUEST["id"])) {
    die("Not allow to enter");
}
$index = $_REQUEST["id"];
$car = cars()[$index]
    ?>

<?php include 'head.php' ?>

<body>

    <?php include 'body.php' ?>

    <?php include 'header.php' ?>

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s"><?php echo $car["name"] ?></h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="cars.php">Cars</a></li>
                <li class="breadcrumb-item active text-primary"><?php echo $car["name"] ?></li>
            </ol>
        </div>
    </div>
    <!-- Header End -->


    <div class="container position-relative mb-3 bg-white rounded p-4 shadow-lg" style="margin-top: -6rem">
        <div class="row">
            <div class="col-md-5">
                <img src="img/cars/<?php echo $car["image"] ?>" class="w-100 " />
            </div>
            <div class="col-md-7 align-item-center">
                <div class="row bg-success w-100 justify-content-between p-1">
                    <h6 class="col-6 col-md-3 p-2 text-white m-0 rounded"> <i class="fa fa-car text-white"></i>
                        <?php echo $car["model"] ?>
                    </h6>
                    <h6 class="col-6 col-md-3 p-2 text-white m-0 rounded"><i class="fa fa-users text-white"></i>
                        <?php echo $car["seats"] ?> Seats
                    </h6>
                    <h6 class="col-6 col-md-3 p-2 text-white m-0 rounded"><i
                            class="fa fa-window-restore text-white"></i> <?php echo $car["doors"] ?> Doors</h6>
                    <h6 class="col-6 col-md-3 p-2 text-white m-0 rounded"><i class="fa fa-briefcase text-white"></i>
                        <?php echo $car["luggage"] ?></h6>
                </div>
                <div class="row p-2">
                    <div class="col-md-6 rounded">
                        <p class="mb-1"><i class="fa fa-check-circle text-success me-1"></i> Air Conditioning</p>
                        <p class="mb-1"><i class="fa fa-check-circle text-success me-1"></i> Audio input</p>
                        <p class="mb-1"><i class="fa fa-check-circle text-success me-1"></i> All Wheel drive</p>
                        <p class="mb-1"><i class="fa fa-check-circle text-success me-1"></i> DVD Video System</p>
                        <p class="mb-1"><i class="fa fa-check-circle text-success me-1"></i> GPS Navigation</p>
                        <p class="mb-1"><i class="fa fa-check-circle text-success me-1"></i> Keyless Entry</p>
                    </div>
                    <div class="col-md-6 rounded">
                        <p class="mb-1"><i class="fa fa-check-circle text-success me-1"></i> Roadside Assistance</p>
                        <p class="mb-1"><i class="fa fa-check-circle text-success me-1"></i> Theft Protection</p>
                        <p class="mb-1"><i class="fa fa-check-circle text-success me-1"></i> Cruise Control</p>
                        <p class="mb-1"><i class="fa fa-check-circle text-success me-1"></i> Heated seats</p>
                        <p class="mb-1"><i class="fa fa-check-circle text-success me-1"></i> Sunroof</p>
                        <p class="mb-1"><i class="fa fa-check-circle text-success me-1"></i> Third Row Seat</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pb-5">
        <div class="row g-2">
            <?php
            for ($i = 0; $i < count($car["detailImages"]); $i++) {
                ?>
                <div class="col-md-6 col-lg-3">
                    <img src="img/cars/cardetails/<?php echo $car["detailImages"][$i] ?>" class="img-fluid" />
                </div>
                <?php
            }
            ?>
            <!-- <div class="col-md-6 col-lg-3">
                <img src="img/about-img-1.jpg" class="img-fluid" />
            </div>
            <div class="col-md-6 col-lg-3">
                <img src="img/about-img-1.jpg" class="img-fluid" />
            </div>
            <div class="col-md-6 col-lg-3">
                <img src="img/about-img-1.jpg" class="img-fluid" />
            </div>
            <div class="col-md-6 col-lg-3">
                <img src="img/about-img-1.jpg" class="img-fluid" />
            </div> -->
        </div>
    </div>

    <a href="enquiry.php" class="book-float">
        <span>B</span>
        <span>O</span>
        <span>O</span>
        <span>K</span>
        <span>&nbsp;</span>
        <span>N</span>
        <span>O</span>
        <span>W</span>
    </a>

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