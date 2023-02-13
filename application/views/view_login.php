<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Sign in</title>
</head>
<body>
<main>
    <form method="post" action="authen">    
        <center><div class="imgcontainer">
            <img src="data:image/png;base64,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"  width="200"  height="200">
        </div></center>

        <div>
            <label for="User_id">ชื่อผู้ใช้ </label>
            <input type="text" name="User_id" id="User_id">
            <font color="red"><?php echo form_error('User_id'); ?></font>
        </div>

        <div>
            <label for="User_pass">รหัสผ่าน </label>
            <input type="password" name="User_pass" id="User_pass">
            <font color="red"><?php echo form_error('User_pass'); ?></font>
        </div>    
        <br>
        <button  href="#" type="submit" class="btn btn-dark">เข้าสู่ระบบ</button>
        <br>
        <br>
    </form>
</main>
</body>
</html>