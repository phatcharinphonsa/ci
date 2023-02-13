<?php
foreach($furniture as $row){
    $Fur_id=$row->Fur_id;
    $Fur_name=$row->Fur_name;
  	$Fur_num=$row->Fur_num;
    $Fur_pricebuy=$row->Fur_pricebuy;
    $Fur_pricesale=$row->Fur_pricesale;
   // $Fur_typ_id=$row->Fur_typ_id;
    
}
?>

<<!DOCTYPE html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font: 400 15px Lato, sans-serif;
    line-height: 1.8;
    color: #818181;
  }
  h2 {
    font-size: 24px;
    text-transform: uppercase;
    color: #303030;
    font-weight: 600;
    margin-bottom: 30px;
  }
  h4 {
    font-size: 19px;
    line-height: 1.375em;
    color: #303030;
    font-weight: 400;
    margin-bottom: 30px;
  }  
  .jumbotron {
    background-color: #f4511e;
    color: #fff;
    padding: 100px 25px;
    font-family: Montserrat, sans-serif;
  }
  .container-fluid {
    padding: 60px 50px;
  }
  .bg-grey {
    background-color: #f6f6f6;
  }
  .logo-small {
    color: #f4511e;
    font-size: 50px;
  }
  .logo {
    color: #f4511e;
    font-size: 400px;
  }
  .thumbnail {
    padding: 0 0 10px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail img {
    width: 100%;
    height: 100%;
    margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
    background-image: none;
    color: #f4511e;
  }
  .carousel-indicators li {
    border-color: #f4511e;
  }
  .carousel-indicators li.active {
    background-color: #f4511e;
  }
  .item h4 {
    font-size: 19px;
    line-height: 1.375em;
    font-weight: 400;
    font-style: italic;
    margin: 70px 0;
  }
  .item span {
    font-style: normal;
  }
  .panel {
    border: 1px solid #f4511e; 
    border-radius:0 !important;
    transition: box-shadow 0.5s;
  }
  .panel:hover {
    box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
    border: 1px solid #f4511e;
    background-color: #fff !important;
    color: #f4511e;
  }
  .panel-heading {
    color: #fff !important;
    background-color: #f4511e !important;
    padding: 25px;
    border-bottom: 1px solid transparent;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
    border-bottom-left-radius: 0px;
    border-bottom-right-radius: 0px;
  }
  .panel-footer {
    background-color: white !important;
  }
  .panel-footer h3 {
    font-size: 32px;
  }
  .panel-footer h4 {
    color: #aaa;
    font-size: 14px;
  }
  .panel-footer .btn {
    margin: 15px 0;
    background-color: #ADD8E6;
    color: #fff;
  }
  .navbar {
    margin-bottom: 0;
    background-color: #ADD8E6;
    z-index: 9999;
    border: 0;
    font-size: 14px !important;
    line-height: 1.42857143 !important;
    letter-spacing: 4px;
    border-radius: 0;
    font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
    color: #000000 !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
    color: #ADD8E6 !important;
    background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
    color: #ADD8E6 !important;
  }
  footer .glyphicon {
    font-size: 20px;
    margin-bottom: 20px;
    color: #ADD8E6;
  }
  .slideanim {visibility:hidden;}
  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
      width: 100%;
      margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
      font-size: 150px;
    }
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



<br><br><br><br><br><br><br><br><br>

<h3 class="text-center">แบบฟอร์มแก้ไขข้อมูลเฟอร์นิเจอร์
</h3><br>
<div class="container">
      <div class="row">
      <div class="col-sm-6" >
  <br><br><br>
 
</div>
      <div class="col-sm-6" >
		<form method="post" action="formUpdate">

        <div class="col-sm-6" >
		<form method="post" action="formSave">
		<div class="form-group">
			<div class="col-sm-6">


	<label for="Fur_id" >รหัสเฟอร์นิเจอร์ ( ) </label>
	<input type="text"  class="form-control" name="Fur_id" style="width:400px;" placeholder="รหัสเฟอร์นิเจอร์" value="<?php echo $Fur_id; ?>" required>
        </div>
            </div>
    <br><br><br><br>

    <div class="form-group">
			<div class="col-sm-6">
	<label for="Fur_name">ชื่อ (  ) </label>
	<input type="text" class="form-control" name="Fur_name" style="width:400px;" placeholder="ชื่อเฟอร์นิเจอร์" value="<?php echo $Fur_name; ?>" required>
            </div>
        </div>
<br><br><br><br>

        <div class="form-group">
            <div class="col-sm-6">
	<label for="Fur_num">จำนวน  (  ) </label>
	<input type="text" class="form-control" name="Fur_num" style="width:400px;" placeholder="จำนวน" value="<?php echo $Fur_num; ?>" required>
		    </div>
        </div>
      <br><br><br><br>


        <div class="form-group">
			<div class="col-sm-6">
	<label for="Fur_pricebuy">ราคาซื้อ (  )  </label>
	<input type="text" pattern="[0-9]{1,}" title="กรอกตัวเลขเท่านั้น" class="form-control" name="Fur_pricebuy"  style="width:400px;" placeholder="ราคา" value="<?php echo $Fur_pricebuy; ?>" required>
		    </div>
        </div>
    <br><br><br>

		<div class="form-group">
			<div class="col-sm-6">
	<label for="Fur_pricesale">ราคาขาย (  ) </label>
	<input type="text" pattern="[0-9]{1,}" title="กรอกตัวเลขเท่านั้น" class="form-control" name="Fur_pricesale"  style="width:400px;" placeholder="ราคา" value="<?php echo $Fur_pricesale; ?>" required>
		    </div>
        </div>
    
        <br><br><br>

       
		<br>
		<br>


    <center><div class="d-grid gap-2 col-6 mx-auto">
    <br><br><br><br><br>
  <button class="btn btn-success"type="Update">Update</button>
  <button class="btn btn-secondary"type="reset">Reset</button></center>
  <br> 
    <br></div>
</form>
<br>
<br>
<br>
	</div>
      </div>
</div>
  <footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <h1>Bolttect</a></h5>
  <h5>เลขทะเบียน 0205557039412   เลขที่ใบอนุญาต ว00022/2558</h5>
  <h5>ติดต่อเราได้ที่ : บริการลูกค้าสัมพันธ์ 02 582 8899 หรือ แจ้งอุบัติเหตุ/ช่วยเหลือฉุกเฉิน 24 ชม. 02 582 8844</h5>
</footer>
	
</main>
</body>
</html>