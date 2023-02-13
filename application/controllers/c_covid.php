<?php
class c_covid extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_covid');
    }
    public function formSelect(){
        $data['shop'] = $this->m_covid->shopSelect();
        $this->load->view('covid',$data);
    }
    
    public function home_page(){
        $this->load->view('home');
    }
    public function formInsert(){
        $this->load->view('covid_insert');
    }
    public function formSave(){
        $data['id']=$_REQUEST['id'];
        $data['name']=$_REQUEST['name'];
        $data['day']=$_REQUEST['day'];
        $data['email']=$_REQUEST['email'];
        $data['phone']=$_REQUEST['phone'];
        $data['address']=$_REQUEST['address'];
        $data['krom']=$_REQUEST['krom'];
        $data['price']=$_REQUEST['price'];

        $this->m_covid->shopInsert($data);
        $data['shop'] = $this->m_covid->shopSelect();
        $this->load->view('covid',$data);
    }
    
    public function formEdit(){
        $id=$_REQUEST['id'];
        $data['shop']=$this->m_covid->shopEdit($id);
        $this->load->view('covid_edit',$data);
    }
    public function formUpdate(){
        $data['id']=$_REQUEST['id'];
        $data['name']=$_REQUEST['name'];
        $data['day']=$_REQUEST['day'];
        $data['email']=$_REQUEST['email'];
        $data['phone']=$_REQUEST['phone'];
        $data['address']=$_REQUEST['address'];
        $data['krom']=$_REQUEST['krom'];
        $data['price']=$_REQUEST['price'];

        $this->m_covid->shopUpdate($data);
        $data['shop'] = $this->m_covid->shopSelect();
        $this->load->view('covid',$data);
    }
    public function formDelete(){
        $id = $_REQUEST['id'];
        $this->m_covid->shopDelete($id);
        $data['shop'] = $this->m_covid->shopSelect();
        $this->load->view('covid',$data);        
    }
}

?>