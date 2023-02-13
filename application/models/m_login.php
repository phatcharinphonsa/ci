<?php
class m_login extends CI_Model{
    public function __construct(){
        parent::__construct();
    }
    public function login($data){
        $username = $data['username'];
        $password = $data['password'];
        $sql = "select * from users where username='$username'
        and password='$password'";
        $qr = $this->db->query($sql);
        return $qr->result();
    }
}
?>