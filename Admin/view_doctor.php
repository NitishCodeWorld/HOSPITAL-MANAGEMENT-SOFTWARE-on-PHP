<?php
    session_start();
    if(isset($_SESSION['user_id'])){

    include 'include/header.php';
    include 'include/sidebar.php';
    include 'include/top-header.php';
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-4 col-md-4">
            <div class="dashboard-title">
                <span><i class="fas fa-tachometer-alt"></i> Dashboard</span>
            </div>
        </div>

        <div class="col-8 col-md-8">
            <div class="search-doctor-input-box">
                <input type="text" name="search-doctor" id="myInput" placeholder="Search"><i class="fas fa-search" onclick="search_doc()"></i>
            </div>
        </div>
    </div><hr>

    <div class="row">
        <?php
            include 'sql/config.php';

            $sql = "SELECT * FROM add_doctor";
            $table = mysqli_query($conn,$sql);
            $i = 1;

            if(mysqli_num_rows($table) > 0){
                while($row = mysqli_fetch_array($table)){
            ?>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card2">
                        <div class="card2-top">
                            <img src="sql/doctor_image/<?php echo $row['image']; ?>" alt="doctor" height="200px" width="100%">
                        </div>

                        <div class="card2-btn">
                            <h6>Name : <?php echo $row['name']; ?></h6>
                            <span> <?php echo $row['specialization']; ?></span>
                            <span>Mob : <?php echo $row['phone']; ?></span>
                        </div>
                        <div class="card-buttom">
                            <a href="showall.php?id=<?php echo $row['id']; ?>">
                                Show All <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            <?php
            $i++;
                }
            }else{
                echo "No Doctor Found";
            }
        ?>
        
    </div>
</div>

<?php
    include 'include/footer.php';
    
    }else{
        header("Location: loginPage.php");
    }
?>