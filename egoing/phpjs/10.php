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
        list = new Array("one","two","three<br/>");
        document.write(list);
        document.write(list[0]);
        document.write(list[1]);
        document.write(list[2]);
        document.write(list.length);

    </script>

    <h1>php</h1>
    <?php
        $list = array("one","two","three<br/>");
        
        echo $list[0];
        echo $list[1];
        echo $list[2];
        echo count($list);
    ?>
</body>
</html>