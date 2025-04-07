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
        
        // 初始化最低價格為第一天的價格
        $minPrice = $prices[0];
        // 初始化最大利潤為0
        $maxProfit = 0;
        
        // 從第二天開始遍歷每一天的價格
        for ($i = 1; $i < count($prices); $i++) {
            // 更新最低價格
            $minPrice = min($minPrice, $prices[$i]);
            // 計算當天賣出的利潤，並更新最大利潤
            $currentProfit = $prices[$i] - $minPrice;
            $maxProfit = max($maxProfit, $currentProfit);
        }
        
        return $maxProfit;
    }
}

// 測試案例
/*
$prices1 = [7, 1, 5, 3, 6, 4];
echo "最大利潤：" . maxProfit($prices1) . "\n";  // 應該輸出 5

$prices2 = [7, 6, 4, 3, 1];
echo "最大利潤：" . maxProfit($prices2) . "\n";  // 應該輸出 0

// 邊界情況
$prices3 = [1];
echo "最大利潤：" . maxProfit($prices3) . "\n";  // 應該輸出 0

$prices4 = [2, 4, 1];
echo "最大利潤：" . maxProfit($prices4) . "\n";  // 應該輸出 2

這個問題可以使用一次遍歷來解決，關鍵在於同時追蹤兩個變數：

到目前為止的最低股票價格 $minPrice
到目前為止的最大利潤 $maxProfit
*/