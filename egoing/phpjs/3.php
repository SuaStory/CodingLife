<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>JavaScript</h1>
    <script>
        document.write(10+10);
        document.write("10"+"10");
    </script>

    <h1>PHP</h1>
    <?php
        echo 10+10; 
        ?>
    <?php    
        echo "10"+"10";
        // php는 큰따옴표로 감싸도 숫자로 인식한다 결과20
    ?>
    <?php    
        echo "10"."10";
        // 문자열 합칠 땐 콤마
    ?>
</body>
</html>