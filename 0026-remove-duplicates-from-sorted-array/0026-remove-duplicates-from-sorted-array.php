class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        // 處理邊界情況：如果陣列為空，直接返回0
        if (count($nums) == 0) {
            return 0;
        }
        
        // 使用雙指針法
        // $slow 指向當前不重複元素應該放的位置
        // $fast 用來遍歷整個陣列
        $slow = 0;
        
        // 從第二個元素開始遍歷
        for ($fast = 1; $fast < count($nums); $fast++) {
            // 如果當前元素與前一個不同，說明找到了一個新的不重複元素
            if ($nums[$fast] != $nums[$slow]) {
                // 將 $slow 指針向前移動一步
                $slow++;
                // 將新的不重複元素放到 $slow 指向的位置
                $nums[$slow] = $nums[$fast];
            }
            // 如果當前元素與前一個相同，則 $fast 繼續前進，$slow 不動
        }
        
        // $slow 是從0開始的索引，所以返回 $slow + 1 作為長度
        return $slow + 1;
        
        // 我一開始想用 array_unique()，但那樣會重建索引
        // 題目要求原地修改，所以還是用這種雙指針方式比較好
    }
}
// 測試一下看看
/*
$nums1 = [1, 1, 2];
$k1 = removeDuplicates($nums1);
echo "結果長度: $k1\n";
print_r(array_slice($nums1, 0, $k1)); // 應該是 [1, 2]

$nums2 = [0, 0, 1, 1, 1, 2, 2, 3, 3, 4];
$k2 = removeDuplicates($nums2);
echo "結果長度: $k2\n";
print_r(array_slice($nums2, 0, $k2)); // 應該是 [0, 1, 2, 3, 4]

// 邊界情況
$nums3 = [1];
$k3 = removeDuplicates($nums3);
echo "結果長度: $k3\n"; // 應該是 1

$nums4 = [1, 1, 1, 1];
$k4 = removeDuplicates($nums4);
echo "結果長度: $k4\n"; // 應該是 1
print_r(array_slice($nums4, 0, $k4)); // 應該是 [1]
*/
