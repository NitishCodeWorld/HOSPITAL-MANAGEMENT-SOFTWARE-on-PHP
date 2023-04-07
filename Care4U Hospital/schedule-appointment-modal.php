<?php
    include 'include/header.php';
    include 'include/top-header.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="schedule-appointment-heading">
                <p><i class="fas fa-home"></i> - Schedule Online</p>
            </div>
        </div>
    </div>

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
                        <a href="MyChart.php">Log in to MyChart</a>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="patient-mychart-login">
                        <h4>New Patient :</h4>
                        <p>If you have not received care at RUSH before, choose this option to make an appointment.</p>
                        <a href="#">Schedule Your Appointment</a>
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