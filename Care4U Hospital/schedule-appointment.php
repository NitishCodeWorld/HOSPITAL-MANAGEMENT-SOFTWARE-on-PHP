<?php
    include 'include/header.php';
    include 'include/top-header.php';
?>

    <div class="container-fluid pb-5">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="schedule-appointment-heading">
                    <h1>Schedule Your Medical Appointment at CARE4U</h1>
                    <p><i class="fas fa-home"></i> - Schedule Your Medical Appointment at CARE4U</p>
                </div>
            </div>
        </div>

        <div class="row user-benefit-links">
            <div class="col-12 col-md-4 link">
                <a href="#" data-toggle="modal" data-target="#scheduleOnlineModal"><h3>Schedule Online</h3></a>
                <p>If you're a new patient, start here. You can make your own in-person or video visit appointment online, for primary care and for selected specialities.</p>
                <a href="#" data-toggle="modal" data-target="#scheduleOnlineModal">Schedule Online </a><i class="fas fa-caret-right"></i>
            </div>
            <div class="col-12 col-md-4 link">
                <h3>Schedule with MyChart</h3>
                <p>If you’re a current patient, start here. You can schedule an appointment or get contact information for past providers.</p>
                <a href="#">Start Here </a><i class="fas fa-caret-right"></i>
            </div>
            <div class="col-12 col-md-4 link">
                <h3>CARE4U On Demand</h3>
                <p>Get quick care without an appointment for common conditions and everyday health concerns with CARE4U On Demand. We have many convenient ways to see a provider, including online virtual visits.</p>
                <a href="#">Get Care Today </a><i class="fas fa-caret-right"></i>
            </div>
        </div>

        <div class="row user-benefit-links">
            <div class="col-12 col-md-4 link">
               <h3>Call (888) 352-CARE4U (7874)</h3>
                <p>We’re available Monday through Friday, 8 a.m. to 5 p.m., and Saturday, 8 a.m. to 1 p.m., to help you make an appointment.</p>
                <a href="#">Schedule An Appointment </a><i class="fas fa-caret-right"></i>
            </div>
            <div class="col-12 col-md-4 link">
                <h3>Request An Appointment</h3>
                <p>Fill out the request form and we’ll respond within one or two business days to help you make an appointment.</p>
                <a href="#">Send Us a Request </a><i class="fas fa-caret-right"></i>
            </div>
            <div class="col-12 col-md-4 link">
                <h3>Find a Walk-in Care Location</h3>
                <p>CARE4U has walk-in care locations in Chicago's western suburbs.</p>
                <a href="#">Select a Location <span id="add-icon">+</span></a>
            </div>
        </div>
            
        <div class="row user-benefit-links" style="padding: 0px 260px;">
            <div class="col-12 col-md-6 link">
                <h3>Request DispatchHealth At-Home Care</h3>
                <p>Get affordable same-day in-person medical care for minor to severe injuries and illnesses in the comfort and convenience of your home. Available 7 days a week, including holidays. Care is available for adults, seniors and children ages three months and older</p>
                <a href="#">Learn More and Request a Visit </a><i class="fas fa-caret-right"></i>
            </div>
            <div class="col-12 col-md-6 link">
                <h3>COVID-19 Testing and Vaccinations</h3>
                <p>Schedule a COVID-19 test in Chicago or Oak Park or learn how to get a COVID-19 vaccine at a RUSH location.</p>
                <a href="#">Schedule a Test <i class="fas fa-caret-right"></i></a>
                <a href="#">Learn How to Get a Vaccine </a><i class="fas fa-caret-right"></i>
            </div>
        </div>       
    </div>




    <!-- Model -->
    <div class="modal" id="scheduleOnlineModal" data-backdrop="static">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </div>
                <div class="modal-body bg-light">
                <div class="row">
        <div class="col-12 col-md-12 m-0 p-0">
            <div class="mainPage">
                <div class="heading-line">
                    <h3>Are You a New or Returning Patient?</h3>
                    <p>Only select the new patient option if you have not received care at CARE4U before. Otherwise, we may need to contact you or reschedule your appointment.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-md-12 m-0 p-0">
            <div class="patient-appointment-links">
                <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="patient-mychart-login">
                        <h4>Returning Patient :</h4>
                        <p>If you have received care at CARE4U before, make an appointment using your MyChart account.</p>
                        <a href="MyChart.php" target="_blank">Log in to MyChart</a>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="patient-mychart-login">
                        <h4>New Patient :</h4>
                        <p>If you have not received care at RUSH before, choose this option to make an appointment.</p>
                        <a href="schedule-new-appointment.php" target="_blank">Schedule Your Appointment</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
                </div>
            </div>
        </div>
    </div>




    

<?php
    include 'include/bottom-footer.php';
?>

</body>