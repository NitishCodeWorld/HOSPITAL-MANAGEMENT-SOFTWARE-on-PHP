<?php
    session_start();

    if(isset($_POST['ok'])){
        include 'config.php';

        $name = $_POST['name'];
        $fname = $_POST['fname'];
        $mobile = $_POST['mobile'];
        $mail = $_POST['email'];
        $dob = $_POST['dob'];
        $adhar = $_POST['adhar'];
        $gender = $_POST['gender'];
        $religion = $_POST['rel'];
        $patientId = $_POST['patientId'];

        $village = $_POST['vill'];
        $postOffice = $_POST['post'];
        $policeStation = $_POST['police-stn'];
        $district = $_POST['dist'];
        $state = $_POST['state'];
        $pinCode = $_POST['pin'];

        $image = $_FILES['image']['name'];

        move_uploaded_file($_FILES['image']['tmp_name'], "patient_image/".$_FILES['image']['name']);

        $sql = "INSERT INTO add_patient(name,fname,phone,mail,dob,adhar,gender,rel,patient_id,vill,post,police,dist,state,pin,image)VALUES('$name','$fname','$mobile','$mail','$dob','$adhar','$gender','$religion','$patientId','$village','$postOffice','$policeStation','$district','$state','$pinCode','$image')";   

        if(mysqli_query($conn,$sql)){
            echo "Patient Added";
        }else{
            echo "Error".mysqli_error($conn);
        }
    }
?>