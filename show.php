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
        <center>
            <?php include("menu.php");?>
            <h3>show message</h3>
            <table border="1" width="700">
                <tr>
                    <th>title</th>
                    <th>author</th>
                    <th>content</th>
                    <th>ip</th>
                    <th>time</th>
                    <th>operation</th>
                </tr>
                <?php
                    $info = file_get_contents("message.txt");
                    $info =rtrim($info,'@');
                    $messageList = explode('@@@',$info);
                    foreach($messageList as $key=>$message){
                        $list = explode('##',$message);
                        echo "<tr>";
                        echo "<td>{$list[0]}</td>";
                        echo "<td>{$list[1]}</td>";
                        echo "<td>{$list[2]}</td>";
                        echo "<td>{$list[3]}</td>";
                        echo "<td>".date("Y-m-d H:i:s",$list[4])."</td>";
                        echo "<td><a href='delete.php?id={$key}'>delete</a> </td>";
                        echo "</tr>";


//                        var_dump($message);
                    }
                ?>
            </table>

        </center>
    </body>
</html>