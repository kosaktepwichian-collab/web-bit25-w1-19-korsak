<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>งานที่ 1 ก่อศักดิ์ เทพวิเชียร BIT.2/5 เลขที่ 19</h1>

    <form action="">
        <label for="">เลขแม่สูตรนัท</label> <br>
        <input type="number" name="num" id="">

        <input type="submit" value="คำนวณ">
    </form>

    <?php
        if(isset($_GET["num"])){
            $num = $_GET["num"];

            echo "สูตรคุณแม่นัท " . $num;
        }
    ?>

</body>
</html>