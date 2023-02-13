<?php
foreach($life as $row){
    $l_id=$row->l_id;
    $l_name=$row->l_name;
	$l_day=$row->l_day;
    $l_email=$row->l_email;
    $l_phone=$row->l_phone;
    $l_address=$row->l_address;
    $l_krom=$row->l_krom;
	$l_price=$row->l_price;
}
?>
<!DOCTYPE html>

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
<body l_id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Bolttect</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
      
        <li>

         <a class="nav-link"  href="http://localhost:81/ci/index.php/c_covid/formInsert">ประกันโควิด</a>
        
        </li>

        <li><a class="nav-link"  href="http://localhost:81/ci/index.php/c_life/formInsert">ประกันชีวิต</a>
      
      </li>
        
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">บัญชี
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="http://localhost:81/ci/index.php/login/authen">ออกจากระบบ</a></li>
        </ul>
      </li>
      </ul>
    </div>
  </div>
</nav>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Bolttect</title>
</head>
<body>

<br><br><br><br><br><br><br><br><br>
<center><img src="https://scontent.fbkk2-7.fna.fbcdn.net/v/t39.30808-6/275551429_3118149988512885_3329014792324801372_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=730e14&_nc_ohc=T6Y2vm_Ie7sAX8bOfRb&_nc_ht=scontent.fbkk2-7.fna&oh=00_AT-Nm6q1RzrzYf2iDSpSG_MOOJQaHqKcXqkkU9x_vDg6Lw&oe=622B8AD0" width="1000" height="550">
  </center>
  <center><img src="https://scontent.fbkk2-8.fna.fbcdn.net/v/t39.30808-6/275439903_3118149971846220_5224428549473614981_n.jpg?_nc_cat=102&ccb=1-5&_nc_sid=730e14&_nc_ohc=Ugc8P74ei2sAX9pl5Oe&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT8QguOtQsFhnXGl9uZoGqz9h8nRp73l19GZO-pg5ziK4A&oe=622B9254" width="1000" height="500">
</center>
  
  <h3 class="text-center">แบบฟอร์มแก้ไขข้อมูลประกันชีวิต</h3><br>
<div class="container">
      <div class="row">
  <div class="col-sm-6" >
  <br><br><br>
  <center><img src="https://image.makewebeasy.net/makeweb/m_750x0/BFBrAWbeP/Home/%E0%B8%9B%E0%B8%A3%E0%B8%B0%E0%B8%81%E0%B8%B1%E0%B8%99%E0%B8%8A%E0%B8%B1%E0%B9%88%E0%B8%A7%E0%B8%A3%E0%B8%B0%E0%B8%A2%E0%B8%B0%E0%B9%80%E0%B8%A7%E0%B8%A5%E0%B8%B2.png?v=202012190947" width="550" height="550">
</center>
</div>

      <div class="col-sm-6" >
		<form method="post" action="formUpdate">
    <div class="form-group">
			<div class="col-sm-6">
	<label for="l_id" >รหัสบัตรประจำตัวประชาชน (Identification Numer) </label>
	<input type="text"  class="form-control" name="l_id" style="width:400px;" placeholder="รหัสบัตรประจำตัวประชาชน"  value="<?php echo $l_id; ?>">
</div>
    </div>
    <br><br><br><br><br><br>
    <div class="form-group">
  <div class="col-sm-6">
	<label for="l_name">ชื่อ - สกุล  ( Firstname - Lastname ) </label>
	<input type="text" class="form-control" name="l_name" style="width:400px;" placeholder="ชื่อ - สกุล" value="<?php echo $l_name; ?>">
  </div>
      </div>
      <br><br><br><br>
<div class="form-group">
			<div class="col-sm-6">
	<label for="l_day">วัน / เดือน / ปีเกิด ( Brithday ) </label>
	<input type="date" class="form-control" name="l_day" style="width:400px;"  placeholder="วัน / เดือน / ปีเกิด" value= "<?php echo $l_day; ?>">
  </div>
    </div>
    <br><br><br><br>
		<div class="form-group">
			<div class="col-sm-6">
	<label for="l_email">อีเมลล์ ( Email ) </label>
	<input type="email"class="form-control" name="l_email" style="width:400px;" placeholder="อีเมลล์" value="<?php echo $l_email; ?>">
  </div>
</div>
<br><br><br><br>
		<div class="form-group">
			<div class="col-sm-6">
	<label for="l_phone">เบอร์ติดต่อ ( Phone ) </label>
	<input type="text" pattern="[0-9]{1,}" title="กรอกตัวเลขเท่านั้น" class="form-control" name="l_phone" style="width:400px;" placeholder="เบอร์ติดต่อ" value="<?php echo $l_phone; ?>">
  </div>
    </div>
    <br><br><br><br>
		<div class="form-group">
			<div class="col-sm-6">
	<label for="l_address">ที่อยู่ ( Address )  </label>
	<textarea type="textarea"class="form-control" name="l_address" style="width:400px;" placeholder="ที่อยู่ที่สามารถติดต่อได้" rows="6" value="<?php echo $l_address; ?>"></textarea>
  </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>
		<div class="form-group">
			<div class="col-sm-6">
	<label for="l_krom">แผนประกัน ( Insurance plan ) </label>
	<input type="text"class="form-control" name="l_krom"style="width:400px;" placeholder="แผนประกัน" value="<?php echo $l_krom; ?>">
  </div>
    </div>
    <br><br><br><br>
    <div class="form-group">
			<div class="col-sm-6">
	<label for="l_price">ราคาประกัน ( Price ) </label>
	<input type="text" pattern="[0-9]{1,}" title="กรอกตัวเลขเท่านั้น"class="form-control" name="l_price" style="width:400px;" placeholder="ราคาประกัน"value= "<?php echo $l_price; ?>">
  </div>
    </div>
	<center><div class="d-grid gap-2 col-6 mx-auto">
    <br><br><br><br><br>
  <button class="btn btn-success"type="Update">Update</button>
  <button class="btn btn-secondary"type="reset">Reset</button></center>
  <br> 
    <br></div>
      </div>
</form>
<br>
<br>
<br>
	</div>
  <footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <h1>Bolttect</a></h5>
  <h5>เลขทะเบียน 0205557039412   เลขที่ใบอนุญาต ว00022/2558</h5>
  <h5>ติดต่อเราได้ที่ : บริการลูกค้าสัมพันธ์ 02 582 8899 หรือ แจ้งอุบัติเหตุ/ช่วยเหลือฉุกเฉิน 24 ชม. 02 582 8844</h5>
  

</main>
</body>
</html>