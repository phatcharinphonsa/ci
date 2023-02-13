<?php
class c_user extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_user');
    }
    public function formSelect(){
        $data['user'] = $this->m_user->userSelect();
        $this->load->view('user_v',$data);
    }
    
    public function view_home(){
        $this->load->view('view_home');
    }
    public function history(){
        $this->load->view('history');
    }
    public function formInsert(){
        $this->load->view('user_insert');
    }
    public function formSave(){
        $data['User_id']=$_REQUEST['User_id'];
        $data['User_password']=$_REQUEST['User_password'];
        $data['User_name']=$_REQUEST['User_name'];
        $data['User_address']=$_REQUEST['User_address'];
        $data['User_phone']=$_REQUEST['User_phone'];        
        $data['User_status']=$_REQUEST['User_status'];
        
        $this->m_user->userInsert($data);
        $data['user'] = $this->m_user->userSelect();
        $this->load->view('user_v',$data);
    }
    
    public function formEdit(){
        $id=$_REQUEST['id'];
        $data['user']=$this->m_user->userEdit($id);
        $this->load->view('user_edit',$data);
    }
    public function formUpdate(){
        $data['User_id']=$_REQUEST['User_id'];
        $data['User_password']=$_REQUEST['User_password'];
        $data['User_name']=$_REQUEST['User_name'];
        $data['User_address']=$_REQUEST['User_address'];
        $data['User_phone']=$_REQUEST['User_phone'];        
        $data['User_status']=$_REQUEST['User_status'];

        $this->m_user->userUpdate($data);
        $data['user'] = $this->m_user->userSelect();
        $this->load->view('user_v',$data);
    }
    public function formDelete(){
        $id = $_REQUEST['id'];
        $this->m_user->userDelete($id);
        $data['user'] = $this->m_covid->userSelect();
        $this->load->view('user_v',$data);        
    }
    
}

?>