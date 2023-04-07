<?php
    include 'include/header.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12 m-0 p-0">
            <div class="giving-top-header">
                <div class="giving-top-info-links">
                    <span><a href="index.php">CARE4U System Home</a></span>
                    <span><a href="#">Philanthropy News</a></span>
                    <span><a href="#">Upcoming Events</a></span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-12 m-0 p-0">
            <div class="giving-logo-line">
                <div class="col-9 col-md-6 giving-logo pr-0">
                    <img src="IMAGES/logo1.jpeg" alt="Logo" height="98">
                    <span id="hospital-name"><a href="index.php"> CARE4U</a></span>
                    <span id="giving-text">Giving</span>
                </div>
                <div class="col-3 col-md-6 giving-icons">
                    <span>
                        <a href="#"><i class="fas fa-search"></i></a>
                        <a href="#"><i class="fas fa-bars"></i></a>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-12 m-0 p-0">
            <div class="giving--ways-to-give">
                <div class="ways-to-give-links">
                    <span><a href="#">Ways to Give</a></span>
                    <span><a href="#">Why Give</a></span>
                    <span><a href="#">Contact Us</a></span>
                    <span><a href="#">About</a></span>
                    <span><a href="#">Make a Gift</a></span>
                </div>
                <div class="ways-to-give-dropdown">
                    <span onclick="sectionDropdown_show()">In this Section <i id="icon-change" class="fas fa-angle-down"></i></span>
                    <div id="giving--submenu" class="ways-to-give-dropdown-links">
                        <p><a href="#">Ways to Give</a></p>
                        <p><a href="#">Why Give</a></p>
                        <p><a href="#">Contact Us</a></p>
                        <p><a href="#">About</a></p>
                        <p><a href="#">Make a Gift</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-12 m-0 p-0">
            <div class="giving--front-image-info" id="giving--front-image">
                <img src="IMAGES/givingPage_mainImage.jpg" alt="Front Image" width="100%">
                <div class="frontImage-top-info">
                    <h1>Giving to CARE4U</h1>
                    <p>Your gift to Care4u improves health.</p>
                    <span><a href="#">Donate to Care4u University Medical Center and Care4u Oak Park Hospital</a></span>
                    <span><a href="#">Donate to Care4u Copley Medical Center</a></span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-lg-6 m-0 p-0">
            <div class="giving--total-care">
                <div class="individual-care">
                    <a href="#"><img src="IMAGES/givingPage_image_4-docs.jpg" alt="four doctors" width="100%"></a>
                    <div class="individual-care-info">
                        <p>CARE4U University Medical Center</p>
                        <h2><a href="#">Ensuring Access to Comprehensive Reproductive Health Care</a></h2>
                        <p style="color: grey; font-size: 16px">Family Planning Fund covers patient expenses for medical procedures and ancillary costs</p>
                    </div>
                </div>

                <div class="individual-care">
                    <a href="#"><img src="IMAGES/givingPage_image_army_man.jpg" alt="four doctors" width="100%"></a>
                    <div class="individual-care-info">
                        <p>CARE4U University Medical Center</p>
                        <h2><a href="#">Coming Full Circle</a></h2>
                        <p style="color: grey; font-size: 16px">Eric Chessier now champions the program that coached him through mental health challenges as an outreach coordinator.</p>
                    </div>
               </div>

               <div class="individual-care">
                    <a href="#"><img src="IMAGES/givingPage_image_old_lady.jpg" alt="four doctors" width="100%"></a>
                    <div class="individual-care-info">
                        <p>CARE4U University Medical Center</p>
                        <h2><a href="#">Nearly Five Decades of Dedication to CARE4U</a></h2>
                        <p style="color: grey; font-size: 16px">Eric Chessier now champions the program that coached him through mental health challenges as an outreach coordinator.</p>
                    </div>
               </div>
            </div>
        </div>
        <div class="col-12 col-lg-6 m-0 p-0">
            <div class="giving--total-care">               
                <h3>Philanthropy News</h3>
                <div class="individual-care-right-top">
                    <span>Ways to Give</span>
                    <h2><a href="#">Gift Planning</a></h2>
                    <p>A range of giving options can help you achieve your goals while supporting CARE4U's mission.</p>
                </div>

                <div class="individual-care-right">
                    <a href="#"><img src="IMAGES/givingPage_image_smiling-lady.jpg" alt="four doctors" width="100%"></a>
                    <div class="individual-care-info">
                        <p>CARE4U Copley Medical Center</p>
                        <h2><a href="#">‘I Felt Taken Care Of’</a></h2>
                        <p style="color: grey; font-size: 16px">Support from her care team made Diane's breast cancer treatment easier.</p>
                    </div>
               </div>

               <div class="individual-care-right">
                    <a href="#"><img src="IMAGES/givingPage_image_runing_man.jpg" alt="four doctors" width="100%"></a>
                    <div class="individual-care-info">
                        <p>CARE4U University Medical Center</p>
                        <h2><a href="#">‘I can do the things I want without restrictions. I’m the result of Dr. Nho’s work.’</a></h2>
                        <p style="color: grey; font-size: 16px">Former pro soccer player’s gift keeps the ball rolling on leading-edge joint preservation research</p>
                    </div>
               </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-12 m-0 p-0">
            <div class="giving--some-other-detail">
                <div class="some-text">
                    <h1>When You Make a Gift, You Make a Difference</h1>
                    <p>Care4u isn’t just preparing for the future; we’re preparing to lead it. </p>
                    <p style="padding-top: 20px;">And we want you to join us. Make a gift today.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row image-nd-links">
        <div class="col-12 col-md-6 col-lg-3 m-0 p-0">
            <div class="giving--bottom-image-nd-links">
                <div class="individual-image-nd-link">
                    <a href="#"><img src="IMAGES/rush--tower-sundown-feature.jpg" alt="Care4u University" width="100%"></a>
                    <p><a href="#">Care4u University Medical Center </a><i class="fas fa-play"></i></p>
                    <span><a href="#">Make a Gift </a><i class="fas fa-play"></i></span>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3 m-0 p-0">
            <div class="giving--bottom-image-nd-links">
                <div class="individual-image-nd-link">
                    <a href="#"><img src="IMAGES/rush-copley-front-giving.jpg" alt="Care4u Copley" width="100%"></a>
                    <p><a href="#">Care4u Copley Medical Center </a><i class="fas fa-play"></i></p>
                    <span><a href="#">Make a Gift </a><i class="fas fa-play"></i></span>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3 m-0 p-0">
            <div class="giving--bottom-image-nd-links">
                <div class="individual-image-nd-link">
                    <a href="#"><img src="IMAGES/roph-giving-landing.jpg" alt="Care4u Oak Hospital" width="100%"></a>
                    <p><a href="#">Care4u Oak Park Hospital </a><i class="fas fa-play"></i></p>
                    <span><a href="#">Make a Gift </a><i class="fas fa-play"></i></span>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3 m-0 p-0">
            <div class="giving--bottom-image-nd-links">
                <div class="individual-image-nd-link">
                    <a href="#"><img src="IMAGES/Rush University Children's Hospital.jpg" alt="Care4u Children's Hospital" width="100%"></a>
                    <p><a href="#">Care4u University Children's Hospital </a><i class="fas fa-play"></i></p>
                    <span><a href="#">Make a Gift </a><i class="fas fa-play"></i></span>
                </div>
            </div>
        </div>
    </div>

    <div class="row image-nd-links">
        <div class="col-12 col-md-6 col-lg-3 m-0 p-0">
            <div class="giving--bottom-image-nd-links">
                <div class="individual-image-nd-link">
                    <a href="#"><img src="IMAGES/rmc (1).jpg" alt="Care4u Medical College" width="100%"></a>
                    <p><a href="#">Care4u Medical College </a><i class="fas fa-play"></i></p>
                    <span><a href="#">Make a Gift </a><i class="fas fa-play"></i></span>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3 m-0 p-0">
            <div class="giving--bottom-image-nd-links">
                <div class="individual-image-nd-link">
                    <a href="#"><img src="IMAGES/Rush CON Anesthesia Program-34_0.jpg" alt="Care4u Nursing College" width="100%"></a>
                    <p><a href="#">Care4u University College of Nursing </a><i class="fas fa-play"></i></p>
                    <span><a href="#">Make a Gift </a><i class="fas fa-play"></i></span>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3 m-0 p-0">
            <div class="giving--bottom-image-nd-links">
                <div class="individual-image-nd-link">
                    <a href="#"><img src="IMAGES/chs.jpg" alt="Care4u Health Science College" width="100%"></a>
                    <p><a href="#">College of Health Science at Care4u University </a><i class="fas fa-play"></i></p>
                    <span><a href="#">Make a Gift </a><i class="fas fa-play"></i></span>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-3 m-0 p-0">
            <div class="giving--bottom-image-nd-links">
                <div class="individual-image-nd-link">
                    <a href="#"><img src="IMAGES/grad.jpg" alt="Care4u Graduate College" width="100%"></a>
                    <p><a href="#">Graduate College at Care4u University </a><i class="fas fa-play"></i></p>
                    <span><a href="#">Make a Gift </a><i class="fas fa-play"></i></span>
                </div>
            </div>
        </div>
    </div>

    <?php
        include 'include/bottom-footer.php';
    ?>
    
</div>

