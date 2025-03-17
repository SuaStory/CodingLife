<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript</title>
    <link rel="stylesheet" href="http://localhost/egoing/style.css">
</head>
<body id="target">
    <header>
        <img src="https://s3.ap-northeast-2.amazonaws.com/opentutorials-user-file/course/94.png">
        <h1><a href="http://localhost/egoing/index.php"> JavaScript</h1>
    </header>

    <nav>
        <ol>
        <?php
            echo file_get_contents("list.txt");
        ?>
        </ol>
    </nav>

    <div id="control">
    <input type="button" value="white" id="white_btn"/>
    <input type="button" value="black" id="black_btn"/>
    </div>
    <script src="http://localhost/egoing/script.js"></script>
    
    <article style="float:left">
        <h2>왼쪽에서 보고 싶은것을 클릭</h2>
        <?php
        if (empty ($_GET['id'])==false) {
            echo file_get_contents($_GET['id'].".txt");
        }
            
        ?>
    </article>

    
</body>
</html>