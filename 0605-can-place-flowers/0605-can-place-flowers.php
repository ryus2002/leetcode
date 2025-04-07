class Solution {

    /**
     * @param Integer[] $flowerbed
     * @param Integer $n
     * @return Boolean
     */
    function canPlaceFlowers($flowerbed, $n) {

        if ($n == 0) {
            return true;
        }

        $size = count($flowerbed);
        
        // 特殊情況：花床只有一個位置
        if ($size == 1) {
            return $flowerbed[0] == 0 && $n <= 1;
        }

        $put = 0;

        for ($i = 0; $i < $size; $i++) {
            // 檢查當前位置是否可以種花
            $canPlant = false;
            
            // 頭部位置
            if ($i == 0) {
                $canPlant = $flowerbed[0] == 0 && $flowerbed[1] == 0;
            } 
            // 尾部位置
            else if ($i == $size - 1) {
                $canPlant = $flowerbed[$i] == 0 && $flowerbed[$i-1] == 0;
            } 
            // 中間位置
            else {
                $canPlant = $flowerbed[$i-1] == 0 && $flowerbed[$i] == 0 && $flowerbed[$i+1] == 0;
            }
            
            // 如果可以種花，更新狀態
            if ($canPlant) {
                $flowerbed[$i] = 1;
                $put++;
                
                // 如果已經種夠了花，提前返回
                if ($put >= $n) {
                    return true;
                }
            }
        }

        return $put >= $n;
    }
}