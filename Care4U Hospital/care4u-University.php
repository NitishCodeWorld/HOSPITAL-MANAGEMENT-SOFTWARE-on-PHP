<?php
    include "include/header.php";
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12 m-0 p-0">
            <div class="univ--top-header1">
                <p><a href="#">Our System: Chicago, Oak Park, Aurora <span><i class="fas fa-bars"></i></span></a></p>
            </div>
            <div class="univ--top-header2">
                <div class="univ--logo-tag">
                    <p><a href="#">CARE4U UNIVERSITY</a></p>
                    <span style="float: right;"><i class="fas fa-bars"></i></span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-12 m-0 p-0">
            <div class="univ--logo-row">
                <div class="univ--logo">
                    <h2>CARE4U UNIVERSITY</h2>
                </div>
                <div class="univ--search">
                    <div id="myCare4u">
                        <span id="myCare4u-span" onclick="univ_showOptions()">My Care4u <i class="fas fa-angle-down"></i></span>
                        <div id="myCare4u-options">
                            <p onclick="univ_showOptions1()">My Care4u <i class="fas fa-angle-up"></i></p>
                            <a href="#">For Alumini</a>
                            <a href="#">For Current Students</a>
                            <a href="#">For Faculty/Staff</a>
                            <a href="#">For Resident/Fellow</a>
                        </div>
                    </div>

                    <span><a href="#"> Find Faculty</a></span>
                    <span><a href="#"><i class="fas fa-search"></i></a></span>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-12 m-0 p-0">
            <div class="univ--top-nav-links">
                <div class="univ--nav" onmouseleave="univ_hide_options()">
                    <p onmouseover="univ_display_options()">EDUCATION AND TRAINING</p>
                    <div class="univ--nav-hover" id="univ--nav-options">
                        <p><a href="#">CARE4U Medical College</a></p>
                        <p><a href="#">College Of Nursing</a></p>
                        <p><a href="#">College Of Health Sciences</a></p>
                        <p><a href="#">The Graduate College</a></p>
                        <p><a href="#">Graduate Medical Education</a></p>
                        <p><a href="#">Center for Innovative and Lifelong Learning</a></p>
                        <p><a href="#">Academic Affairs</a></p>
                    </div>
                </div>

                <div class="univ--nav">
                    <p id="admission-link"><a href="#">ADMISSIONS</a></p>
                </div>

                <div class="univ--nav" onmouseleave="univ_hide_options1()">
                    <p onmouseover="univ_display_options1()">THE CARE4U EXPERIENCE</p>
                    <div class="univ--nav-hover" id="univ--nav-options1">
                        <p><a href="#">Practicing and Learning</a></p>
                        <p><a href="#">Our Location</a></p>
                        <p><a href="#">Care4u Community Service Initiatives Program</a></p>
                        <p><a href="#">Student Affairs</a></p>
                        <p><a href="#">Interprofessional Education at CARE4U</a></p>
                        <p><a href="#">Accessibility and Accommodations</a></p>
                        <p><a href="#">Safety and Security</a></p>
                        <p><a href="#">Student Diversity and Community Engagement</a></p>
                        <p><a href="#">Student Discloser Information</a></p>
                    </div>
                </div>

                <div class="univ--nav" onmouseleave="univ_hide_options2()">
                    <p onmouseover="univ_display_options2()">RESEARCH</p>
                    <div class="univ--nav-hover" id="univ--nav-options2">
                        <p><a href="#">Departmental Research</a></p>
                        <p><a href="#">Resources for Researches</a></p>
                        <p><a href="#">Office of Research Compliance</a></p>
                        <p><a href="#">Institute for Translational Medicine at Care4u</a></p>
                        <p><a href="#">COVID-19 Science</a></p>
                        <p><a href="#">COVID-19 for Investigators and Research Coordinators</a></p>
                        <p><a href="#">Meet Our Care4u Researchers</a></p>
                    </div>
                </div>

                <div class="univ--nav" onmouseleave="univ_hide_options3()">
                    <p onmouseover="univ_display_options3()">NEWS AND EVENTS</p>
                    <div class="univ--nav-hover" id="univ--nav-options3">
                        <p><a href="#">Health Care Education Info and Tips</a></p>
                    </div>
                </div>

                <div class="univ--nav" onmouseleave="univ_hide_options4()">
                    <p onmouseover="univ_display_options4()">ABOUT</p>
                    <div class="univ--nav-hover" id="univ--nav-options4">
                        <p><a href="#">50th Anniversary</a></p>
                        <p><a href="#">Mission, Vision and Values</a></p>
                        <p><a href="#">History of CARE4U University</a></p>
                        <p><a href="#">Fast Facts</a></p>
                        <p><a href="#">Leadership and Administration</a></p>
                        <p><a href="#">University Contacts</a></p>
                        <p><a href="#">Visitor Information</a></p>
                        <p><a href="#">Annual Report</a></p>
                        <p><a href="#">Faculty Affairs</a></p>
                        <p><a href="#">Information Services</a></p>
                        <p><a href="#">University Compliance</a></p>
                        <p><a href="#">Novel Coronavirus (COVID-19) Information</a></p>
                    </div>
                </div>

                <div class="univ--nav" onmouseleave="univ_hide_options5()">
                    <p onmouseover="univ_display_options5()">SUPPORT CARE4U</p>
                    <div class="univ--nav-hover" id="univ--nav-options5">
                        <p><a href="#">Make a Gift</a></p>
                        <p><a href="#">Ways to Give</a></p>
                        <p><a href="#">Gift Planning</a></p>
                        <p><a href="#">Donar Recognition</a></p>
                        <p><a href="#">Your Participation Matters</a></p>
                        <p><a href="#">Why Give?</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-12 m-0 p-0">
            <div class="univ--homePage-image-and-text">
                <img src="IMAGES/StudentWGreenExterior_0.jpg" alt="HomePage Image" width="100%">
                <div class="univ--aboveImgText">
                    <h1>Transforming Health Care</h1>
                    <p id="univ--para">Through Education, Research and Innovation</p>
                    <div class="first-line">
                        <p><a href="#" id="backgd-green">CARE4U Medical College</a></p>
                        <p><a href="#" id="backgd-yellow">College of Health Sciences</a></p>
                    </div>
                    <div class="sec-line">
                        <p><a href="#" id="backgd-red">College of Nursing</a></p>
                        <p><a href="#" id="backgd-blue">The Graduate College</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-12 m-0 p-0">
            <div class="univ--find-program">
                <div class="find-program-search">
                    <h1>FIND A PROGRAM</h1>
                    <div id="program-search-form">
                        <input type="search" placeholder="e.g. Neuroscience" onfocusin="form_design()" onfocusout="form_design1()"><button type="submit"><i class="fas fa-search"></i></button>
                    </div>
                </div>
                
                <div class="row univ--find-by-links">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 my-1">
                        <div class="view-link-wrap">
                            <p id="view-link1" onclick="showByInterestLinks();"><a href="#"><span class="bg-success"> Find by Interest </span><i id="byInterestIcon" class="fas fa-angle-down border-success"></i></a></p>
                            <div id="byInterestLinks">
                                <p><a href="#">Adult/Aging Care</a></p>
                                <p><a href="#">Behavioral Health</a></p>
                                <p><a href="#">Biomedical Graduate Studies</a></p>
                                <p><a href="#">Birth/Pediatrics</a></p>
                                <p><a href="#">Community/Public Health</a></p>
                                <p><a href="#">Family Care</a></p>
                                <p><a href="#">Laboratory Science</a></p>
                                <p><a href="#">Management</a></p>
                                <p><a href="#">Medical Technologies</a></p>
                                <p><a href="#">Medicine</a></p>
                                <p><a href="#">Nursing</a></p>
                                <p><a href="#">Research</a></p>
                                <p><a href="#">Supportive Therapies</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 my-1">
                        <div class="view-link-wrap">
                            <p id="view-link2" onclick="showByDegreeLinks();"><a href="#"><span class="bg-danger"> Find by Degree Type </span><i id="byDegreeIcon" class="fas fa-angle-down border-danger"></i></a></p>
                            <div id="byDegreeLinks">
                                <p><a href="#">Bachelor of Science</a></p>
                                <p><a href="#">Certificate</a></p>
                                <p><a href="#">CPE</a></p>
                                <p><a href="#">Doctor of Audiology</a></p>
                                <p><a href="#">Doctor of Medicine</a></p>
                                <p><a href="#">Doctor of Nursing Practice</a></p>
                                <p><a href="#">Doctor of Occupational Therapy</a></p>
                                <p><a href="#">Doctor of Philosophy</a></p>
                                <p><a href="#">HCE</a></p>
                                <p><a href="#">Master of Science</a></p>
                                <p><a href="#">Master of Science in Nursing</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-4 my-1">
                        <p id="view-link3"><a href="#"><span class="bg-warning text-dark" id="view-link">View All</span></a></p>
                    </div>
                </div>

                <div class="row bg-dark text-light pb-3 m-0">
                    <div class="col-12 col-lg-6 m-0 p-0">
                        <div class="univ--video-image">
                            <img src="IMAGES/viaduct-outreach-team.jpg" alt="Care4u Team Outstation Tent" width="100%">
                            <div class="play-button">
                                <i class="fal fa-play-circle" data-toggle="modal" data-target="#videoPlay"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="univ--driving-force-text">
                            <h2>A Driving Force for Health Equity</h2>
                            <p>When our community needed them most, RUSH students and faculty stepped up. Their work to protect Chicago’s most vulnerable residents from COVID-19 earned the Association of American Medical Colleges’ 2020 <a href="#">Spencer Foreman Award for Outstanding Community Engagement.</a> See what puts RUSH on the leading edge of health equity activism, this year and every year.</p>
                            <button type="button" class="btn" data-toggle="modal" data-target="#videoPlay">Watch the video</button>
                        </div>
                    </div>
                </div>     
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-12 m-0 p-0">
            <div class="news-heading">
                <h4>NEWS</h4>
            </div>           
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-12 m-0 p-0">
            <div class="univ--news-Links">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="univ--newsLinks-line1">
                            <a href="#">
                                <img src="IMAGES/respiratory-therapy-news.jpg" alt="Respiratory Therapy" width="100%">
                                <h5>CARE4U Honored With Dual APEX Awards</h5>
                                <p>CARE4U University Medical Center's respiratory care team and CARE4U University's respiratory care program both recognized</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="univ--newsLinks-line1">
                            <a href="#">
                                <img src="IMAGES/covid-variants-feature.jpg" alt="Covid-19" width="100%">
                                <h5>Antibody Properties in Plasma Can Predict COVID-19 Severity</h5>
                                <p>Researchers across CARE4U University found a correlation between inflammatory bulk IgG glycans and COVID-19 severity</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="univ--newsLinks-line1">
                            <a href="#">
                                <img src="IMAGES/us-news-badge-grad-nursing-2023.jpg" alt="Graduate Nursing" width="100%">
                                <h5>CARE4U College of Nursing Receives High Scores for Online Master’s Program</h5>
                                <p>The Generalist Entry Master’s (GEM) Clinical Nurse Leader program is ranked among the top ten nationwide in new U.S. News & World Report survey</p>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="univ--newsLinks-line1">
                            <a href="#">
                                <img src="IMAGES/krause-bone-graduation.jpg" alt="Krause Bone Graduation" width="100%">
                                <h5>Runs in the Family</h5>
                                <p>Daughter of a CARE4U Medical College dean, assistant professor Mary Katherine Krause, MS-HSM, reflects on her family’s contributions and her own leadership at the University</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="univ--newsLinks-line1">
                            <a href="#">
                                <img src="IMAGES/janice-phillips-environmental-news.jpg" alt="Environmental News" width="100%">
                                <h5>Taking Joy in Giving Back</h5>
                                <p>Janice Phillips, PhD, RN, overcame homelessness to become leader in health equity</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="univ--newsLinks-line1">
                            <a href="#">
                                <img src="IMAGES/crane-family-news.jpg" alt="Family News" width="100%">
                                <h5>CU50: ‘A CARE4U Child in More Ways Than One’</h5>
                                <p>Stephanie Crane, MD, developed CARE4U University’s global health program — and inspired her son, now a first-year student at CARE4U Medical College</p>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-12 m-0 p-0">
            <div class="univ--information-session">
                <h4>ATTEND AN INFORMTION SESSION</h4>
                <p>We host on-campus and online information sessions where you can learn more about specific programs. Click through to find an upcoming session in your program of interest.</p>
                <a href="#">See Full Events Calender</a>
            </div>
        </div>
    </div>
    
</div>







<!-- Video Model Centrered  -->
<div class="modal fade" id="videoPlay">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/x0mWJLvEHrQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>







<?php
    include "include/footer.php";
?>