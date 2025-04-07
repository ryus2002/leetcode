class Solution {

    /**
     * @param Integer[] $flowerbed
     * @param Integer $n
     * @return Boolean
     */
    function canPlaceFlowers($flowerbed, $n) {

        $size = count($flowerbed); // 花壇的大小
        $put = 0; // 計算可以種植的花的數量

        for ($i = 0; $i < $size; $i++) {
            // 判斷是否可以種花
            if ($flowerbed[$i] == 0) {
                // 檢查左側和右側是否符合條件
                $prev = ($i == 0) ? 0 : $flowerbed[$i - 1];
                $next = ($i == $size - 1) ? 0 : $flowerbed[$i + 1];

                if ($prev == 0 && $next == 0) {
                    // 可以種花，更新花壇並計算種植數量
                    $flowerbed[$i] = 1;
                    $put++;

                    // 如果已經種夠花，直接返回 true
                    if ($put >= $n) {
                        return true;
                    }
                }
            }
        }

        // 如果迴圈結束後仍無法種夠花，返回 false
        return $put >= $n;
    }
}