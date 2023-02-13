<?php
class model_user extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function userSelect(){
        $sql = "select * from user";
        $qr = $this->db->query($sql);
        return $qr->result();
    }
    public function userDelete($User_id){
        $sql = "delete from user where User_id ='$User_id'";
        $qr = $this->db->query($sql);
        return true;
    }
    public function userInsert($data){
        $User_id =$data['User_id'];
        $User_name =$data['User_name'];
        $sql = "insert into user values('$User_id','$User_name')";
        $qr = $this->db->query($sql);
        return true;
    }
    public function userEdit($User_id){
        $sql = "select * user where Fur_typ_id ='$User_id'";
        $qr = $this->db->query($sql);
        return $qr->result();
    }
    public function userUpdate($data){
        $User_id =$data['User_id'];
        $User_name =$data['User_name'];     
        $sql = "update user set Fur_typ_name ='$User_name' where Fur_typ_id ='$User_id'";
        $qr = $this->db->query($sql);
        return true;
    }
}
?>