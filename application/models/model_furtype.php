<?php
class model_furtype extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function furniture_typeSelect(){
        $sql = "select * from furniture_type";
        $qr = $this->db->query($sql);
        return $qr->result();
    }
    public function furniture_typeDelete($Fur_typ_id){
        $sql = "delete from furniture_type where Fur_typ_id ='$Fur_typ_id'";
        $qr = $this->db->query($sql);
        return true;
    }
    public function furniture_typeInsert($data){
        $Fur_typ_id =$data['Fur_typ_id'];
        $Fur_typ_name =$data['Fur_typ_name'];
        $sql = "insert into furniture_type values('$Fur_typ_id','$Fur_typ_name')";
        $qr = $this->db->query($sql);
        return true;
    }
    public function furniture_typeEdit($Fur_typ_id){
        $sql = "select * from furniture_type where Fur_typ_id ='$Fur_typ_id'";
        $qr = $this->db->query($sql);
        return $qr->result();
    }
    public function furniture_typeUpdate($data){
        $Fur_typ_id =$data['Fur_typ_id'];
        $Fur_typ_name =$data['Fur_typ_name'];     
        $sql = "update furniture_type set Fur_typ_name ='$Fur_typ_name' where Fur_typ_id ='$Fur_typ_id'";
        $qr = $this->db->query($sql);
        return true;


    }
}
?>