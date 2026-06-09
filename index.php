<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>คำนวณแม่สูตรคูณ</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI', Tahoma, sans-serif;
}

body{
    background:#eef6ff;
}

/* หัวเว็บ */
.header{
    width:80%;
    margin:30px auto;
    background:linear-gradient(135deg,#4facfe,#00c6fb);
    color:white;
    text-align:center;
    padding:30px;
    border-radius:20px;
    box-shadow:0 5px 15px rgba(0,0,0,0.2);
}

.header h1{
    font-size:40px;
}

/* เมนู */
.menu{
    width:80%;
    margin:auto;
    text-align:center;
}

.menu a{
    text-decoration:none;
    background:#2196f3;
    color:white;
    padding:10px 20px;
    border-radius:10px;
}

/* กล่องกรอกข้อมูล */
.form-box{
    width:500px;
    margin:30px auto;
    background:white;
    padding:25px;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
    text-align:center;
}

.form-box input[type=number]{
    width:200px;
    padding:10px;
    border:2px solid #90caf9;
    border-radius:10px;
}

.form-box input[type=submit]{
    padding:10px 20px;
    background:#2196f3;
    color:white;
    border:none;
    border-radius:10px;
    cursor:pointer;
}

.form-box input[type=submit]:hover{
    background:#1976d2;
}

/* ผลลัพธ์ */
.result{
    width:80%;
    margin:30px auto;
    background:white;
    border-radius:20px;
    padding:30px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

.result h2{
    color:#1976d2;
    margin-bottom:15px;
}

.result p{
    font-size:22px;
    line-height:40px;
}

</style>
</head>

<body>

<div class="header">
    <h1>คำนวณแม่สูตรคูณ</h1>
</div>

<div class="menu">
    <a href="while.php">ไปหน้า While Loop</a>
</div>

<div class="form-box">

<form method="GET">

    <label>กรอกแม่สูตรคูณ :</label><br><br>

    <input type="number" name="num" required>

    <input type="submit" value="คำนวณ">

</form>

</div>

<div class="result">

<?php

if(isset($_GET["num"])){

    $num = $_GET["num"];

    echo "<h2>สูตรคูณแม่ $num</h2>";

    for($i=1;$i<=12;$i++){

        echo "<p>$num x $i = ".($num*$i)."</p>";

    }

}

?>

</div>

<div class="menu"> <a href="while.php" class="menu-btn"> ↪ ไปหน้า While Loop </a> 
</div>
</body>
</html>