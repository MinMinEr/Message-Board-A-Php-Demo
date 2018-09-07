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
            <h3>delete message</h3>
            <?php
                $id = $_GET['id'];
                $info = file_get_contents("message.txt");
                $info =rtrim($info,'@');
                $messageList = explode('@@@',$info);
                unset($messageList[$id]);
                $newInfo = implode("@@@",$messageList);
                file_put_contents("message.txt",$newInfo);
                echo 'delete successfully!';
            ?>
        </div>
    </body>
</html>