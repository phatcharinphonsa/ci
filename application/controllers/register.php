<?php
class register extends CI_Controller{
public function __construct(){
parent::__construct();
$this->load->helper('form','url');
$this->load->library('form_validation');
$this->load->model('m_register');
}
public function form_register(){
$this->load->view('form_register');
}
public function form_validation(){
$this->form_validation->set_rules('username','Username','required');
$this->form_validation->set_rules('name','Name','required');
$this->form_validation->set_rules('password','Password','required|min_length[8]|max_length[25]');
$this->form_validation->set_rules('password2','Password Confirmation','required|min_length[8]|matches[password]');
$this->form_validation->set_rules('agree','Agree','required');

$this->form_validation->set_message('required','{field} is required');

if($this->form_validation->run()==FALSE){
$this->load->view('form_register');
}
else{
$data['username']=$_REQUEST['username'];
$data['name']=$_REQUEST['name'];
$data['password']=$_REQUEST['password'];
$data['password2']=$_REQUEST['password2'];
$data['agree']=$_REQUEST['agree'];
$success = $this->m_register->insert($data);
if($success){
$data['msg']="register complete";
$data['rec']=$this->m_register->select();
}
else
$data['msg']="register error";
$this->load->view('msg_register',$data);
}
}
}
?>