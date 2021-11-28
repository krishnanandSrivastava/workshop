<?php
    include("Database.php");
    $db = new Database();
    $pageno = $_REQUEST["pageno"]; 
    echo $pageno; 
    switch($pageno){
        case 1:
                $firstName = $_POST["firstName"];
                $lastName = $_POST["lastName"];
                $mobile = $_POST["mobile"];
                $email = $_POST["email"];
                $gender = $_POST["gender"];
                $city = $_POST["city"];
                $address = $_POST["address"];
                $password = $_POST["password"];
                $hobbies = $_POST["hobbies"];

                $photo= $_FILES["photo"];

                $photoName = rand().".".pathinfo($photo["name"],PATHINFO_EXTENSION);

                $allHobbies = '';

                foreach($hobbies as $hob){
                    $allHobbies = implode(',',$hobbies);
                }

                if(move_uploaded_file($photo["tmp_name"],"uploads/".$photoName)){
                    $personData = array(
                        "firstName" => $firstName,
                        "lastName" => $lastName,
                        "mobile" => $mobile,
                        "email" => $email,
                        "gender" => $gender,
                        "city" => $city,
                        "address" => $address,
                        "password" => md5($password),
                        "hobbies" => $allHobbies,
                        "photo" => "uploads/".$photoName
                    );

                    if($db->saveData($personData)){
                        header('Location: form.php');
                    }else{
                        header('Location: form.php');
                    }
                }else{
                    header('Location : form.php');
                }


            break;
        default:
            break;
    }
?>