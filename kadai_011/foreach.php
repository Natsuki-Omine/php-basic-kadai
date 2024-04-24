<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎11章課題</title>
</head>

<body>
    <p>
        <?php
        // 連想配列$onion_infoを作成
        $onion_info = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];

        // 連想配列$onion_infoのキーと値をforeach文で1つずつ順番に出力する
        foreach ($onion_info as $key => $value) {
            echo "{$key} : {$value}<br>";
        }
        ?>
    </p>  
</body>
</html>