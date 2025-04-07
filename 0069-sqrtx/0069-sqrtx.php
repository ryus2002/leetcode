class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        // 處理特殊情況
        if ($x == 0 || $x == 1) {
            return $x;
        }
        
        // 使用二分搜尋法
        $left = 1;
        $right = $x;
        $result = 0;
        
        while ($left <= $right) {
            $mid = $left + floor(($right - $left) / 2);
            
            // 使用除法而不是乘法來避免整數溢出
            if ($mid <= $x / $mid) {
                $left = $mid + 1;
                $result = $mid; // 保存可能的結果
            } else {
                $right = $mid - 1;
            }
        }
        
        return $result;
    }
}