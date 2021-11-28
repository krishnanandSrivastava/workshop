<?php
class Database{
    public $host ="localhost";
    public $user ="root";
    public $password="";
    public $db="workshop";
    public $con;
    public function __construct()
    {
        $this->con=mysqli_connect($this->host,$this->user,$this->password,$this->db);
        if(!$this->con){
            echo "Failed";
        }
    }
    public function savedata(array $data){
        var_dump($data);
        $sqlQuery="INSERT INTO person(firstName,lastName,mobile,email,gender,city,address,hobbies,photo,password) values ('".$data['firstName']."','".$data['lastName']."','".$data['email']."','".$data['mobile']."','".$data['gender']."','".$data['city']."','".$data['address']."','".$data['hobbies']."','".$data['photo']."','".$data['password']."')";
        //echo $sqlQuery;
        if(mysqli_query($this->con,$sqlQuery)){
            echo "Data Saved";
        }else{
            echo "Data save failed";
        }
    }
}
$connect =new Database();
?>