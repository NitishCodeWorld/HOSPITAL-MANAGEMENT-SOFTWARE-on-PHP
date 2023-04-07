<?php
    session_start();
    if(isset($_SESSION['user_id'])){

    include "include/header.php";
    include "include/sidebar.php";
    include "include/top-header.php";
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="dashboard-title">
                <span><i class="fas fa-tachometer-alt"></i> Dashboard</span><hr>
            </div>
        </div>
    </div>

    <div class="row">
        <?php
            include "sql/config.php";
            $id = $_GET['id'];
            $sql = "SELECT *FROM add_doctor WHERE id = '$id'";
            $table = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($table);
        ?>
    <form>
        <div class="col-12 col-md-12">
            <div class="doctor-detail">
                <div class="row">
                    <div class="doctor-image">
                        <img src="sql/doctor_image/<?php echo $row['image']; ?>" alt="Doctor Image" height="200" width="200">
                    </div>
                    <div class="doctor-full-info">
                        <table class="table table-responsive">
                            <tr>
                                <th>Personal Details</th>
                            </tr>
                            <tr>
                                <td>Name&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;:</td><td> <?php echo $row['name']; ?></td>
                            </tr>
                            <tr>
                                <td>Father's Name&emsp;&emsp;&emsp;&ensp;&nbsp;: </td><td> <?php echo $row['fname']; ?></td>
                            </tr>
                            <tr>
                                <td>Mobile No.&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;: </td><td> <?php echo $row['phone']; ?></td>
                            </tr>
                            <tr>
                                <td>Email Id&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: </td><td> <?php echo $row['mail']; ?></td>
                            </tr>
                            <tr>
                                <td>Date of Birth&emsp;&emsp;&emsp;&emsp;&ensp;&ensp;: </td><td> <?php echo $row['dob']; ?></td>
                            </tr>
                            <tr>
                                <td>Aadhar&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;: </td><td> <?php echo $row['adhar']; ?></td>
                            </tr>
                            <tr>
                                <td>Gender&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;: </td><td> <?php echo $row['gender']; ?></td>
                            </tr>
                            <tr>
                                <td>Religion&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: </td><td> <?php echo $row['religion']; ?></td>
                            </tr>
                            <tr>
                                <td>Specialization&emsp;&emsp;&emsp;&emsp;: </td><td> <?php echo $row['specialization']; ?></td>
                            </tr>
                            
                            <tr>
                                <th>Correspondance Address</th>
                            </tr>
                            <tr>
                                <td>Village/Place&emsp;&emsp;&emsp;&emsp;: </td><td> <?php echo $row['vill']; ?></td>
                            </tr>
                            <tr>
                                <td>Post&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;: </td><td> <?php echo $row['post']; ?></td>
                            </tr>
                            <tr>
                                <td>Police Station&emsp;&emsp;&emsp;&ensp;&nbsp;: </td><td> <?php echo $row['police']; ?></td>
                            </tr>
                            <tr>
                                <td>District&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&nbsp;: </td><td> <?php echo $row['dist']; ?></td>
                            </tr>
                            <tr>
                                <td>State&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;: </td><td> <?php echo $row['state']; ?></td>
                            </tr>
                            <tr>
                                <td>Pin&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: </td><td> <?php echo $row['pin']; ?></td>
                            </tr>
                            <tr>
                                <th>Permanent Address</th>
                            </tr>
                            <tr>
                                <td>Village/Place&emsp;&emsp;&emsp;&emsp;: </td><td> <?php echo $row['vill1']; ?></td>
                            </tr>
                            <tr>
                                <td>Post&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;: </td><td> <?php echo $row['post1']; ?></td>
                            </tr>
                            <tr>
                                <td>Police Station&emsp;&emsp;&emsp;&ensp;&nbsp;: </td><td> <?php echo $row['police1']; ?></td>
                            </tr>
                            <tr>
                                <td>District&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;&nbsp;: </td><td> <?php echo $row['dist1']; ?></td>
                            </tr>
                            <tr>
                                <td>State&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&ensp;&nbsp;: </td><td> <?php echo $row['state1']; ?></td>
                            </tr>
                            <tr>
                                <td>Pin&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: </td><td> <?php echo $row['pin1']; ?></td>
                            </tr>
                            <tr>
                                <th>Education Details</th>
                            </tr>
                            <tr>
                                <td>Examination&emsp;&emsp;&emsp;&emsp;&nbsp;: </td><td> <?php echo $row['course']; ?></td>
                            </tr>
                            <tr>
                                <td>Board/University&emsp;&emsp;&nbsp;: </td><td> <?php echo $row['board']; ?></td>
                            </tr>
                            <tr>
                                <td>Passing Year&emsp;&emsp;&emsp;&emsp;: </td><td> <?php echo $row['pyear']; ?></td>
                            </tr>
                            <tr>
                                <td>Percentage&emsp;&emsp;&emsp;&emsp;&ensp;: </td><td> <?php echo $row['per']; ?></td>
                            </tr>
                            <tr>
                                <td>Examination&emsp;&emsp;&emsp;&emsp;: </td><td> <?php echo $row['course1']; ?></td>
                            </tr>
                            <tr>
                                <td>Board/University&emsp;&emsp;: </td><td> <?php echo $row['board1']; ?></td>
                            </tr>
                            <tr>
                                <td>Passing Year&emsp;&emsp;&emsp;&emsp;: </td><td> <?php echo $row['pyear1']; ?></td>
                            </tr>
                            <tr>
                                <td>Percentage&emsp;&emsp;&emsp;&emsp;&ensp;: </td><td> <?php echo $row['per1']; ?></td>
                            </tr>
                            <tr>
                                <td>Examination&emsp;&emsp;&emsp;&emsp;: </td><td> <?php echo $row['course2']; ?></td>
                            </tr>
                            <tr>
                                <td>Board/University&emsp;&emsp;: </td><td> <?php echo $row['board2']; ?></td>
                            </tr>
                            <tr>
                                <td>Passing Year&emsp;&emsp;&emsp;&emsp;: </td><td> <?php echo $row['pyear2']; ?></td>
                            </tr>
                            <tr>
                                <td>Percentage&emsp;&emsp;&emsp;&emsp;&ensp;: </td><td> <?php echo $row['per2']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </form>
    </div>
</div>




<?php
    include "include/footer.php";

    }else{
        header("Location: loginPage.php");
    }
?>


