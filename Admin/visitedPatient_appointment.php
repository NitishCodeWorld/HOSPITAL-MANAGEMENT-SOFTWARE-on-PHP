<?php
    session_start();
    if(isset($_SESSION['user_id'])){

    include 'include/header.php';
    include 'include/sidebar.php';
    include "include/top-header.php";
?>


<div class="container">
    <div class="row">
        <div class="col-12 col-md-12">

            <div class="patient-info text-center">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center">Appointment Request Form</h2>
                        
                    </div>
                </div>

                    <form action="visitedPatientValidate.php" method="post">
                        <div class="row text-center">
                            <div class="col-12 col-md-12">
                                <table class="table">

                                <?php if(isset($_GET['error'])){ ?>
                                    <p class="error" style="color:red;"> <?php echo $_GET['error']; ?> </p>
                                <?php } ?>

                                    <tr>
                                        <td class="font-weight-bold">
                                            <label for="p-id">Patient id</label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <input type="text" id="p-id" name="patientId" placeholder="Enter patient id" maxlength="8" require>
                                        </td>
                                    </tr>
                                </table>
                                <button class="btn btn-primary" name="ok">Search</button>
                            </div>
                        </div>
                    </form><br><hr><br>

                <div class="row">
                    <div class="col-12">
                        <div class="display-visited-patient ">
                            <table class="table">
                                <thead class="table-warning">
                                    <tr>
                                        <th scope="col">Patient Name</th>
                                        <th scope="col">Mobile No.</th>
                                        <th scope="col">Patient id</th>
                                        <th scope="col">Email id</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody"></tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
    }
?>
