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
            }
            .frchat{
                width: 100%;
                height: 100%;
            }
        </style>
        <?php
            $h = 'f62bc7461e146b6209a4c0f38d679e89c16d9aa2';
            $lng = 'ru'; 
        ?>
        <div id="chatconatiner" class="chatconatiner">
            <iframe class="frchat" frameborder="0" src="http://chatdev.trafsync.com/projects/tdt/chat.php?h=<?=$h;?>&lng=<?=$lng;?>" ></iframe>
        </div>
    </body>
</html>
