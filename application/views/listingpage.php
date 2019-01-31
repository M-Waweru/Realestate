<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Listings</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">
</head>

<body>
    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(<?php echo base_url() ?>img/homepage-img/nairobiorangesky.jpg)"></div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Listing Destinations Area Start ***** -->
    <section class="dorne-listing-destinations-area section-padding-100-50">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading dark text-center">
                        <span></span>
                        <h4>Featured Listings</h4>
                        <h5>For <?php echo $pagename ?></h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Features Area -->
                <?php 
                if (empty($pagedata)){
                    echo "<h5>No Results found</h5>";
                    // print_r($pagedata);
                } else {
                    // print_r($pagedata);
                    foreach ($pagedata as $key => $value) {
                        echo "<div class='col-12 col-sm-6 col-lg-4'>";
                        echo "<div class='single-features-area mb-50'>";
                        echo "<a href='".base_url('listing/singlelisting?listing_no='.$pagedata[$key]['Listing_no'])."'>";
                        echo "<img src='".base_url()."uploads/".$pagedata[$key]['Media_name']."' alt=''>";
                        echo "<!-- Price -->";
                        echo "<div class='price-start'>";
                        echo "<p>For ".$pagedata[$key]['Type_name']."</p>";
                        echo "</div>";
                        echo "<div class='feature-content d-flex align-items-center justify-content-between'>";
                        echo "<div class='feature-title'>";
                        echo "<h5>".$pagedata[$key]['Listing_name']."</h5>";
                        echo "<p>In ".$pagedata[$key]['Area_name']."</p>";
                        echo "</div>";
                        echo "<div class='feature-favourite'>";
                        echo "<h5 class='text-danger' >Ksh. ".$pagedata[$key]['Price']."</h5>";
                        echo "</div>";
                        echo "</div>";
                        echo "</a>";
                        echo "</div>";
                        echo "</div>";
                    }
                } 

                ?>
            </div>
        </div>
    </section>
    <!-- ***** Listing Destinations Area End ***** -->
</body>

</html>