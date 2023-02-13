<?php
class login extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('form','url');
        $this->load->library('form_validation');
        $this->load->model('model_login');
    }
    public function view_home(){
        $this->load->view('view_home');
    }
    
    public function authen(){
        $this->form_validation->set_rules('User_id','User ID','required');
        $this->form_validation->set_rules('User_pass','Password','required');
        if($this->form_validation->run()==FALSE){
            $this->load->view('view_login');
        }
        else{
            $get_data['User_id'] = $_REQUEST['User_id'];
            $get_data['User_pass'] = $_REQUEST['User_pass'];
            $data = $this->model_login->login($get_data);
            if($data){
                foreach($data as $row){
                    $userdata = array(
                        'User_id'=>$row->User_id,);
                    $this->session->set_userdata($userdata);
                }
                $this->load->view('view_home');
            }
            else{
                $data['error'] = "User ID or Password incorrect";
                $this->load->view('view_login',$data);
            }
        }
    }
    
    public function logout(){
        $userdata = array('User_id','User_pass');
        $this->session->unset_userdata($userdata);
        $this->load->view('view_login');
    }
}
?>