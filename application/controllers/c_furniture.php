<?php
class c_furniture extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_furniture');
    }
    public function formSelect(){
        $data['furniture'] = $this->m_furniture->furnitureSelect();
        $this->load->view('furniture_v',$data);
    }
   
    public function view_home(){
        $this->load->view('view_home');
    }

    
    public function formInsert(){
        $this->load->view('furniture_insert');
    }
    public function formSave(){
        $data['Fur_id']=$_REQUEST['Fur_id'];
        $data['Fur_name']=$_REQUEST['Fur_name'];
        $data['Fur_num']=$_REQUEST['Fur_num'];
        $data['Fur_pricebuy']=$_REQUEST['Fur_pricebuy'];
        $data['Fur_pricesale']=$_REQUEST['Fur_pricesale'];        
        //$data['Fur_typ_id']=$_REQUEST['Fur_typ_id'];

        $this->m_furniture->furnitureInsert($data);
        $data['furniture'] = $this->m_furniture->furnitureSelect();
        $this->load->view('furniture_v',$data);
        
    }
    public function formEdit(){
        $fur_id=$_REQUEST['Fur_id'];
        $data['furniture']=$this->m_furniture->furnitureEdit($fur_id);
        $this->load->view('furniture_edit',$data);
    }
    public function formUpdate(){
        $data['Fur_id']=$_REQUEST['Fur_id'];
        $data['Fur_name']=$_REQUEST['Fur_name'];
        $data['Fur_num']=$_REQUEST['Fur_num'];
        $data['Fur_pricebuy']=$_REQUEST['Fur_pricebuy'];
        $data['Fur_pricesale']=$_REQUEST['Fur_pricesale'];        
        //$data['Fur_typ_id']=$_REQUEST['Fur_typ_id'];


        $this->m_furniture->furnitureUpdate($data);
        $data['furniture'] = $this->m_furniture->furnitureSelect();
        $this->load->view('furniture_v',$data);
    }
    public function formDelete(){
        $Fur_id = $_REQUEST['Fur_id'];
        $this->m_furniture->furnitureDelete($Fur_id);
        $data['furniture'] = $this->m_furniture->furnitureSelect();
        $this->load->view('furniture_v',$data);        
    }
}
?>