<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Sign in</title>
</head>
<body>
<main>
    <form method="post" action="authen">    
        <h1>Sign in</h1>
        <br>
       <center> <div class="imgcontainer">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQNVDiqtBCIKFXeL9pBcRr5P--loPgYsfE5hqt9TwvBScfdnaPFexChVvUkucG3r6tbjdA&usqp=CAU"  width="200"  height="200">
     </div></center>
        <div>
            <label for="username">อีเมลล์</label>
            <input type="text" name="username" id="username">
            <font color="red"><?php echo form_error('username'); ?></font>
        </div>
        <div>
            <label for="password">รหัสผ่าน</label>
            <input type="password" name="password" id="password">
            <font color="red"><?php echo form_error('password'); ?></font>
        </div>
       
        
        <button  href="# " type="submit">เข้าสู่ระบบ</button>
        <br>
        <center><div class="btn-group btn-group-justified">
        <footer>คุณต้องการสมัครสมาชิกใช่หรือไม่? <a href="http://localhost/ci/index.php/register/form_register" >สมัครสมาชิก</a></footer>
  </div></center>
    </form>
</main>
</body>
</html>