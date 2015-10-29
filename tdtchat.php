<!DOCTYPE html>
<html>
    <head>
        <title>Чат версия 2.0</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/jquery-2.1.3.min.js"></script>
    </head>
    <body>
        <!-- 
            Какие то стили странички 
            Важно , что для фрейма нужно установить резиновые параметры 
            в данном случае .frchat
        -->
        
        <style>
            .chatconatiner{
                width: 1200px;
                height: 500px;
/*                margin-left: 100px;
                margin-top: 100px;*/
            }
            .frchat{
                width: 100%;
                height: 100%;
                /*display: block;*/
            }
        </style>
        <?php
//            $h = '048d4934d315d3d915bf78d99983996d49868633';
            $h = 'c109658d03d7d51a9d2c8f7b95334915871f3a32';
            $lng = 'ru';
        ?>
        <div id="chatconatiner" class="chatconatiner">
            <iframe class="frchat" frameborder="0" src="http://ajaxdev/projects/tdt/chat.php?h=<?=$h;?>&lng=<?=$lng;?>" ></iframe>
        </div>
    </body>
</html>
