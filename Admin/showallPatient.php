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
            $sql = "SELECT *FROM add_patient WHERE id = '$id'";
            $table = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($table);
        ?>
    <form>
        <div class="col-12 col-md-12">
            <div class="patient-detail">
                <div class="row">
                    <div class="patient-image">
                        <img src="sql/patient_image/<?php echo $row['image']; ?>" alt="Patient Image" height="200" width="200">
                    </div>
                    <div class="patient-full-info">
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
                                <td>Religion&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;: </td><td> <?php echo $row['rel']; ?></td>
                            </tr>
                            <tr>
                                <td>Patient id&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;: </td><td> <?php echo $row['patient_id']; ?></td>
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


