<?php
class m_life extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function shopSelect(){
        $sql = "select * from life";
        $qr = $this->db->query($sql);
        return $qr->result();
    }
    public function shopDelete($l_id){
        $sql = "delete from life where l_id='$l_id'";
        $qr = $this->db->query($sql);
        return true;
    }
    public function shopInsert($data){
        $l_id=$data['l_id'];
        $l_name=$data['l_name'];
        $l_day=$data['l_day'];
        $l_email=$data['l_email'];
        $l_phone=$data['l_phone'];
        $l_address=$data['l_address'];
        $l_krom=$data['l_krom'];
        $l_price= $data['l_price'];

        $sql = "insert into life values('$l_id','$l_name','$l_day','$l_email','$l_phone','$l_address','$l_krom','$l_price')";

        
        $qr = $this->db->query($sql);
        return true;
    }
    public function shopEdit($l_id){
        $sql = "select * from life where l_id='$l_id'";

        $qr = $this->db->query($sql);
        return $qr->result();
    }
    public function shopUpdate($data){
        $l_id=$data['l_id'];
        $l_name=$data['l_name'];
        $l_day=$data['l_day'];
        $l_email=$data['l_email'];
        $l_phone=$data['l_phone'];
        $l_address=$data['l_address'];
        $l_krom=$data['l_krom'];
        $l_price= $data['l_price'];
        
        $sql = "update life set l_name='$l_name',l_day='$l_day',l_email='$l_email',l_phone='$l_phone', l_address='$l_address',l_krom='$l_krom',l_price='$l_price' 
        where l_id='$l_id'";
        
        $qr = $this->db->query($sql);
        return true;


    }
}
?>