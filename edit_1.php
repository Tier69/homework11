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
            margin-left: 0 px;
            /* อันนี้กำหนดส่วนย่อหน้าด้านบน */
            margin-top: 50px;
        }
    </style>


    <title>แก้ไขข้อมูลหนังสือ</title>
</head>

<body>
    <br><br>
    <center>
        <h1>แก้ไขข้อมูลหนังสือ</h1>
    </center>
    <?php
    //เริ่มเก็บข้อมูล
    $book_id = $_POST['book_id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $published_year = $_POST['published_year'];
    $mood = $_POST['mood'];
   


    //เขียนคำสั่ง SQL


    $sql = "UPDATE book1 SET title='$title',author='$author',genre='$genre',published_year='$published_year',mood='$mood' WHERE book_id=$book_id ";

    // รับคำสั่ง sql
    if ($conn->query($sql) === TRUE) {
        echo '<div class="alert alert-success">
        ยินดีด้วยครับคุณได้ทำการแก้ไขข้อมูล เรียบร้อย !!!  </div>" ';

        echo '<a type="button" href="show.php" class="btn btn-info btn-sm"> กลับหน้าแสดงข้อมูล </a> ';
    } else {
        echo 'มีข้อผิดพลาด' . $sql . '<br>' . $conn->error;
    }
    // ปิดการเชื่อมต่อ
    $conn->close();
    ?>

    พัฒนาโดย 664485028 นภัสกร กิตติเรืองชัย หมู่เรียน 66/96 <br>
    </head>

</html>