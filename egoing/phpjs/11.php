<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>JavaScript</h1>
    <ul>
    <script>
        list = new Array("KIM","NA","PARK","LEE");
        i = 0;
        while (i < list.length) {
            document.write("<li>"+list[i]+"</li>");
            i++;
        }

    </script>
    </ul>

    <h1>PHP</h1>
    <ul>
    <?php
        $list = array("KIM","NA","PARK","LEE");
        $i = 0;
        while ($i < count($list)) {
            echo "<li>".$list[$i]."</li>";
            $i++;
        }

        
    ?>
    </ul>
</body>
</html>