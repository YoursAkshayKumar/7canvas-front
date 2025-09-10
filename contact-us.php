<?php include('includes/head.php'); ?>
<?php include('includes/header.php'); ?>


<!-- Page Header -->
<div class="page_header">
    <div class="page_header_inner">
        <div class="container">
            <div class="page_header_content d-flex align-items-center justify-content-between">
                <h2 class="heading">Contact</h2>
                <ul class="breadcrumb d-flex align-items-center">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- Main Wrapper-->
<main class="wrapper">
    <section class="gmap box_padding">
        <div class="gmapbox" data-aos="zoom-in" data-aos-duration="1000">
            <!-- <div id="googleMap" class="map"></div> -->

            <div class="mapouter"><div class="gmap_canvas">
                <iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=1240&amp;height=630&amp;hl=en&amp;q=MSEVEN COMPLEX, First Floor, Shop 15, A Block, Pallavpuram, Meerut, Uttar Pradesh 250110&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://embed-googlemap.com">embed-googlemap.com</a></div><style>.mapouter{position:relative;text-align:right;width:1240px;height:630px;}.gmap_canvas {overflow:hidden;background:none!important;width:1240px;height:630px;}.gmap_iframe {width:1240px!important;height:630px!important;}</style></div>

        </div>
    </section>

    <section class="contact_us bg-dark-200">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5" data-aos="fade-right" data-aos-duration="1000">
                    <div class="section-header">
                        <h1 class="text-white text-uppercase mb-4">LET’S DISCUSS NEXT PROJECTS</h1>
                        <p class="$gray-600">The talent at Mrittik runs wide and deep. Across many markets, geographies and typologies, our team members are some of the finest professionals in the industry.. We’ve grouped our work into five categories: places, venues, spaces, experiences and events.</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000">
                    <div class="home_contact">
                        <form action="contact.php" method="POST">
                            <input class="form-control form-control-lg" name="name" id="name" type="text" placeholder="Your Name*" required aria-label=".form-control-lg example">
                            <input class="form-control form-control-lg" name="phone" id="phone" type="number" placeholder="Your Phone No" aria-label=".form-control-lg example">
                            <input class="form-control form-control-lg" name="email" id="email" type="email" placeholder="Your Email*" required aria-label=".form-control-lg example">
                            <textarea class="form-control pt-4" name="message" id="message" placeholder="Your Message" rows="3"></textarea>
                            <div class="btn_group">
                                <button type="submit" class="btn olive">Send Mail</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Grid Lines -->
        <ul class="grid_lines d-none d-md-flex justify-content-between">
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
            <li class="grid_line"></li>
        </ul>
    </section>
</main>

<?php include('includes/footer.php'); ?>
<?php include('includes/scripts.php'); ?>