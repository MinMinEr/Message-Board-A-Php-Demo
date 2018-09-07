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
            <form action="doAdd.php" method="post">
                <table width="400" cellpadding="4">
                    <tr>
                        <td align="right">title</td>
                        <td>
                            <input type="text" name="title"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right">author</td>
                        <td>
                            <input type="text" name="author"/>
                        </td>
                    </tr>
                    <tr>
                        <td align="right" valign="top">content</td>
                        <td>
                            <textarea name="content" cols="30" rows="5"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit" value="submit">&nbsp;&nbsp;
                            <input type="reset" value="reset">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>