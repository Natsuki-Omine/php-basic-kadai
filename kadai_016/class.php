<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎16章課題</title>
</head>

<body>
    <p>
        <?php
        class Food {
            // プロパティを定義
            private $name;
            private $price;

            // コンストラクタを定義
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }

            // show_priceメソッド
            public function show_price() {
                echo $this->price . '<br>';
            }
        }

        class Animal {
            // プロパティを定義
            private $name;
            private $height;
            private $weight;

            // コンストラクタを定義
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // show_heightメソッド
            public function show_height() {
                echo $this->height . '<br>';
            }
        }

        // それぞれをインスタンス化
        $food = new Food('carrot', 130);
        $animal = new Animal('rion', 190, 170000);

        // それぞれのインスタンスを出力
        print_r($food);
        echo '<br>';

        print_r($animal);
        echo '<br>';

        // メソッドへアクセス
        $food->show_price();
        $animal->show_height();
        ?>
    </p>    
</body>

</html>