
<?php
    session_start();
    include 'include/header.php';
    include 'include/sidebar.php';
    include 'include/top-header.php';
?>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-12">

            <div class="patient-info">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center">Appointment Request Form</h2>
                    </div>
                </div>

                <div  id="appointment-new">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <table class="table table-responsive">
                            <tr>
                                <td>Name</td>
                            </tr>
                            <tr>
                                <td><input type="text" name="f-name" placeholder="First name" value="<?php echo $_SESSION['name']; ?>" require> </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-12 col-md-4">
                        <table class="table table-responsive">
                            <tr>
                                <td>Patient id</td>
                            </tr>
                            <tr>
                                <td><input type="text" name="p-id" placeholder="Enter Patient id" value="<?php echo $_SESSION['patient_id']; ?>" require></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-12 col-md-4">
                        <table class="table table-responsive">
                            <tr>
                                <td>Age</td>
                            </tr>
                            <tr>
                                <td><input type="text" name="age" placeholder="Enter Age" require></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="row">
                <div class="col-12 col-md-4">
                        <table class="table table-responsive">
                            <tr>
                                <td>Gender</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="gender" value="male"> Male</td>
                                <td><input type="radio" name="gender" value="female"> Female</td>
                                <td><input type="radio" name="gender" value="other"> Other</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-12 col-md-4">
                        <table class="table table-responsive">
                            <tr>
                                <td>Mobile No.</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" name="phone" id="phone-number" placeholder="Phone number" value="<?php echo $_SESSION['phone']; ?>" require>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-12 col-md-4">
                        <table class="table table-responsive">
                            <tr>
                                <td>Email</td>
                            </tr>
                            <tr>
                                <td><input type="email" name="email" placeholder="email@example.com" value="<?php echo $_SESSION['mail']; ?>"></td>
                            </tr>
                        </table>
                    </div>  
                </div>

                <div class="row">
                <div class="col-12 col-md-4">
                        <table class="table table-responsive">
                            <tr>
                                <td> Department</td>
                            </tr>
                            <tr>
                                <td>
                                <select id="myChoiceDept" onchange="showDoctors()">
                                    <option selected disabled>--Select related department--</option>
                                                    
                <!--Fetching doctor specialization from database-->
                <?php
                    include 'sql/config.php';

                    $sql = "SELECT * FROM add_doctor";
                    $result = mysqli_query($conn, $sql);
                    $i=1;
                
                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_array($result)) {
                ?>

                                    <option value="<?php echo $row['specialization']; ?>"> <?php echo $row['specialization']; ?> </option>
                                    
                <?php
                    $i++;
                        }
                    }
                ?>

                                </select>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-12 col-md-4">
                        <table class="table table-responsive">

                            <tr>
                                <td>Doctor</td>
                            </tr>
                            <tr>
                                <td>
                                    <select id="myChoiceDoc" onchange="showDoctorCalender()">
                                        <option disabled selected>--Select Doctor--</option>

                            <!--Fetching doctor from database-->
                            <?php
                                

                                $sql1 = "SELECT * FROM doctor WHERE addDoc_id = 1";
                                $result1 = mysqli_query($conn, $sql1);
                                $i=1;
                            
                                if(mysqli_num_rows($result1) > 0) {
                                    while($row1 = mysqli_fetch_array($result1)) {
                                    
                            ?>

                                        <option value="<?php echo $row1['name']; ?>"> <?php echo $row1['name']; ?> </option>
                                    
                            <?php
                                $i++;
                                    } 
                                }
                            ?>

                                    </select>
                                </td>
                            </tr>

                            <!--Dr. Calender start-->
                            <tr class="doctorCalender">
                                <td id="dr-calender"></td>
                            </tr>
                            <!--Dr. Calender end-->

                        </table>
                    </div>
                    <div class="col-12 col-md-4">
                        <table class="table table-responsive">
                            <tr>
                                <td>Appointment Date</td>
                            </tr>
                            <tr>
                                <td class="date-nd-time"><input type="date" name="date"></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="row">
                <div class="col-12 col-md-4">
                        <table class="table table-responsive">
                            <tr>
                                <td>Appointment Time</td>
                            </tr>
                            <tr>
                                <td class="date-nd-time">
                                    <select name="time">
                                        <option selected disabled>Select time <i class="fas fa-angle-down float-right"></i></option>
                                        <option value="t1">06:00am</option>
                                        <option value="t2">07:00am</option>
                                        <option value="t3">08:00am</option>
                                        <option value="t4">09:00am</option>
                                        <option value="t5">10:00am</option>
                                        <option value="t6">11:00am</option>
                                        <option value="t7">12:00pm</option>
                                        <option value="t8">01:00pm</option>
                                        <option value="t9">02:00pm</option>
                                        <option value="t10">03:00pm</option>
                                        <option value="t11">04:00pm</option>
                                        <option value="t12">05:00pm</option>
                                        <option value="t13">06:00pm</option>
                                        <option value="t14">07:00pm</option>
                                        <option value="t15">08:00pm</option>
                                        <option value="t16">09:00pm</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                
                <div class="submit-link">
                    <span><a href="added-appointments.php">Submit</a></span>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include 'include/footer.php';
?>