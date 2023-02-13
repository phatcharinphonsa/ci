<?php
class m_user extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function userSelect(){
        $sql = "select * from user";
        $qr = $this->db->query($sql);
        return $qr->result();
    }
    public function userDelete($User_id){
        $sql = "delete from user where User_id='$User_id'";
        $qr = $this->db->query($sql);
        return true;
    }
    public function userInsert($data){

        $User_id=$data['User_id'];
        $User_password=$data['User_password'];
        $User_name=$data['User_name'];      
        $User_address=$data['User_address'];
        $User_phone=$data['User_phone'];
        $User_status=$data['User_status'];
        

        $sql = "insert into user values ('$User_id','$User_password','$User_name','$User_phone','$User_address','$User_status')";
        $qr = $this->db->query($sql);
        return true;
    }
    public function userEdit($User_id){
        $sql = "select * from user where User_id='$User_id'";

        $qr = $this->db->query($sql);
        return $qr->result();
    }
    public function userUpdate($data){

        $User_id=$data['User_id'];
        $User_password=$data['User_password'];
        $User_name=$data['User_name'];      
        $User_address=$data['User_address'];
        $User_phone=$data['User_phone'];
        $User_status=$data['User_status'];
        

        $sql = "insert into user values ('$User_id','$User_password','$User_name','$User_phone','$User_address','$User_status')";
        $qr = $this->db->query($sql);
        return true;

    }
}
?>