<?php
class m_furniture extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function furnitureSelect(){
        $sql = "select * from furniture";
        $qr = $this->db->query($sql);
        return $qr->result();
    }
    public function furnitureDelete($Fur_id){
        $sql = "delete from furniture where Fur_id ='$Fur_id'";
        $qr = $this->db->query($sql);
        return true;
    }
    public function furnitureInsert($data){
        $Fur_id=$data['Fur_id'];
        $Fur_name=$data['Fur_name'];
        $Fur_num=$data['Fur_num'];      
        $Fur_pricebuy=$data['Fur_pricebuy'];
        $Fur_pricesale=$data['Fur_pricesale'];
       // $Fur_typ_id=$data['Fur_typ_id'];
        

        $sql = "insert into furniture values ('$Fur_id','$Fur_name','$Fur_num','$Fur_pricebuy' ,'$Fur_pricesale')";
        $qr = $this->db->query($sql);
        return true;
    }
    
    public function furnitureEdit($Fur_id){
        $sql = "select * from furniture where Fur_id ='$Fur_id'";
        $qr = $this->db->query($sql);
        return $qr->result();
    }
    public function furnitureUpdate($data){
        $Fur_id=$data['Fur_id'];
        $Fur_name=$data['Fur_name'];
        $Fur_num=$data['Fur_num'];      
        $Fur_pricebuy=$data['Fur_pricebuy'];
        $Fur_pricesale=$data['Fur_pricesale'];
       // $Fur_typ_id=$data['Fur_typ_id'];
        

        $sql = "update furniture set name ('$Fur_id','$Fur_name','$Fur_num','$Fur_pricebuy' ,'$Fur_pricesale')";
        $qr = $this->db->query($sql);
        return true;
    }
}
?>