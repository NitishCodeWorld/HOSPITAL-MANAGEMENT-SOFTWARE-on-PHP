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
            <div class="search-nurse-input-box">
                <input type="text" name="search-nurse" id="myInput" placeholder="Search"><i class="fas fa-search" onclick="search_nur()"></i>
            </div>
        </div>
    </div><hr>

    <div class="row">
        <?php
            include 'sql/config.php';

            $sql = "SELECT * FROM add_nurse";
            $table = mysqli_query($conn,$sql);
            $i=1;

            if(mysqli_num_rows($table) > 0){
                while($row = mysqli_fetch_array($table)){
        ?>
        <div class="col-12 col-md-6 col-lg-3">
            <div class="card3">
                <div class="card3-top">
                    <img src="sql/nurse_image/<?php echo $row['image']; ?>" alt="Nurse" height="180px" width="100%">
                </div>

                <div class="card3-btn">
                    <h5> <?php echo $row['name']; ?></h5>
                    <p> <?php echo $row['specialization']; ?> </p>
                    <span>Mob. - <?php echo $row['phone']; ?></span>
                </div>

                <div class="card3-bottom">
                    <a href="showallNurse.php?id=<?php echo $row['id']; ?>">Show All <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <?php
            $i++;
                }
        
            }else{
                echo "No nurse found";
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