<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>

<h1>งานที่1 ณัฏฐณิชา ทองประ BIT.2/5 เลขที่44</h1> 

<button>
    <a href="while.php">while.loop</a>
</button>

<div>
<body>


    

    <!-- //. ส่งแบบเก็ท. -->

    <form action="">
        <label for="">เลขแม่สูตรคูณ</label> <br>
        <input type="number" name="num" id="">

        <input type="submit" value="คำนวณ">
    </form>

    <?php
    if(isset($_GET["num"])){
        $num = $_GET["num"];

        echo "สูตรคูณแม่" . $num . "<br>";

        //. เริ่ม.        จบ.     เพิ่มที่ละ1
        for($i = 1; $i <= 12;  $i++){
            //.   เลขแม่.  เครื่องหมาย.   เท่ากับ.   เลขคูณ1-12.
            echo  $num . " x " . $i . " = ". $num * $i .  "<br>";
        }
    }
    ?>
    </div>
</body>
</html>