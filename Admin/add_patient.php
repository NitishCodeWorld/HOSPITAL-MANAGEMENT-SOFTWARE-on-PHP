<?php
    session_start();
    if(isset($_SESSION['user_id'])){

    include 'include/header.php';
    include 'include/sidebar.php';
    include 'include/top-header.php';
?>

<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="dashboard-title">
					<span><i class="fas fa-tachometer-alt"></i> Dashboard</span> <span class="float-right"><a href="index.php">Home</a> / Add Patient</span><hr>
				</div>
			</div>
		</div>

            <!--Form area start Here-->
            <form action="sql/patient.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12">
                    <div class="add-patient">
                        <h4 class="text-center">Patient Details</h4>

                        <div class="row">
                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Name <span style="color:red;">*</span></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="name" class="form-control" placeholder="Enter Your Name" require></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Father's Name</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="fname" class="form-control" placeholder="Enter Father's Name" require></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Mobile Number <span style="color:red;">*</span></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="mobile" class="form-control" placeholder="Enter Your Mobile" require></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Email <span style="color: red;">*</span></td>
                                    </tr>
                                    <tr>
                                        <td><input type="email" name="email" class="form-control" placeholder="Enter Your Email" require></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Date Of Birth <span style="color:red;">*</span></td>
                                    </tr>
                                    <tr>
                                        <td><input type="date" name="dob" class="form-control" require></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Aadhar Number <span style="color:red;">*</span></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="adhar" class="form-control" placeholder="Enter Your Aadhar" require></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Gender <span style="color:red;">*</span></td>
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
                                        <td>Religion<span style="color:red;">*</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                           <select name="rel" class="form-control" require>
                                                <option disabled selected value="">--Select Your Religion--</option>
                                                <option value="hindu">Hindu</option>
                                                <option value="islam">Islam</option>
                                                <option value="sikh">Sikh</option>
                                                <option value="christain">Christain</option>
                                                <option value="other">Other</option>
                                           </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Patient id <span style="color: red;">*</span></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="patientId" class="form-control" placeholder="Patient Id"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Upload Image <span style="color:red;">*</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="file" name="image" onchange="readURL(this)" class="form-control">
                                            <img id="image" style="border: 1px solid black; margin: 10px 70px;">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <h4 class="text-center">Address Details</h4>
                        <p class="text-center mb-0">Correspondence Address</p>

                        <div class="row">
                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Village/Town</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="vill" placeholder="Enter Your Village/Place"></td>
                                    </tr>
                                </table>
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Post</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="post" placeholder="Post"></td>
                                    </tr>
                                </table>
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Police Station</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="police-stn" placeholder="Police station"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>District</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="dist" placeholder="District"></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>State</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="state" placeholder="State"></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Pin</td>
                                    </tr>
                                    <tr>
                                        <td><input type="number" class="form-control" name="pin" placeholder="Pin"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        
                        <div class="row">
                            <div class="col-12">
                                <div class="submit" style="display: block; float: right; padding-right: 12px;">
                                    <table>
                                        <tr>
                                            <td><input type="submit" name="ok" value="Submit" class="btn btn-primary">
                                                <input type="reset" value="Reset" class="btn btn-danger">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    <!--Form Area End here-->
    </div>


<?php
    include 'include/footer.php';
    }
    else{
        header("Location: loginPage.php");
    }
?>