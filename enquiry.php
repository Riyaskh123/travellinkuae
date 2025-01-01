<!DOCTYPE html>

<html lang="en">

<head>
<?php include 'head.php' ?>
<!--====== Required meta tags ======-->
    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Enquire Now</title>
    <meta name="description" content="Enquire Now" />
    <meta name="keywords" content="Our Services" />
    <link rel="canonical" href="https://travellinkuae.com/enquiry.php" />
     <meta property="og:locale" content="en_US" />
     <meta property="og:site_name" content="Travel Link UAE" />
     <meta property="og:type" content="website" />
     <meta property="og:title" content="Enquire Now" />
     <meta property="og:description"
         content="Enquire Now" />
     <meta property="og:url" content="https://travellinkuae.com/enquiry.php" />
     <meta property="og:image"
         content="https://travellinkuae.com/img/about-img-1.jpg" />
     <meta property="og:image:secure_url"
         content="https://travellinkuae.com/img/about-img-1.jpg" />
     <meta name="twitter:card" content="summary_large_image" />
     <meta name="twitter:title" content="Enquire Now" />
     <meta name="twitter:description"
         content="Enquire Now" />
     <meta name="twitter:image"
         content="https://travellinkuae.com/img/about-img-1.jpg" />
</head>

<!DOCTYPE html>
<html lang="en">

<body>
    <?php include 'body.php' ?>

    <?php include 'header.php' ?>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Enquiry</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active text-primary">Inquiry</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container py-2">
            <div class="row g-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-secondary p-5 rounded">
                        <h4 class="text-primary mb-4">Send Your Message</h4>
                        <form action="include/mailsent.php" method="POST" id="enquiryForm" onSubmit="return get_action(this)">
                            <div class="row g-4">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Whatsapp Number" required>
                                        <label for="phone">Your Whatsapp Number with Country Code</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <select class="form-control" id="service" name="service" onchange="serviceChangeAction(this)">
                                            <option value="Luxury Chauffer Service">Luxury Chauffer Service</option>
                                            <option value="Water Activity">Water Activity</option>
                                            <option value="Dessert Safari">Dessert Safari</option>
                                            <option value="Yacht">Yacht</option>
                                        </select>
                                        <label for="service">Choose Service</label>
                                    </div>
                                </div>
                                <div class="col-12" id="cars">
                                    <div class="form-floating">
                                        <select class="form-control" name="car">
                                            <option value="LEXUS">LEXUS</option>
                                            <option value="AUDI A6">AUDI A6</option>
                                            <option value="BMW 5 SERIES">BMW 5 SERIES</option>
                                            <option value="TESLA X">TESLA X</option>
                                            <option value="BMW 7 SERIES">BMW 7 SERIES</option>
                                            <option value="AUDI A8">AUDI A8</option>
                                            <option value="MERCEDES S CLASS">MERCEDES S CLASS</option>
                                            <option value="GRAND CARNIVAL">GRAND CARNIVAL</option>
                                            <option value="GMC YUKON DENALI">GMC YUKON DENALI</option>
                                            <option value="MERCEDES V CLASS">MERCEDES V CLASS</option>
                                            <option value="TOYOTA HIGHLANDER">TOYOTA HIGHLANDER</option>
                                            <option value="TAHOE SUBRWAL">TAHOE SUBRWAL</option>
                                            <option value="CADILLAC ESCALADE">CADILLAC ESCALADE</option>
                                        </select>
                                        <label for="car">Select Car</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 160px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="g-recaptcha" data-sitekey="6Lf1H3wqAAAAAKRFuWx5gHmepERmwsCHMaK_MDCD"></div>
                                    <span id="captcha" style="color:red"></span>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-light w-100 py-3">Request Book</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <?php include 'footer.php' ?>

    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    
    <script>
        function get_action(form) {
            var v = grecaptcha.getResponse();
            if (v.length == 0) {
                document.getElementById('captcha').innerHTML = "You can't leave Captcha Code empty";
                return false;
            }
            else {
                document.getElementById('captcha').innerHTML = "Captcha completed";
                return true;
            }
        }
    </script>

    <script>
        const carInput = document.getElementById("cars");
        const serviceChangeAction = (e) => {
            if (e.value != "Luxury Chauffer Service") {
                carInput.style.display = "none";
            } else {
                carInput.style.display = "block";
            }
        }
    </script>
    
    <?php
if (isset($_REQUEST['e'])) { ?>
    <div class="modal-box">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg show-modal" data-toggle="modal" data-target="#myModal">
            view modal
        </button>
        <!-- Modal -->
        <div class="modal fade" id="myModal" data-backdrop="static" tabindex="-1" role="dialog"
            aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <div class="modal-body">
                        <div class="modal-icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <h3 class="title">Thank you!</h3>
                        <p class="description">Your Booking submission was successful. Our Team will contact you back as soon. If our team does not respond , please reach out whastapp or call us. </p>
                        <h4 class="number"><i class="fa fa-whatsapp"></i>&nbsp;+971 5243 12436</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    $('#myModal').modal('show'); </script>
    <?php
}
?>
</body>

</html>
