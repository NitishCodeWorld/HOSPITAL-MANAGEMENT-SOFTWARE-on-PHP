<?php
    

    if(isset($_POST['ok'])){
        include 'config.php';

        $name = $_POST['name'];
        $fname = $_POST['fname'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $adhar = $_POST['adhar'];
        $gender = $_POST['gender'];
        $rel = $_POST['rel'];
        $specialization = $_POST['specialization'];
        
        //Address data recieve from form//
        $village = $_POST['village'];
        $post = $_POST['post'];
        $police = $_POST['police'];
        $district = $_POST['district'];
        $state = $_POST['state'];
        $pin = $_POST['pin'];

        $village1 = $_POST['village1'];
        $post1 = $_POST['post1'];
        $police1 = $_POST['police1'];
        $district1 = $_POST['district1'];
        $state1 = $_POST['state1'];
        $pin1 = $_POST['pin1'];

        // education record data from form
        $exam = $_POST['exam'];
        $board = $_POST['board'];
        $pyear = $_POST['pyear'];
        $per = $_POST['per'];

        $exam1 = $_POST['exam1'];
        $board1 = $_POST['board1'];
        $pyear1 = $_POST['pyear1'];
        $per1 = $_POST['per1'];

        $exam2 = $_POST['exam2'];
        $board2 = $_POST['board2'];
        $pyear2 = $_POST['pyear2'];
        $per2 = $_POST['per2'];

        // image from form

        $image = $_FILES['image']['name'];

        move_uploaded_file($_FILES['image']['tmp_name'], "doctor_image/".$_FILES['image']['name']);

        $sql = "INSERT INTO add_doctor(name,fname,phone,mail,dob,adhar,gender,religion,specialization,vill,post,police,dist,state,pin,vill1,post1,police1,dist1,state1,pin1,course,board,pyear,per,course1,board1,pyear1,per1,course2,board2,pyear2,per2,image)VALUES('$name', '$fname', '$mobile', '$email', '$dob', '$adhar', '$gender', '$rel','$specialization', '$village', '$post', '$police', '$district', '$state', '$pin', '$village1', '$post1', '$police1', '$district1', '$state1', '$pin1', '$exam', '$board', '$pyear', '$per', '$exam1', '$board1', '$pyear1', '$per1', '$exam2', '$board2', '$pyear2', '$per2', '$image')";

        if(mysqli_query($conn,$sql)){
            echo "Doctor added successfully";
        }else{
            echo "Error".mysqli_error($conn);
        }

    }
    mysqli_close($conn);
?>