<?php
class model_customer extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function customerSelect(){
        $sql = "select * from customer";
        $qr = $this->db->query($sql);
        return $qr->result();
    }
    public function customerDelete($Cus_id){
        $sql = "delete from customer where Cus_id ='$Cus_id'";
        $qr = $this->db->query($sql);
        return true;
    }
    public function customerInsert($data){
        $Cus_id =$data['Cus_id'];
        $Cus_name =$data['Cus_name'];
        $sql = "insert into customer values('$Cus_id','$Cus_name')";
        $qr = $this->db->query($sql);
        return true;
    }
    public function customerEdit($Cus_id){
        $sql = "select * customer where Cus_id ='$Cus_id'";
        $qr = $this->db->query($sql);
        return $qr->result();
    }
    public function customerUpdate($data){
        $Cus_id =$data['Cus_id'];
        $Cus_name =$data['Cus_name'];     
        $sql = "update customer set Cus_name ='$Cus_name' where Cus_id ='$Cus_id'";
        $qr = $this->db->query($sql);
        return true;


    }
}
?>