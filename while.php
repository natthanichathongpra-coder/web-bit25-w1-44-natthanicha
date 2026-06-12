<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
 <h1>งานที่1 ณัฏฐณิขา ทองประ BIT.2/5 เลขที่44</h1>
    <button><a href="index.php">index.loop</a></button>
    <div>
<body>
   

    <form action="">
        <label for="">เลขแม่สูตรคูณ</label> <br>

        <input type="number" name="num" id="">

        <input type="submit" value="คำนวณ">


    </form>
    
    <?php
    if (isset($_GET["num"])) {
      $num = $_GET["num"];

      echo "<h3> สูตรคูณแม่ $num </h3>";

     $i = 1;
    while ($i <= 12){
        echo $num . "X" . $i . "=" . ($num * $i) . "<br>";
        $i++;
    }
   
    }

    ?>
    </div>
</body>
</html>