<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css"&gt;
<title></title>
</head>
<body>
<main>
<form action="form_validation" method="post">
<h1>สมัครสมาชิก</h1>
<div>
<label for="name">ชื่อผู้ใช้</label>
<input type="text" name="name" id="name">
<font color="red"><?php echo form_error('name'); ?></font>
</div>
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
<div>
<label for="password2">รหัสผ่านอีกครั้ง</label>
<input type="password" name="password2" id="password2">
<font color="red"><?php echo form_error('password2'); ?></font>
</div>
<div>
<label for="agree">
<input type="checkbox" name="agree" id="agree" value="yes"/>  ฉันเห็นด้วยกับเงื่อนไข
<a href="#" title="term of services">การบริการ</a>
<font color="red"><?php echo form_error('agree'); ?></font>
</label>
</div>
<button  href="http://localhost/ci/index.php/login/authen" type="submit">สมัครสมาชิก</button>

<footer>เป็นสมาชิกอยู่แล้ว? <a href="http://localhost/ci/index.php/login/authen">เข้าสู่ระบบ</a></footer>
</form>
</main>
</body>
</html>
<?php
if(isset($error)){
echo $error;
}
?>