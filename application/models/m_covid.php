<?php
class m_covid extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function shopSelect(){
        $sql = "select * from shop";
        $qr = $this->db->query($sql);
        return $qr->result();
    }
    public function shopDelete($id){
        $sql = "delete from shop where id='$id'";
        $qr = $this->db->query($sql);
        return true;
    }
    public function shopInsert($data){
        $id=$data['id'];
        $name=$data['name'];
        $day=$data['day'];
        $email=$data['email'];
        $phone=$data['phone'];
        $address=$data['address'];
        $krom=$data['krom'];
        $price= $data['price'];

        $sql = "insert into shop values ('$id','$name','$day','$email','$phone','$address','$krom','$price')";
        $qr = $this->db->query($sql);
        return true;
    }
    public function shopEdit($id){
        $sql = "select * from shop where id='$id'";

        $qr = $this->db->query($sql);
        return $qr->result();
    }
    public function shopUpdate($data){
        $id=$data['id'];
        $name=$data['name'];
        $day=$data['day'];
        $email=$data['email'];
        $phone=$data['phone'];
        $address=$data['address'];
        $krom=$data['krom'];
        $price= $data['price'];
        
        $sql = "update shop set name='$name',day='$day',email='$email',phone='$phone', address='$address',krom='$krom',price='$price' 
        where id='$id'";
        
        $qr = $this->db->query($sql);
        return true;

    }
}
?>