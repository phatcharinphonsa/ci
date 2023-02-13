<?php
if(isset($this->session->userdata['username'])){
$username = $this->session->userdata['username'];
//$name = $this->session->userdata['name'];
}
?>
<H3>Welcome </H3>
You login with username <?php echo $username;?>
<br>
<b><a href="logout">LOGOUT</b>