<html>
    <head>
        <title>Message Board</title>
        <style>
            .content{
                width: 400px;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <?php include("menu.php");?>
            <h3>add message</h3>
            <?php
            //add message
            //1.get message to add,and add detail such as time and ip
                $title = $_POST['title'];
                $author= $_POST['author'];
                $content = $_POST['content'];
                $ip = $_SERVER['REMOTE_ADDR'];
                $addTime = time();
            //2 combine message
                $message = "{$title}##{$author}##{$content}##{$ip}##{$addTime}";
            //3.put message to message.txt
                $info = file_get_contents("message.txt");
                file_put_contents("message.txt",$info.$message.'@@@');
            //4.output"add Successfully"
                echo 'Add successfull.thanks';
            ?>
        </div>
    </body>
</html>