<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Single Listing</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
</head>

<body>
    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area height-700 bg-img bg-overlay" style="background-image: url(<?php echo base_url('uploads/'.$media[0]['Media_name']) ?>)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-content">
<!--                         <div class="map-ratings-review-area d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><img src="img/core-img/map.png" alt=""></a>
                            <a href="#">8.7</a>
                            <a href="#">Write a review</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Single Listing Area Start ***** -->
    <section class="dorne-single-listing-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Single Listing Content -->
                <div class="col-12 col-lg-8">
                    <div class="single-listing-content">

                        <div class="listing-title">
                            <h4><?php echo $details[0]['Listing_name'] ?></h4>
                            <h6>Area: <?php echo $details[0]['Location_no'] ?></h6>
                        </div>

                        <div class="single-listing-nav">
                            <nav>
                                <ul id="listingNav">
                                    <li class="active"><a href="#overview">Overview</a></li>
                                    <li><a href="#menu">Features</a></li>
                                    <li><a href="#review">Reviews</a></li>
                                    <li><a href="#lomap">Location on map</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div class="overview-content mt-50" id="overview">
                            <p><?php echo $details[0]['Description'] ?></p>
                            <div class="row mt-5">
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Accepts Credit Cards</span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Bike Parking</span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Wireless Internet</span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Reservations</span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Privat Parking</span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Smoking Area</span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Wheelchair Accesible</span>
                                    </label>
                                </div>
                                <div class="col-6">
                                    <label class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">Coupons</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="listing-menu-area mt-100" id="menu">
                            <h4>Features</h4>

                        </div>

                        <div class="listing-reviews-area mt-100" id="review">
                            <h4>Reviews</h4>
                            <div class="single-review-area">
                                <div class="reviewer-meta d-flex align-items-center">
                                    <img src="img/clients-img/1.jpg" alt="">
                                    <div class="reviewer-content">
                                        <div class="review-title-ratings d-flex justify-content-between">
                                            <h5>“The best Burger in town”</h5>
                                            <div class="ratings">
                                                <img src="img/clients-img/star-fill.png" alt="">
                                                <img src="img/clients-img/star-fill.png" alt="">
                                                <img src="img/clients-img/star-fill.png" alt="">
                                                <img src="img/clients-img/star-fill.png" alt="">
                                                <img src="img/clients-img/star-fill.png" alt="">
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta lorem blandit aliquam eget quis ipsum. Vivamus accumsan consequat ligula non volutpat.</p>
                                    </div>
                                </div>
                                <div class="reviewer-name">
                                    <h6>Christinne Smith</h6>
                                    <p>12 November 2017</p>
                                </div>
                            </div>
                            <div class="single-review-area">
                                <div class="reviewer-meta d-flex align-items-center">
                                    <img src="img/clients-img/1.jpg" alt="">
                                    <div class="reviewer-content">
                                        <div class="review-title-ratings d-flex justify-content-between">
                                            <h5>“Quality ingredients”</h5>
                                            <div class="ratings">
                                                <img src="img/clients-img/star-fill.png" alt="">
                                                <img src="img/clients-img/star-fill.png" alt="">
                                                <img src="img/clients-img/star-fill.png" alt="">
                                                <img src="img/clients-img/star-fill.png" alt="">
                                                <img src="img/clients-img/star-unfill.png" alt="">
                                            </div>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ac nibh sed mi ullamcorper rhoncus. Curabitur pulvinar vel augue sit amet vestibulum. Proin tempus lacus porta lorem blandit aliquam eget quis ipsum. Vivamus accumsan consequat ligula non volutpat.</p>
                                    </div>
                                </div>
                                <div class="reviewer-name">
                                    <h6>Michael Brown</h6>
                                    <p>12 November 2017</p>
                                </div>
                            </div>
                        </div>

                        <div class="location-on-map mt-50" id="lomap">
                            <h4>Location on map</h4>
                            <div class="location-map">
                                <div id="locationMap"></div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Listing Sidebar -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="listing-sidebar">

                        <!-- Listing Verify -->
                        <div class="listing-verify">
                            <a href="#" class="btn dorne-btn w-100"><i class="fa fa-check pr-3"></i> Verified Listing</a>
                        </div>

                        <!-- Author Widget -->
                        <div class="author-widget mt-50 d-flex align-items-center">
                            <img src="img/clients-img/1.jpg" alt="">
                            <div class="authors-name">
                                <a href="#">James Smith</a>
                                <p>The Author</p>
                            </div>
                        </div>

                        <!-- Contact Form -->
                        <div class="contact-form contact-form-widget mt-50">
                            <h6>Contact Business</h6>
                            <form action="#">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="text" name="name" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-12">
                                        <input type="email" name="email" class="form-control" placeholder="Email Address">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" id="Message" cols="30" rows="10" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn dorne-btn">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Single Listing Area End ***** -->
</body>

</html>