class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        // 如果價格列表為空或只有一天，無法交易，返回0
        if (count($prices) <= 1) {
            return 0;
        }
        
        $totalProfit = 0;
        
        // 遍歷價格陣列（從第二天開始）
        for ($i = 1; $i < count($prices); $i++) {
            // 如果今天的價格高於昨天的價格，可以獲利
            if ($prices[$i] > $prices[$i-1]) {
                // 累加獲利部分
                $totalProfit += $prices[$i] - $prices[$i-1];
            }
        }
        
        return $totalProfit;
    }
}

// 測試案例
/*
$prices1 = [7, 1, 5, 3, 6, 4];
echo "最大利潤：" . maxProfit($prices1) . "\n";  // 應該輸出 7

$prices2 = [1, 2, 3, 4, 5];
echo "最大利潤：" . maxProfit($prices2) . "\n";  // 應該輸出 4

$prices3 = [7, 6, 4, 3, 1];
echo "最大利潤：" . maxProfit($prices3) . "\n";  // 應該輸出 0
*/