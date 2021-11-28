
<?php
include 'Database.php';
$pageid=$_REQUEST["pageno"];
switch ($pageid){
    case 1:
        $fname=$_POST["fname"];
        $lname=$_POST["lname"];
        $email=$_POST["email"];
        $mobile=$_POST["mno"];
        $pass=$_POST["pass"];
        $cpass=$_POST["cpass"];
        $gen=$_POST["gen"];
        $hob=$_POST["hob"];
        $city=$_POST["city"];
        $add=$_POST["txtarea"];
        $photo=$_FILES["photo"];
        $persondata=array(
            "firstName"=>$fname,
            "lastName"=>$lname,
            "email"=>$email,
            "mobile"=>$mobile,
            "gender"=>$gen,
            "city"=>$city,
            "address"=>$add,
            "hobbies"=>$hob,
            "photo"=>$photo,
            "password"=>md5($pass)
        );
        var_dump($photo);
       // echo $fname.$lname.$email.$mobile.$pass.$cpass.$gen.$hob.$city.$add.$photo;
        break;

    default:
        break;
}
$db = new Database();
$db->savedata($persondata);
?>