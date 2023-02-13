<?php
class c_life extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_life');
    }
    public function formSelect(){
        $data['life'] = $this->m_life->shopSelect();
        $this->load->view('life_',$data);
    }
   
    public function home(){
        $this->load->view('home');
    }

    public function history(){
        $this->load->view('history');
    }
    
    public function formInsert(){
        $this->load->view('life_insert');
    }
    public function formSave(){
        $data['l_id']=$_REQUEST['l_id'];
        $data['l_name']=$_REQUEST['l_name'];
    }
    public function formEdit(){
        $l_id=$_REQUEST['l_id'];
        $data['life']=$this->m_life->shopEdit($l_id);
        $this->load->view('life_edit',$data);
    }
    public function formUpdate(){
        $data['l_id']=$_REQUEST['l_id'];
        $data['l_name']=$_REQUEST['l_name'];

        $this->m_life->shopUpdate($data);
        $data['life'] = $this->m_life->shopSelect();
        $this->load->view('life_',$data);
    }
    public function formDelete(){
        $l_id = $_REQUEST['l_id'];
        $this->m_life->shopDelete($l_id);
        $data['life'] = $this->m_life->shopSelect();
        $this->load->view('life_',$data);        
    }
}

?>