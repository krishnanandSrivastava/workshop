<?php 
class SignUP extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model("SignupModel");
        $this->config->set_item('csrf_protection', false);
    //    echo $this->SignupModel->getData();
    }
    function index($messages=[]){
        $data['messages']=$messages;
        $this->load->view('signupView',$data);$this->output->enable_profiler(TRUE);
    }
    function validateSignup(){
        $this->form_validation->set_rules('name', 'First Name', 'required', array("required" => "Please Enter First Name"));

        // $this->form_validation->set_rules('lastName', 'Last Name', 'required', array("required" => "Please Enter First Name"));

        // $this->form_validation->set_rules('mobile', 'Mobile', 'required|numeric|min_length[10]|max_length[10]', array("required" => "Please Enter Mobile Number."));

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email', array("required" => "Please Enter Email."));

        // $this->form_validation->set_rules('email', 'Email', 'required|valid_email', array("required" => "Please Enter Email."));

        //$this->form_validation->set_rules('hobbies', 'Hobbies', 'required',array("required"=>"Please Select At Least One hobby."));

        $this->form_validation->set_rules('pass', 'Password', 'required|min_length[0]', array("required" => "Please Enter Password.","min_length"=>"Min 8 character password reqired."));

        $this->form_validation->set_rules('re_pass', 'Confirm Password', 'required|matches[pass]', array("required" => "Please Enter Confirm Password."));

        if ($this->form_validation->run() == false) {
            $this->index($this->form_validation->error_array());
        } else {
            $this->saveData();
        }
    }
    function saveData(){
        $name=$this->input->post("name");
        $email=$this->input->post("email");
        $password=md5($this->input->post("pass"));
        $userData=array("name"=>$name,"email"=>$email,"password"=>$password);
        // var_dump( $userData);
        // var_dump($this->SignupModel->userNameAvailable($email)->result());
        if($this->SignupModel->userNameAvailable($email)->result()[0]->email!=$email){
            
            echo $this->SignupModel->saveUserData($userData);
        }
        else{
            $this->index(["Email Not Available."]);
        }

    }
}
?>