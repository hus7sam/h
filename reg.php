<?php

//session_start();
//include('header.php');
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>تسجيل </title>
</head>
<body>

<div class="alert">
<!--    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>-->
    <h1> تنبية !</h1>    لا يمكن تعديل البيانات, لذالك الرجاء التاكد من صحة البيانات قبل التسجيل
</div>

<div class="reg" >
    <h1 class="header_font">تسجيل عضو جديد</h1>
    <form action="login.php" method="post" class="form_log">
        <input type="email" name="user_email" placeholder="أكتب الايميل " about="سسس" required>
        <input type="email" name="user_email2" placeholder="أعد كتابة الايميل " required>
        <input type="password" name="user_passwrod" placeholder="أكتب كلمة المرور " required>
        <input type="password" name="user_passwrod" placeholder="أعد كتابة كلمة المرور " required>
<!--        <label for="birthday">تاريخ الميلاد</label>-->
<!--        <input type="date" id="birthday" name="birthday">-->
        <input type="submit" value="تسجيل">
        <a class="link_login" href="login.php"> دخول </a>
    </form>

</div>


</body>
</html>
<?php //include('footer.php');?>