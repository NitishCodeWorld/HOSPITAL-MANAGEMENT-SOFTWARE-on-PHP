<?php
    include 'include/header.php';
    include 'include/top-header.php';
?>


<body>
    <div class="container-fluid">
        <div class="row homepage-image-n-content">
            <img src="IMAGES/image1.jpg" alt="Homepage image1" height="725" width="100%" style="opacity: 0.8;">
            <p class="homepage-bold-content">Among the nation's best.</p>
            <a href="schedule-appointment.php" id="homepage-app-schedule">Schedule your Appointment Now</a>
            <form>
                <div class="doctor-location-checkbox">
                    <a class="checkbox-area1">
                        <input type="radio" name="switch" checked="checked">
                        <p>Find a Doctor</p>
                    </a>
                    <a class="checkbox-area2">
                        <input type="radio" name="switch">
                        <p>Find a Location</p>
                    </a>
                </div>

                <div class="search-field">
                    <div class="doctor-treatment-detail">
                        <i class="fa fa-search"></i>
                        <input type="text" name="search-doctor" class="info" placeholder="Condition,treatment,speciality or doctor name">
                    </div>

                    <div class="location-detail">
                        <input type="text" name="search-location" class="info" placeholder="Locate near: City or Zip">
                        <i class="fa fa-location"></i>
                    </div>
                    <button type="submit" class="btn-design">Search</button>
                </div>
            </form>
        </div>
    </div>


  <section>
    <div class="container">
        <h1 id="care-headline" class="text-center">Care when you need it, where you need it.</h1>
        <div class="row three-info-care">
            <div class="col-sm-12 col-md-4 first-info-care">
                <h5>Vaccine Information</h5>
                <p>Find the latest information about the COVID-19 vaccine, including who CARE4U is currently 
                    distributing the vaccine to.</p>
                <button class="btn-design1">COVID-19 Vaccine Updates</button>
            </div>
            <div class="col-sm-12 col-md-4 sec-info-care">
                <h5>Same-day Appointment</h5>
                <p>For primary care & selected specialties, see provider schedules & make your own appointment
                    online, even if you're new to CARE4U.
                </p>
                <button class="btn-design1 mt-4">Schedule Online</button>
            </div>
            <div class="col-sm-12 col-md-4 third-info-care">
                <h5>CARE4U on Demand</h5>
                <p>Get quick care without an appointment for common conditions and everyday health concerns with
                    CARE4U on Demand. We have many convenient ways to see a provider, including online virtual visits.
                </p>
                <button class="btn-design1 mt-1">Get Care today</button>
            </div>
        </div>
    </div>
  </section>

  <section>
    <div class="container-fluid bg-doc-on-demand">
        <div class="row">
            <div class="col-sm-12 col-lg-6 image2-doc">
                <img src="IMAGES/image2.jpg" alt="doctor-on-demand-face" width="100%">
            </div>
            <div class="col-sm-12 col-lg-6 detail-doc-on-demand">
                <h4>CARE4U care, on demand.</h4>
                <p>Get convenient care from home for COVID-19 concerns, cold/flu, UTI, seasonal allergies, minor 
                    injuries and more. We offer multiple options for in-person and virtual care, including on-demand 
                    video visits. To get started, download the My CARE4U app or click the learn more button below.
                </p>
                <button><a href="#">Learn More</a></button>
                <div class="logos-apple-google_play">
                    <a href="#"><img src="IMAGES/apple-img.jpg" class="mt-3" alt="Apple-app-image" width="150" height="50"></a>
                    <a href="#"><img src="IMAGES/google-play.jpg" class="ml-3 mt-3" alt="Google-Play-app-image" width="150" height="50"></a>    
                </div>
            </div>
        </div>
    </div> 
  </section>

  <section>
    <div class="container-fluid slide-details-n-images">
        <div class="row">
            <div class="col-sm-12 col-lg-5 slide1-detail">
                <h4>Committed to our community</h4>
                <p>Through our efforts to dismantle health barriers and address social disparities of health,
                    CARE4U is recognized as a <span>national leader in health equity.</span></p>
                <p class="slide1-btn"><a href="#">Learn More</a></p>
            </div>
            <div class="slide1-image col-sm-12 col-lg-7">
                <img src="IMAGES/image3.jpg" alt="Community Care" width="100%">
            </div>
        </div>
    </div>
  </section>

  <section>
    <div class="container-fluid rush-stories-with-images">
        <div class="row">
            <div class="col-sm-12 col-lg-6 rs-title">
                <h4>CARE4U Stories</h4>
            </div>
            <div class="col-sm-12 col-lg-6 all-stories-click">
                <p><a href="#">View All Stories</a></p>
            </div>
        </div>

        <div class="row stories-of-rush">
            <div class="col-sm-12 col-lg-4 stories-of-rush_1">
                <p class="stories-above-below-image-info mb-1">AWARDS, RANKINGS AND RECOGNITIONS</p>
                <img src="IMAGES/stories-rush-1.jpg" alt="..." width="100%">
                <p class="stories-above-below-image-info mt-3">Twenty-Five Specialists at CARE4U Named 'Top Brain Doctors'</p>
                <p class="stories-below-image-info-second">Chicago mazagine celebrates physicians as 'best in matters of the...</p>
            </div>
            <div class="col-sm-12 col-lg-4 stories-of-rush_2">
                <p class="stories-above-below-image-info mb-1">HEALTH EQUITY</p>
                <img src="IMAGES/stories-rush-2.jpg" alt="..." width="100%">
                <p class="stories-above-below-image-info mt-3">TIME: CARE4U Health Equity Efforts a 'Blueprint' for Hospitals</p>
                <p class="stories-below-image-info-second">TIME special edition cities CARE4U community work as 'a great...</p>
            </div>
            <div class="col-sm-12 col-lg-4 stories-of-rush_3">
                <p class="stories-above-below-image-info mb-1">AWARDS, RANKINGS AND RECOGNITIONS</p>
                <img src="IMAGES/stories-rush-3.jpg" alt="..." width="100%">
                <p class="stories-above-below-image-info mt-3">CARE4U CEO Again Recognized on Modern Healthcare's 100 Most Influential People List</p>
                <p class="stories-below-image-info-second">Dr. Omar Lateef earns prestigious honour for second straight year</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-lg-6 donate-img">
                <img src="IMAGES/donate_image.jpg" alt="...">
            </div>
            <div class="homepage-donation-info">
                <h2><span class="top-lining">Giving to</span> CARE4U</h2>
                <p>You can still make a tax-deductible gift to CARE4U. From supporting excellent
                    educational resources for students to helping to provide life-changing care 
                    to patients, you can be a CARE4U champion. The impact of our people and programs 
                    is only made possible through the generosity of our donors. We hope we can 
                    count on you to make a gift of any size before the clock stricks midnight on 
                    Dec. 31.
                </p>
                <p class="mb-0"><a href="#">Donate</a></p>
            </div>
        </div>
    </div>
  </section>

</body>

<?php
    include 'include/bottom-footer.php';
?>
