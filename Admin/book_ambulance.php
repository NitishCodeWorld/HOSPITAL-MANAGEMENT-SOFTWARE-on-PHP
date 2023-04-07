<?php
    session_start();
    include 'include/header.php';
    include 'include/sidebar.php';
    include 'include/top-header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="ambulance-information">
                <h2 class="text-center pt-3">Ambulance Booking</h2><hr>                                
                <form>
                    <div class="ambulance-booking-detail">
                        <div class="row">
                            <div class="col-12 col-md-12">
                                <table class="table table-responsive">
                                    <tr>
                                        <td class="table-head">Full Name</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="f-name" id="name-field" placeholder="Name"><i class="fas fa-user text-success pl-2"></i></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-12">
                                <table class="table table-responsive">
                                    <tr>
                                        <td class="table-head">Mobile Number</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>+91 </span><input type="text" name="phone" class="mobile-no-text" placeholder="Your mobile no." maxlength="10">
                                            <button type="submit" id="send-btn" onclick="show_otp_field()">Send OTP</button>
                                            <div id="mobile-verification" class="pt-2">
                                                <input type="password" name="password" id="password-field" placeholder="Enter OTP" maxlength="6">
                                                <a href="#" class="clk-btn">Verify</a>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-12">
                                <table class="table table-responsive">
                                    <tr>
                                        <td class="table-head">Location</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" id="location-field" name="for-ambulance-location" placeholder="Your location" ><i class="fas fa-map-marker-alt text-success pl-2"></i></td>
                                    </tr>
                                </table>                                
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-12">
                                <table class="table table-responsive">
                                    <tr>
                                        <td><a href="#" id="book-ambulance" style="display: block;" onclick="confirm_booking()">Book</a></td>                                        
                                    </tr>
                                    <tr>
                                        <td><a href="#" id="booked-ambulance" style="display: none;"><i class="fas fa-check"></i> Booked</a></td>
                                    </tr>
                                </table>                                
                            </div>
                        </div>

                    </div>   
                </form>                                
            </div>
        </div>
    </div>
</div>

<?php
    include 'include/footer.php';
?>