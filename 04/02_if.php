<?php

echo '$pointの値を入力してください: ';
$point = trim(fgets(STDIN));

// 商を求めます
if ($point % 2 == 0) {
    echo $point.'は偶数です';
} else {
    echo $point.'は奇数です';
}
