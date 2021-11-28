<?php 
class Database{
    public $host = "localhost";
    public $user = "root";
    public $password = "";
    public $db = "test";
    public $con;

    function __construct()
    {
        $this->con = mysqli_connect($this->host,$this->user,$this->password,$this->db);
        if(!$this->con){
            echo "Failed";
        }
    }

    public function saveData(array $data){
        var_dump($data);
        
        $sqlQuery = "INSERT INTO person (firstName,lastName,mobile,email,gender,city,address,password,hobbies,photo) VALUES('".$data["firstName"]."','".$data["lastName"]."','".$data["mobile"]."','".$data["email"]."','".$data["gender"]."','".$data["city"]."','".$data["address"]."','".$data["password"]."','".$data["hobbies"]."','".$data["photo"]."')";
        
        echo $sqlQuery;

        if(mysqli_query($this->con,$sqlQuery)){
            return true;
        }else{
            return false;
        }
    }

    public function getData(){
        $data = array();
        $sqlQuery = "SELECT * FROM person ORDER BY id desc";
        $result = mysqli_query($this->con,$sqlQuery);

        while($row = mysqli_fetch_assoc($result)){
            array_push($data,$row);
        }
        return $data;
    }
}
?>