<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // ここにコードを書いていく

        // 昇順・降順ソート関数
        function sort_2way($array, $order) {
            if ($order) {
                // 引数$orderがTRUEであれば、配列を昇順でソートする
                echo '昇順にソートします。<br>';
                sort($array);
                foreach ($array as $key => $value) {
                    echo $value . '<br>';
                }
            } else {
                // 引数$orderがFALSEであれば、配列を降順でソートする
                echo '降順にソートします。<br>';
                rsort($array);
                foreach ($array as $key => $value) {
                    echo $value . '<br>';
                }
            }
        }

        // ソートする配列を宣言
        $nums = [15, 4, 18, 23, 10 ];

        // 関数呼び出し
        sort_2way($nums, TRUE);
        sort_2way($nums, FALSE);
        ?>
    </p>
</body>

</html>
