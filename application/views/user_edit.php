<?php
foreach($user as $row){
    $User_id=$row->User_id;
    $User_password=$row->User_password;
    $User_name=$row->User_name;
    $User_address=$row->User_address;
    $User_phone=$row->User_phone;
	$User_status=$row->User_status;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Service History</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 18px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid rgb(255, 252, 252);
  }
  .modal-header, h4, .close {
    background-color: #f1f1f1;
    color: #f1f1f1 !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #DEB887;
    border: 0;
    font-size: 18px !important;
   
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #FFFFFF !important;
  }
  .navbar-nav li a:hover {
    color: #FFFFFF !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #a3a3a3 !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #FFFFFF;
    background-color: #DEB887 !important;
  }
  .dropdown-menu li a {
    color: #DEB887 !important;
  }
  .dropdown-menu li a:hover {
    background-color: #b0acac !important;
  }
  footer {
    background-color: #DEB887;
    color: #FFFFFF;
    padding: 5px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  </style>
</head>
<div id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="http://localhost/ci/index.php/login/view_home">YINGCHAROEN INTERIOR CO., LTD.</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="http://localhost/ci/index.php/login/view_home">Home</a></li>
          
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" >Product management
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="#">Furniture</a></li>
              <li><a href="#">Order furniture</a></li>
              <li><a href="#">Furniture pick up record</a></li>
            </ul>
          </li>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" >Manage sales
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Customer</a></li>
              <li><a href="#">Sell furniture</a></li>
              <li><a href="#">Furniture delivery</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" >Manage list
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="http://localhost/ci/index.php/login/list_oder">Furniture order list</a></li>
              <li><a href="http://localhost/ci/index.php/login/list_pickup">Furniture pick up list</a></li>
              <li><a href="http://localhost/ci/index.php/login/list_sale">Furniture sale items</a></li>
            </ul>
            <li><a href="http://localhost/ci/index.php/login/view_user">Manage users</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="Service.html"><span class="glyphicon glyphicon-user"></span> My Account 
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="Adddog.html">Personal Information</a></li>
              <li><a href="http://localhost/ci/index.php/login/authen">Log out</a></li>
            </ul>
        </ul>
      </div>
    </div>
  </nav>

  
  <body>

  <br><br><br><br><br>


  <h3 class="text-center">แบบฟอร์มแก้ไขข้อมูลผู้ใช้ส่วนตัว</h3><br>
<div class="container">
      <div class="row">
      <div class="col-sm-6" >
  <br><br><br>
  <center><img src="https://media.istockphoto.com/vectors/man-using-protective-surgical-mask-for-covid-19-shield-with-particles-vector-id1248198864?k=20&m=1248198864&s=170667a&w=0&h=TzpBlHg-opAnkW9bT9o09V9Z6DeeC2aYwY-1hbXAOt4=" width="550" height="550">
</center>
</div>
      <div class="col-sm-6" >
		<form method="post" action="formUpdate">

        <div class="form-group">
			<div class="col-sm-6">
	<label for="User_status">ตำแหน่งผู้เข้าใช้งาน ( status ) </label>
	<select name="User_status" id="User_status" style="width:400px;" placeholder="แผนประกัน" value="<?php echo $User_status; ?>" required>
                <option value="750">เจ้าของกิจการ</option>
                <option value="1500">พนักงาน</option>
  </select>
</div>
    </div>
	<center><div class="d-grid gap-2 col-6 mx-auto">
    

    <div class="form-group">
			<div class="col-sm-6">
	<label for="User_id" >รหัสผู้เข้าใช้งาน () </label>
	<input type="text"  class="form-control" name="User_id" style="width:400px;" placeholder="รหัสบัตรประจำตัวประชาชน" value="<?php echo $User_id; ?>" required>
            </div>
    <div>
    <br><br><br><br><br><br>


    <div class="form-group">
			<div class="col-sm-6">
	<label for="User_password">รหัสผ่าน( password ) </label>
	<input type="User_password"class="form-control" name="User_password" style="width:400px;" placeholder="password" value="<?php echo $User_password; ?>" required>
            </div>
    </div>
    <br><br><br><br>


    <div class="form-group">
            <div class="col-sm-6">
	<label for="User_name">ชื่อ - สกุล  ( Firstname - Lastname ) </label>
	<input type="text" class="form-control" name="User_name" style="width:400px;" placeholder="ชื่อ - สกุล" value="<?php echo $User_name; ?>" required>
            </div>
    </div>
    <br><br><br><br>

    <div class="form-group">
			<div class="col-sm-6">
	<label for="User_address">ที่อยู่ ( Address )  </label>
	<textarea type="textarea"class="form-control" name="User_address" style="width:400px;" placeholder="ที่อยู่ที่สามารถติดต่อได้" rows="6" value="<?php echo $User_address; ?>" required></textarea>
		    </div>
    </div>
    <br><br><br><br>
      
	<div class="form-group">
			<div class="col-sm-6">
	<label for="User_phone">เบอร์ติดต่อ ( Phone ) </label>
	<input type="text" pattern="[0-9]{1,}" title="กรอกตัวเลขเท่านั้น" maxlength="10" class="form-control" name="User_phone" style="width:400px;" placeholder="เบอร์ติดต่อ" value="<?php echo $User_phone; ?>" required>
            </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>

    
		<br>
		<br>
    <center><div class="d-grid gap-2 col-6 mx-auto">
    <br><br><br><br><br>
  <button class="btn btn-success"type="Update">Update</button>
  <button class="btn btn-secondary"type="reset">Reset</button></center>
  <br> 
    <br></div>
    </body>
</main>
</table>
</html>
