<?php
class m_register extends CI_Model{
public function __construct(){
parent::__construct();
}
public function insert($data){
$name=$data['name'];
$username=$data['username'];
$password=$data['password'];
$sql = "insert into users value('$name','$username','$password')";
$qr = $this->db->query($sql);
return true;
}
public function select(){
$sql = "select * from users";
$qr = $this->db->query($sql);
return $qr->result();
}
}
?>