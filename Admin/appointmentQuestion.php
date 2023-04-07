
    <?php
        session_start();
        if(isset($_SESSION['user_id'])){

        include 'include/header.php';
        include 'include/sidebar.php';
        include 'include/top-header.php';
    ?>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12">
                <div class="question-area">
                    <h3 class="text-center">Have you visited before?</h3>
                    <div class="text-center">
                        <p><a href="newPatient_appointment.php">No</a> <a href="visitedPatient_appointment.php">Yes</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        include 'include/footer.php';

        }else{
            header("Location: loginPage.php");
        }
    ?>
