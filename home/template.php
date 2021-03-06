<?php

?>

<!-- Fixed navbar -->
<nav class="navbar navbar-default probootstrap-navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo esc_url( dt_custom_login_url( 'home' ) ) ?>" title="uiCookies:Frame">Location Grid</a>
    </div>

    <div id="navbar-collapse" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#" data-nav-section="home">Home</a></li>
          <li><a href="#" data-nav-section="pricing">Free</a></li>
          <li><a href="#" data-nav-section="features">Vision</a></li>
        <li><a href="#" data-nav-section="project">Download</a></li>
        <li><a href="#" data-nav-section="contact">Contact</a></li>
      </ul>
    </div>

  </div>
</nav>

<section class="probootstrap-hero prohttp://localhost/probootstrap/frame/#featuresbootstrap-slant" style="background-image: url(<?php echo esc_url( trailingslashit( plugin_dir_url( __FILE__ ) ) . 'img/1.jpg' ) ?>);" data-section="home" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row intro-text">
      <div class="col-md-8 col-md-offset-2 text-center">
        <h1 class="probootstrap-heading probootstrap-animate">Location Grid Project</h1>
          <h3 style="color:white;">a geographic framework of world locations and polygons <br>for disciple making movement saturation efforts.</h3>
        <div class="probootstrap-subheading center">
          <p class="probootstrap-animate">
              <a href="https://github.com/DiscipleTools/location-grid-project" class="btn btn-default" role="button">See Github Project</a>
          </p>
            <p>
                <a href="<?php echo esc_url( site_url() ) ?>/login"  role="button" class="btn btn-primary">Log In</a>
                <a href="<?php echo esc_url( site_url() ) ?>/login/?action=register"  role="button" class="btn btn-primary">Register</a>
            </p>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="probootstrap-section" data-section="pricing">
    <div class="container">
        <div class="row text-center mb100">
            <div class="col-md-8 col-md-offset-2 probootstrap-section-heading">
                <h2 class="mb30 text-black probootstrap-heading">The Grid is Free / Open Source</h2>
                <p>The project is offered open source / free to the movement community. In our ambition to deliver a quality, non-propriatary mapping resource to users of Disciple.Tools, we
                    want to offer the same asset and id base to the wider community.</p>
            </div>
        </div>

    </div>
</section>
<!-- END section -->


<section class="probootstrap-section probootstrap-bg-light" id="features" data-section="features">
    <div class="container">
        <div class="row text-center mb100">
            <div class="col-md-8 col-md-offset-2 probootstrap-section-heading">
                <h2 class="mb30 text-black probootstrap-heading">Vision</h2>
                <p>The Location Grid Project offers a cross-referenced grid for reporting on movement progress across the planet, while at the same time is location sensitive for activity in dangerous or anti-christian locations and compliance with increasing privacy laws like GDPR.</p>
                <p>The project serves to support the vision of consistently tracking church planting movement efforts globally in a way that allows networks and different organizations to share location sensitive reports to visualize and respond to areas of disciple making movement and areas where there is no disciple making movement.</p>
                <p>The project offers a global grid of unique location ids for countries, states, and counties, longitude/latitude, populations for those administrative areas, and the supporting geojson polygon files for lightweight application display.</p>
                <p>The polygon source data began with GADM public polygon sets and then the geojson files were generated and keyed to the grid system.</p>
                <p>The administrative boundary information (north, south, east, west) has been generated from currently available polygons by the Location Grid Project.</p>
                <p>Longitude and latitude centerpoint generated from the polygon data.</p>
                <p>The hierarchy data in columns parent_id, admin0_grid_id, admin1_grid_id, admin2_grid_id, admin3_grid_id, admin4_grid_id, admin5_grid_id has been generated by the Location Grid Project.</p>
            </div>
        </div>
        <!-- END row -->
        <div class="row mb100">
            <div class="col-md-8 col-md-pull-2 probootstrap-animate">
                <p><img src="<?php echo esc_url( trailingslashit( plugin_dir_url( __FILE__ ) ) ) ?>img/img_showcase_1.jpg" alt="Free Template by uicookies.com" class="img-responsive probootstrap-shadow"></p>
            </div>
            <div class="col-md-4 col-md-pull-1 probootstrap-section-heading">
                <h3 class="text-primary probootstrap-heading-2">List SQL table</h3>
                <p>The location grid table is a MYSQL table with 380,000 records for the administrative levels of the world. Based on the GADM polygon set. This table adds hierarchy, geonames cross-reference, bounding boxes, longitude and latitude for centerpoint, country_codes, and level descriptions.</p>

            </div>
        </div>
        <!-- END row -->
        <div class="row mb100">
            <!-- <div class="col-md-8 col-md-pull-2"> -->
            <div class="col-md-8 col-md-push-5 probootstrap-animate">
                <p><img src="<?php echo esc_url( trailingslashit( plugin_dir_url( __FILE__ ) ) ) ?>img/img_showcase_2.jpg" alt="Free Template by uicookies.com" class="img-responsive probootstrap-shadow"></p>
            </div>
            <!-- <div class="col-md-4 col-md-pull-1"> -->
            <div class="col-md-4 col-md-pull-8 probootstrap-section-heading">
                <h3 class="text-primary probootstrap-heading-2">Geometry SQL Table</h3>
                <p>The location_grid_geometry table has all polygons for each of the 380,000 administrative units cross-referenced to the location_grid table by grid_id.</p>

            </div>
        </div>
        <!-- END row -->

        <div class="row mb100">
            <div class="col-md-8 col-md-pull-2 probootstrap-animate">
                <p><img src="<?php echo esc_url( trailingslashit( plugin_dir_url( __FILE__ ) ) ) ?>img/img_showcase_1.jpg" alt="Free Template by uicookies.com" class="img-responsive probootstrap-shadow"></p>
            </div>
            <div class="col-md-4 col-md-pull-1 probootstrap-section-heading">
                <h3 class="text-primary probootstrap-heading-2">Asset Mirror</h3>
                <p>The location grid mirror is a folder containing three folders: low, high, collection. The low and high folders contain .geojson files named by grid_id containing the polygon or multipolygon for the administrative unit and properties containing name, level names, and centerpoints. Those files in the low folder are compressed for web delivery, the high folder contains full resolution polygons. The collection folder contains .geojson files named by grid_id that contain a collection of the next level administrative polygons. i.e. the {state of colorado}.geojson file contains all the counties for Colorado in the single .geojson file. Each sub-administrative unit in the collection has properties including name, lng/lat centerpoint, and admin level data.</p>

            </div>
        </div>
        <!-- END row -->

    </div>
</section>
<!-- END section -->



<section class="probootstrap-section" data-section="project">
    <div class="container">
        <div class="row text-center mb100">
            <div class="col-md-8 col-md-offset-2 probootstrap-section-heading">
                <h2 class="mb30 text-black probootstrap-heading">Download</h2>
                <p>The grid assets can be downloaded here. Please know these are very large files and you should consider if you have a sufficient internet connection and time before beginning download.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <p><img src="<?php echo esc_url( trailingslashit( plugin_dir_url( __FILE__ ) ) ) ?>img/laptop_1.jpg" alt="Free Template by uicookies.com" class="img-responsive"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="text-black probootstrap-check-2">Location Grid List Table (14mg)</h4>
                        <p>The location grid table is a MYSQL table with 380,000 records for the administrative levels of the world. Based on the GADM polygon set. This table adds hierarchy, geonames cross-reference, bounding boxes, longitude and latitude for centerpoint, country_codes, and level descriptions.</p>
                        <p><a href="https://storage.googleapis.com/location-grid-source-data/location_grid.sql.zip" class="btn btn-primary">Download</a></p>

                        <h4 class="text-black probootstrap-check-2">Location Grid Geometry Table (1.81 GB)</h4>
                        <p>The location_grid_geometry table has all polygons for each of the 380,000 administrative units cross-referenced to the location_grid table by grid_id.</p>
                        <p><a href="https://storage.googleapis.com/location-grid-source-data/location_grid_geometry.sql.zip" class="btn btn-primary">Download</a></p>
                    </div>
                    <div class="col-md-6">
                        <h4 class="text-black probootstrap-check-2">GEOJSON Asset Collection (4.06 GB)</h4>
                        <p>The location grid mirror is a folder containing three folders: low, high, collection. The low and high folders contain .geojson files named by grid_id containing the polygon or multipolygon for the administrative unit and properties containing name, level names, and centerpoints. Those files in the low folder are compressed for web delivery, the high folder contains full resolution polygons. The collection folder contains .geojson files named by grid_id that contain a collection of the next level administrative polygons. i.e. the {state of colorado}.geojson file contains all the counties for Colorado in the single .geojson file. Each sub-administrative unit in the collection has properties including name, lng/lat centerpoint, and admin level data.</p>
                        <p><a href="https://storage.googleapis.com/location-grid-source-data/location-grid-mirror.zip" class="btn btn-primary">Download</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END section -->

<section class="probootstrap-section probootstrap-bg-light" data-section="contact">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <form action="" class="probootstrap-form">
          <h2 class="text-black mt0">Get In Touch</h2>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Your Email">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Your Phone">
          </div>
          <div class="form-group">
            <textarea class="form-control"cols="30" rows="10" placeholder="Write a Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Send Message">
          </div>
        </form>
      </div>
      <div class="col-md-3 col-md-push-1">
        <ul class="probootstrap-contact-details">
          <li>
            <span class="text-uppercase">Email</span>

          </li>
          <li>
            <span class="text-uppercase">Phone</span>

          </li>
          <li>
            <span class="text-uppercase">Fax</span>

          </li>

        </ul>
      </div>
    </div>
  </div>
</section>


<footer class="probootstrap-footer">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-12">
        <p class="probootstrap-social"><a href="#"><i class="icon-twitter"></i></a> <a href="#"><i class="icon-facebook2"></i></a> <a href="#"><i class="icon-instagram2"></i></a><a href="#"><i class="icon-linkedin"></i></a></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        &copy; 2017 <a href="https://locationgrid.app/">locationgrid</a>. All Rights Reserved.
      </div>
    </div>
  </div>
</footer>


<?php // @phpcs:disable ?>
<script src="<?php echo esc_url( trailingslashit( plugin_dir_url( __FILE__ ) ) ) ?>js/scripts.min.js"></script>
<script src="<?php echo esc_url( trailingslashit( plugin_dir_url( __FILE__ ) ) ) ?>js/custom.js"></script>
<?php // @phpcs:enable ?>

