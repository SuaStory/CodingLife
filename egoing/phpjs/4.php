<!-- 변수를 밖에 뺄 수도 있다 -->
<?php
    $name2 = "egoing.2" 
?>
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
        name = "egoing.";
        document.write("안녕하세요."+ name);
    </script>

    <h1>php</h1>
    <?php
        $name = "egoing.";
        echo "안녕하세요.".$name.$name2;
    ?>
</body>
</html>