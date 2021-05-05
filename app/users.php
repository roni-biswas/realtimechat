<?php 

if($_FILES['file']['name'] != ""){
    if(!isset($_POST['first_name']) || empty($_POST['first_name'])){
        echo json_encode(array('error'=>'First Name Field Empty.')); exit;
    }else if (!isset($_POST['last_name']) || empty($_POST['last_name'])) {
        echo json_encode(array('error'=>'Last Name Field Empty.')); exit;
    }else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        echo json_encode(array('error'=>'Please Enter Correct Email Address.')); exit;
    }else if(!isset($_POST['password']) || empty($_POST['password'])){
        echo json_encode(array('error'=>'Password Field Empty.')); exit;
    }else{

        //get image
        $fileName = $_FILES['file']['name'];
        $extension = pathinfo($fileName,PATHINFO_EXTENSION);
        $valid_extension = array("jpg","jpeg","png","JPG","JPEG","PNG");

        if(in_array($extension, $valid_extension)){

            $new_name = rand().".".$extension;
            $path = "../uploads/" . $new_name;

            if(move_uploaded_file($_FILES['file']['tmp_name'], $path)){

                // get all values
                $fname = $_POST['first_name'];
                $lname = $_POST['last_name'];
                $email = $_POST['email'];
                $pass  = md5($_POST['password']);

                $get_currant_data = file_get_contents('../json/users.json');
                $data_array = json_decode($get_currant_data, true);

                $ran_id = rand(time(), 100000000);

                $new_data = array(
                    'unique_id' => $ran_id,
                    'fname' => $fname,
                    'lname' => $lname,
                    'email' => $email,
                    'password' => $pass,
                    'images' => $new_name,
                    'status' => 0 
                );

                $data_array[] = $new_data;
                $json_data = json_encode($data_array, JSON_PRETTY_PRINT);

                if(file_put_contents('../json/users.json', $json_data)){
                    echo json_encode(array('success'=>'Registered Successfully')); exit;
                }else{
                    echo json_encode(array('error'=>'Register Failed')); exit;
                }
            }else{
                echo json_encode(array('error'=>'Files not uploads')); exit;
            }
        }else {
            echo json_encode(array('error'=>'Invalid file format.')); exit;
        }
    }
}else{
    echo json_encode(array('error'=>'Please uploads the file.')); exit;
}



?>