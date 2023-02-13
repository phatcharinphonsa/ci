<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information</title>
</head>
<body>
<main>
    <form action="form_validation" method="post">
        <h2>บันทึกข้อมูลสินค้า</h2>
        <div>
            <label for="productCode">รหัสสินค้า :</label>
            <input type="text" name="productCode" id="productCode" style="margin: 0px 0px 0px 80px;">
            <font color="red"><?php echo form_error('productCode'); ?></font>
        </div>
        <div><br>
            <label for="nameThai">ชื่อสินค้า [ไทย]:</label>
            <input type="text" name="nameThai" id="nameThai" style="margin: 0px 0px 0px 50px;">
            <font color="red"><?php echo form_error('nameThai'); ?></font>
        </div>
        <div><br>
            <label for="nameEng">ชื่อสินค้า [Eng]:</label>
            <input type="text" name="nameEng" id="nameEng" style="margin: 0px 0px 0px 50px;">
            <font color="red"><?php echo form_error('nameEng'); ?></font>
        </div>
        <div><br>
            <label for="productType">ประเภทสินค้า:</label>
            <select name="productType" id="productType" style="margin: 0px 0px 0px 60px;">
                <option value="0">เลือกประเภทสินค้า</option>
                <option value="1">ของใช้ในบ้าน</option>
                <option value="2">อาหารและเครื่องดื่ม</option>
                <option value="3">เสื้อผ้าสตรี</option>
                <option value="4">เสื้อผ้าบุรุษ</option>
            </select>
            <font color="red"><?php echo form_error('productType'); ?></font>
        </div>
        <div><br>
            <label for="productDetails">รายละเอียดสินค้า:</label>
            <textarea name="productDetails" style="margin: 0px 0px 0px 40px; width: 151px; height: 97px;"></textarea>
            <font color="red"><?php echo form_error('productDetails'); ?></font>
        </div>
        <div><br>
            <label for="price">ราคาสินค้า:</label>
            <input type="number" name="price" id="price" style="margin: 0px 0px 0px 80px;">
            <font color="red"><?php echo form_error('price'); ?></font>
        </div>
        <br>
        <button type="submit">เพิ่มข้อมูล</button>
        <button type="reset">ยกเลิก</button>

    </form>
</main>
</body>
</html>