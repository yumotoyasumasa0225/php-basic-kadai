<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
// ソートする配列を宣言
            function sort_2way($array,$order) {
                if ($order == true) {
                    echo "昇順にソートします\n";
                    echo '<br>';
                    sort($array);
                } else {
                    echo "降順にソートします\n";
		            echo '<br>';
                    rsort($array);
                }
                foreach ($array as $val) {
                    echo "$val\n";
                    echo '<br>';
                }
            }
//配列
$nums = [15, 4, 18, 23, 10 ];
// 関数を呼び出す（1回目）
sort_2way($nums,true);
// 関数を呼び出す（2回目）
sort_2way($nums,false);
        ?>
    </p>
</body>

</html>

