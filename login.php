<?php


?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <title>تسجيل دخول</title>
</head>
<body>
<!-- الرجاء الاهتمام اكثر وشكرا  -->

<div class="log" >
<h1 class="header_font">تسجيل دخول</h1>
    <form action="login.php" method="post" class="form_log">
        <input type="text" name="user_name" placeholder="ادخل اسم المستخدم" required>
        <input type="password" name="Pass_word" id="Pass_word" placeholder="أدخل كلمة المرور" required>
        <input type="submit" value="دخول">
        <a class="link_login" href="reg.php"> تسجيل </a>
    </form>
</div>




</body>
</html>
