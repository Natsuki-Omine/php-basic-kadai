<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP基礎5章課題</title>
</head>

<body>
    <p>
        <?php
        // 生徒10人分の点数
        $score1 = 80;
        $score2 = 60;
        $score3 = 55;
        $score4 = 40;
        $score5 = 100;
        $score6 = 25;
        $score7 = 80;
        $score8 = 95;
        $score9 = 30;
        $score10 = 60;

        // 合計点を変数に代入
        $total_score = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
        // 平均点を変数に代入
        $average_score = $total_score / 10;

        // 平均点を出力する
        echo "平均点は{$average_score}点です。";

        ?>
    </p>    
</body>

</html>
