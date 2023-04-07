<?php
    session_start();
    if(isset($_SESSION['user_id'])){

    include "include/header.php";
    include "include/sidebar.php";
    include "include/top-header.php";
?>

<div class="container-fluid">
        <div class="row">
			<div class="col-12">
				<div class="dashboard-title">
					<span><i class="fas fa-tachometer-alt"></i> Dashboard</span> <span class="float-right"><a href="index.php">Home</a> / View Patient</span><hr>
				</div>
			</div>
		</div>

        <div class="row">
            <div class="col-12 col-md-12">
                <div class="search-patient-input-box">
                    <input type="text" name="search-patient" id="myInput" placeholder="Search"><i class="fas fa-search" onclick="search_patient()"></i>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
                include "sql/config.php";

                $sql = "SELECT * FROM add_patient";
                $table = mysqli_query($conn, $sql);
                $i = 1;

                if(mysqli_num_rows($table) > 0){
                    while($row = mysqli_fetch_array($table)){
            ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card">
                    <img src="sql/patient_image/<?php echo $row['image']; ?>" class="card-img-top" alt="Patient" height="200">
                    <div class="card-body">
                        <h5 class="card-title text-center"><?php echo $row['name']; ?></h5>
                        <p class="card-text text-center">Patient id : <?php echo $row['patient_id'];?> <br> Mobile No. <?php echo $row['phone'];?></p>
                    </div>  
                    <a href="showallPatient.php?id=<?php echo $row['id']; ?>" class="card-link"><p id="showPatientDetail" class="text-light text-center m-0 p-2 rounded-bottom">Show Details <i class="fas fa-arrow-right"></i></p></a>
                </div>
            </div>
            <?php
                $i++;
                    }
                }else{
                    echo "no patient found";
                }
            ?> 
        </div>
</div>






<?php
    include "include/footer.php";

    }else{
        header("Location: loginPage.php");
    }
?>