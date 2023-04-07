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
					<span><i class="fas fa-tachometer-alt"></i> Dashboard</span> <span class="float-right"><a href="index.php">Home</a> / Add Doctor</span><hr>
				</div>
			</div>
		</div>
    <!--Form area start Here-->
        <form action="sql/doctor.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-12">
                    <div class="add-doctor">
                        <h4 class="text-center">Add Details</h4>
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Name <span style="color:red;">*</span></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="name" id="name" class="form-control" placeholder="Enter Your Name" required></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Father's Name <span style="color:red;">*</span></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="fname" id="fname" class="form-control" placeholder="Enter Father's Name" required></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Mobile Number <span style="color:red;">*</span></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter Your Mobile" required></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Email </td>
                                    </tr>
                                    <tr>
                                        <td><input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email"></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Date Of Birth <span style="color:red;">*</span></td>
                                    </tr>
                                    <tr>
                                        <td><input type="date" name="dob" id="dob" class="form-control" required></td>
                                    </tr>
                                </table>
                            </div>

                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Aadhar Number <span style="color:red;">*</span></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="adhar" id="adhar" class="form-control" placeholder="Enter Your Aadhar" required></td>
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
                                        <td><input type="radio" name="gender" value="Male"> Male</td>
                                        <td><input type="radio" name="gender" value="Female"> Female</td>
                                        <td><input type="radio" name="gender" value="Others"> Other</td>
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
                                           <select name="rel" class="form-control" required>
                                                <option disabled selected>--Select Your Religion--</option>
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
                                        <td>Specialization <span style="color:red;">*</span></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="specialization" class="form-control" placeholder="Enter Specialization" required></td>
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
                                        <td><input type="file" name="image" onchange="readURL(this);" class="form-control" required>
                                        <img id="image" style="border: 1px solid black; margin: 10px 70px;">
                                    </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-12 col-md-4"></div>
                            <div class="col-12 col-md-4"></div>
                        </div>

                        <h4 class="text-center">Address Details</h4>
                        <p class="text-center mb-0">Correspondence Address<span style="color:red;">*</span></p>

                        <!--===Correspondence Address===-->
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Village/Town<span style="color: red;">*</span></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="village" id="cVillage" placeholder="Enter Your Village/Place" required></td>
                                    </tr>
                                </table>
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Post <span style="color: red;">*</span></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="post" id="cPost" placeholder="Post" required></td>
                                    </tr>
                                </table>
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Police Station</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="police" id="cPoliceStation" placeholder="Police station"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>District <span style="color: red;">*</span></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="district" id="cDistrict" placeholder="District" required></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>State<span style="color: red;">*</span></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="state" id="cState" placeholder="State" required></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Pin<span style="color: red;">*</span></td>
                                    </tr>
                                    <tr>
                                        <td><input type="number" class="form-control" name="pin" id="cPinCode" placeholder="Pin" required></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-12 pl-4 mb-4">
                                <input type="checkbox" name="check" id="checkBox" onclick="autoFillDetail()">
                                <p id="chk-box-for--p-address">Check if Permanent Address is same as Correspondence Address</p>
                            </div>
                        </div>

                        <!--===Permanent Address===-->
                        <p class="text-center mb-0">Permanent Address</p>
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Village</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="village1" id="pVillage" placeholder="Enter Your Village/Place"></td>
                                    </tr>
                                </table>
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Post</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="post1" id="pPost" placeholder="Post"></td>
                                    </tr>
                                </table>
                            </div>
                            
                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Police Station</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="police1" id="pPoliceStation" placeholder="Police station"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>District </td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="district1" id="pDistrict" placeholder="District"></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>State</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" class="form-control" name="state1" id="pState" placeholder="State"></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-12 col-md-4">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Pin</td>
                                    </tr>
                                    <tr>
                                        <td><input type="number" class="form-control" name="pin1" id="pPinCode" placeholder="Pin"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <h4 class="text-center">Qualification</h4>
                        <div class="row">
                            <div class="col-12 col-md-3">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Examination</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="exam" class="form-control qualification-box" placeholder="Examination"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="exam1" class="form-control qualification-box" placeholder="Examination"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="exam2" class="form-control qualification-box" placeholder="Examination"></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-12 col-md-3">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Board / University</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="board" class="form-control qualification-box" placeholder="Enter Board/University"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="board1" class="form-control qualification-box" placeholder="Enter Board/University"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="board2" class="form-control qualification-box" placeholder="Enter Board/University"></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-12 col-md-3">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Passing Year</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="pyear" class="form-control qualification-box" placeholder="Enter Passing Year"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="pyear1" class="form-control qualification-box" placeholder="Enter Passing Year"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="pyear2" class="form-control qualification-box" placeholder="Enter Passing Year"></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-12 col-md-3">
                                <table class="table table-responsive">
                                    <tr>
                                        <td>Percentage (%)</td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="per" class="form-control qualification-box" placeholder="Enter Percentage"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="per1" class="form-control qualification-box" placeholder="Enter Percentage"></td>
                                    </tr>
                                    <tr>
                                        <td><input type="text" name="per2" class="form-control qualification-box" placeholder="Enter Percentage"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="submit" style="display: block; float: right; padding-right: 12px;">
                                    <table>
                                        <tr>
                                            <td><input type="submit" name="ok" value="Submit" onclick="validateForm()" class="btn btn-primary">
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
        
        }else{
            header("Location: loginPage.php");
        }
    ?>