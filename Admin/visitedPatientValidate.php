<?php
    session_start();
    include "sql/config.php";

    if(isset($_POST['ok'])){
           
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);    
            $data = htmlspecialchars($data);
            return $data;
        }
    

        $patientId = validate($_POST['patientId']);

        if(empty($patientId)){
            header("Location: visitedPatient_appointment.php?error=Empty values not allowed");
            exit();
        }

        $sql = "SELECT * FROM add_patient WHERE patient_id = '$patientId'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);

            
                if(preg_match("/[0-9A-Z]/",$patientId) == 1){
                    if($row['patient_id'] === $patientId){
                        $_SESSION['name'] = $row['name'];
                        $_SESSION['phone'] = $row['phone'];
                        $_SESSION['patient_id'] = $row['patient_id'];
                        $_SESSION['mail'] = $row['mail'];
                        header("Location: visitedPatient_appointment.php");
                        exit();
                    }else {
                        header("Location: visitedPatient_appointment.php?error=Patient id not correct");
                        exit();
                    }
                }else{
                    header("Location: visitedPatient_appointment.php?error=Enter valid patient id");
                    exit();
                }
            
        } else {
            header("Location: visitedPatient_appointment.php");
            exit();
        }
    }
?>