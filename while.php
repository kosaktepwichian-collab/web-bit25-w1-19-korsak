
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>คำนวณแม่สูตรคูณ - For Loop</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',Tahoma,sans-serif;
}

body{
    background:#eef4fb;
    padding:30px;
}

/* Header */
.header{
    width:90%;
    margin:auto;
    background:linear-gradient(135deg,#58a6ff,#2563eb);
    color:white;
    text-align:center;
    padding:40px;
    border-radius:25px;
    box-shadow:0 10px 20px rgba(0,0,0,.15);
}

.header h1{
    font-size:60px;
}

.header p{
    font-size:24px;
    margin-top:10px;
}

/* เมนู */
.menu{
    width:90%;
    margin:20px auto;
}

.menu a{
    text-decoration:none;
    color:#2563eb;
    font-size:22px;
    font-weight:bold;
}

/* กล่องฟอร์ม */
.form-box{
    width:90%;
    margin:auto;
    background:white;
    border-radius:25px;
    padding:40px;
    box-shadow:0 5px 15px rgba(0,0,0,.08);

    display:flex;
    justify-content:center;
    align-items:center;
    gap:20px;
}

.form-box label{
    font-size:28px;
    font-weight:bold;
}

.form-box input[type=number]{
    width:250px;
    padding:15px;
    font-size:24px;
    border:2px solid #dbeafe;
    border-radius:10px;
}

.form-box input[type=submit]{
    background:#3b82f6;
    color:white;
    border:none;
    padding:15px 30px;
    font-size:22px;
    border-radius:12px;
    cursor:pointer;
}

/* ผลลัพธ์ */
.result{
    width:90%;
    margin:30px auto;
    background:white;
    border-radius:25px;
    padding:40px;
    box-shadow:0 5px 15px rgba(0,0,0,.08);
}

.result h2{
    text-align:center;
    color:#2563eb;
    margin-bottom:30px;
    font-size:40px;
}

table{
    width:100%;
    border-collapse:separate;
    border-spacing:0 10px;
}

td{
    padding:15px;
    font-size:28px;
    text-align:center;
}

tr{
    background:#f5f9ff;
    border-radius:10px;
}

</style>
</head>

<body>

<div class="header">
    <h1>คำนวณแม่สูตรคูณ</h1>
    <p>คำนวณและแสดงผลแม่สูตรคูณ 1 - 12</p>
</div>

<div class="form-box">

<form method="GET">

<label>กรอกแม่สูตรคูณ :</label>

<input type="number" name="num" required>

<input type="submit" value="คำนวณ">

</form>

</div>

<?php

if(isset($_GET["num"])){

    $num = $_GET["num"];

?>

<div class="result">

<h2>สูตรคูณแม่ <?php echo $num; ?></h2>

<table>

<?php

$i = 1;

while($i <= 12){

    echo "<tr>";
    echo "<td>$num x $i</td>";
    echo "<td>=</td>";
    echo "<td>".($num * $i)."</td>";
    echo "</tr>";

    $i++;

}

?>

</table>

</div>

<?php } ?>

</body>
</html>
