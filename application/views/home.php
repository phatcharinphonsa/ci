<?php
if(isset($this->session->userdata['username'])){
$username = $this->session->userdata['username'];
//$name = $this->session->userdata['name'];
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
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


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
          <li><a class="nav-link" href="http://localhost/ci/index.php/login/authen">ออกจากระบบ</a></li>
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


  <br><br><br><br>
<center><img src="https://scontent.fbkk2-8.fna.fbcdn.net/v/t39.30808-6/275230323_3231884050415340_3849926914927645169_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=730e14&_nc_ohc=2IucjBidYfsAX-XbB-E&_nc_oc=AQlr0pqfe02YSRTrB0L3Y4bHtz0KAhzkSEtYYU_e_M35ttNt1de0PFUgEAXRBvhJeS1qCqbM-dpbif-foSF1n8j8&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT8YpdaVeOmG8Y0_imC2g1Omz7N88zd2znWPm84mNZjL9A&oe=622CED7E" width="1600" height="250"></center>
  <div class="row">
  <div class="col-sm-2">
  </div>
  <div class="col-sm-4">
  <br><br><br><br><br>
    <h2>ประกันไวรัสโคโรนา</h2>
    <h4>   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;แผนประกันไวรัสโคโรนาของเรา ท่านสามารถเลือกความคุ้มครองได้ทั้งค่ารักษาพยาบาล 
      และค่าชดเชยอื่นๆ ที่เกิดขึ้นจากการติดเชื้อไวรัสโคโรนาหรือไวรัสโควิด-19 ทำให้ท่านและคนในครอบ
      ครัวของท่านใช้ชีวิตได้อย่างปลอดภัยมากขึ้น</h4>
      <br>
      <h4>อ่านรายละเอียดเพิ่มเติมเกี่ยวกับแผนประกันได้ที่ข้างล่างนี้</h4>
  </div>
  <div class="col-sm-2">
    <br><br><br><br><br><br><center>
    <img src="https://scontent.fbkk2-4.fna.fbcdn.net/v/t39.30808-6/275363493_3232652590338486_6559355539592133506_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=730e14&_nc_ohc=DydXXUWm1zYAX9U71aG&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT94qvJOgEr7mR2CQnIscXCUU11r9fiyg-L-KTBAgeHjpA&oe=622A17ED" width="155" height="250">
    <br><br><br>
    
    </div></center>
  <div class="col-sm-2">
  <br><br><br><br><br><br><center>
    <img src="https://scontent.fbkk2-7.fna.fbcdn.net/v/t39.30808-6/275296703_3232652600338485_3644327380805674530_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=730e14&_nc_ohc=DqW2dEtsBakAX_W7jwq&_nc_ht=scontent.fbkk2-7.fna&oh=00_AT-EJxdAtIjkSBJ986cHK5L-4_L4fOfdvwDQcDLSfIl8iA&oe=6228DCAB" width="155" height="250">
    <br><br><br>
   
  </div></center>
  <div class="col-sm-2"></div>
</div>

<br><br><br><br>
<center>
  <img src="https://scontent.fbkk2-4.fna.fbcdn.net/v/t39.30808-6/275412709_3232690227001389_5159033797057284693_n.jpg?_nc_cat=101&ccb=1-5&_nc_sid=730e14&_nc_ohc=yskDH7yE2g8AX-XGwpL&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT9tuwZOchQJVA96cYO9aabbha9rB5poemBIMwogpo5gWA&oe=622A6814" width="1000" height="650">
  </center>  

  <br><br>
  <center><img src="https://scontent.fbkk2-4.fna.fbcdn.net/v/t39.30808-6/275428524_3118127648515119_3365040192995795001_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=730e14&_nc_ohc=aLZ3Q9QkAAIAX80kGXA&_nc_ht=scontent.fbkk2-4.fna&oh=00_AT92_XQyHmFzwrGlPO1nkiGm_POI62e4mR8SfqvMWDGd4w&oe=622B5AF5" width="1000" height="550">
  </center>  
  <br><br>
  <center><img src="https://scontent.fbkk2-7.fna.fbcdn.net/v/t39.30808-6/275541028_3118129321848285_6675275579743605977_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=730e14&_nc_ohc=DxGv5sVJRG8AX_9y5JN&_nc_ht=scontent.fbkk2-7.fna&oh=00_AT8zoqtsTVZwrspIsaj8LXq8aBn_1a3VcYNiIkcjTLwIOw&oe=622C88A8" width="1000" height="680">
  </center>  
  <center><img src="https://scontent.fbkk2-6.fna.fbcdn.net/v/t39.30808-6/275483054_3118130998514784_1913940465747233585_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=730e14&_nc_ohc=WC0LSTZS0KEAX8P6NJw&_nc_ht=scontent.fbkk2-6.fna&oh=00_AT9ldPnbtnpB9SMBzdgW286qSDLLu9ESl71XcRB77H91ZQ&oe=622CFEA0" width="1000" height="680">
  </center> 
  <center><img src="https://scontent.fbkk2-8.fna.fbcdn.net/v/t39.30808-6/275522397_3118132055181345_1746671705718843002_n.jpg?_nc_cat=100&ccb=1-5&_nc_sid=730e14&_nc_ohc=lnT_IKqH0AIAX84Aza9&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT8ZuPlXbteRVk8NfdO91Lu1iwX4Zte6EYsnQ59kyG6gSQ&oe=622B4CB9" width="1000" height="640">
  </center> 
  <center><img src="https://scontent.fbkk2-3.fna.fbcdn.net/v/t39.30808-6/275426323_3118133568514527_924772862281682862_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=730e14&_nc_ohc=OZn-bA13Bg8AX-RzJUD&tn=-Coui2_2smVf7Pcr&_nc_ht=scontent.fbkk2-3.fna&oh=00_AT9DZtPgM1T-AUznH0fDao30XZ7bsiINt9Z2zSNce0iyGg&oe=622C384C" width="1000" height="680">
  </center> 
  <center><img src="https://scontent.fbkk2-8.fna.fbcdn.net/v/t39.30808-6/275518271_3118134428514441_2304758359999224623_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=730e14&_nc_ohc=PiKskZS_xWEAX8QCmDN&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT-Rq7ZZbDPZhg1JZyEr6GD_kpuRp_jOdjDg9s3na0lkDg&oe=622C82BC" width="1000" height="680">
  </center> 
  <center><img src="https://scontent.fbkk2-8.fna.fbcdn.net/v/t39.30808-6/275518271_3118134428514441_2304758359999224623_n.jpg?_nc_cat=103&ccb=1-5&_nc_sid=730e14&_nc_ohc=PiKskZS_xWEAX8QCmDN&_nc_ht=scontent.fbkk2-8.fna&oh=00_AT-Rq7ZZbDPZhg1JZyEr6GD_kpuRp_jOdjDg9s3na0lkDg&oe=622C82BC" width="1000" height="680">
  </center> 

<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <h1>Bolttect</a></h5>
  <h5>เลขทะเบียน 0205557039412   เลขที่ใบอนุญาต ว00022/2558</h5>
  <h5>ติดต่อเราได้ที่ : บริการลูกค้าสัมพันธ์ 02 582 8899 หรือ แจ้งอุบัติเหตุ/ช่วยเหลือฉุกเฉิน 24 ชม. 02 582 8844</h5>
  
</footer>
</body>
</html>
