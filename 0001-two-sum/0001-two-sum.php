class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        // 創建哈希表
        $map = [];
        
        // 遍歷陣列
        for ($i = 0; $i < count($nums); $i++) {
            $complement = $target - $nums[$i];
            
            // 檢查互補數是否在哈希表中
            if (array_key_exists($complement, $map)) {
                return [$map[$complement], $i];
            }
            
            // 將當前數字及其索引加入哈希表
            $map[$nums[$i]] = $i;
        }
        
        // 根據題目假設，一定有解，所以不會執行到這裡
        return [];
    }
}
// 測試案例
/*
var_dump(twoSum([2, 7, 11, 15], 9)); // 應該輸出: [0, 1]
var_dump(twoSum([3, 2, 4], 6)); // 應該輸出: [1, 2]
var_dump(twoSum([3, 3], 6)); // 應該輸出: [0, 1]
*/