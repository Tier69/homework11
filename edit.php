<!DOCTYPE html>
<html lang="en">
<?php
//เชื่อมต่อฐานข้อมูล
include("conn.php");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- เพิ่ม ส่วน Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <!-- เพิ่มฟอนต์ -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: "Kanit", sans-serif;
            margin-left: 100px;
            margin-top: 50px;
        }

        h1 {
            /* อันนี้กำหนดส่วนย่อหน้าด้านซ้าย */
   
            /* อันนี้กำหนดส่วนย่อหน้าด้านบน */
            margin-top: 50px;
        }
    </style>
    

    <title>เเก้ไขข้อมูลหนังสือ</title>
</head>
<h1>แก้ไขข้อมูลหนังสือ</h1>

<?php
if(isset($_GET['action_even'])=='edit'){
    $book_id=$_GET['book_id'];
    $sql="SELECT * FROM book1 WHERE book_id=$book_id";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        $row=$result->fetch_assoc();
    }else{
        echo"ไม่พบข้อมูลที่ต้องการแก้ไข กรุณาตรวจสอบ";
    }
    //$conn->close();
}
?>

<form action="edit_1.php" method="POST">
    <input type="hidden"name="book_id" value="<?php echo$row['book_id']; ?>">
    <div class="row mb-3">
        <label class="col-sm-1 col-form-label"> รหัสหนังสือ </label>
        <div class="col-sm-2">
        <label class="col-sm-1 col-form-label"> <?php echo$row['book_id']; ?> </label>
        </div>
    </div>


    <div class="row mb-3">
        <label class="col-sm-1 col-form-label"> ชื่อหนังสือ </label>
        <div class="col-sm-2">
        <input type="text" name="title" class="form-control" maxlength="50" Value=<?php echo$row['title']; ?> required>
        </div>
    </div>
   
    <div class="row mb-3">
        <label class="col-sm-1 col-form-label"> ผู้แต่ง </label>
        <div class="col-sm-2">
        <input type="text" name="author" class="form-control" maxlength="100" Value=<?php echo$row['author']; ?> required>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-1 col-form-label"> ประเภทของหนังสือ </label>
        <div class="col-sm-2">
        <select name="genre" class="form-select" aria-label="Default select example">
               <option >กรุณาระบุประเภทของหนังสือนะจ๊ะ</option>
               <option value="ผจญภัย"<?php if ($row['genre']=='ผจญภัย'){ echo "selected";} ?>>ผจญภัย</option>
               <option value="รักโรแมนติก"<?php if ($row['genre']=='รักโรแมนติก'){ echo "selected";} ?>>รักโรแมนติก</option>
               <option value="สารคดี"<?php if ($row['genre']=='สารคดี'){ echo "selected";} ?>>สารคดี</option>
               <option value="ดราม่า"<?php if ($row['genre']=='ดราม่า'){ echo "selected";} ?>>ดราม่า</option>
               <option value="ประวัติศาสตร์"<?php if ($row['genre']=='ประวัติศาสตร์'){ echo "selected";} ?>>ประวัติศาสตร์</option>
               <option value="ลึกลับ"<?php if ($row['genre']=='ลึกลับ'){ echo "selected";} ?>>ลึกลับ</option>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-1 col-form-label"> ปีที่ตีพิมพ์ </label>
        <div class="col-sm-2">
        <input type="text" name="published_year" class="form-control" maxlength="10" Value=<?php echo$row['published_year']; ?> required>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-1 col-form-label"> อารมณ์ของหนังสือ </label>
        <div class="col-sm-2">
        <input type="text" name="mood" class="form-control" maxlength="50" Value=<?php echo$row['mood']; ?> required>
        </div>
    </div>


    <button type="submit" class="btn btn-primary"> บันทึกข้อมูล</button>
    <button type="reset" class="btn btn-danger"> ยกเลิก</button>

</form>
<br>
    พัฒนาโดย 664485028 นภัสกร กิตติเรืองชัย  <br>
</head>

</html>