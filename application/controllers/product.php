<?php
class product extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('form','url');
        $this->load->library('form_validation');
    }
    public function view_product(){
        $this->load->view('view_product');
    }
    public function form_validation(){
        $this->form_validation->set_rules('productCode','ProductCode','required');
        $this->form_validation->set_rules('nameThai','NameThai','required');
        $this->form_validation->set_rules('nameEng','NameEng','required');
        $this->form_validation->set_rules('productType','ProductType','required');
        $this->form_validation->set_rules('productDetails','ProductDetails','required');
        $this->form_validation->set_rules('price','Price','required');

        $this->form_validation->set_message('required','{field} is required');

        if($this->form_validation->run()==FALSE){
            $this->load->view('form_validation');
        }
        else{
            $data['Code'] = $_REQUEST['productCode'];
            $data['thai'] = $_REQUEST['nameThai'];
            $data['eng'] = $_REQUEST['nameEng'];
            $data['type'] = $_REQUEST['productType'];    
            $data['det'] = $_REQUEST['productDetails'];      
            $data['price'] = $_REQUEST['price']; 
            $this->load->view('view_product',$data);
        }
    }
}
?>