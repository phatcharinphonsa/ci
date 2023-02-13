<?php
class model_login extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function login($data){
        $User_id = $data['User_id'];
        $User_pass = $data['User_pass'];
        $sql = "select * from user where User_id='$User_id'
        and User_pass='$User_pass'";
        $qr = $this->db->query($sql);
        return $qr->result();
    }
}
?>