class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val) {
        // 用來記錄新陣列的索引位置
        $index = 0;
        
        // 遍歷整個陣列
        foreach ($nums as $num) {
            // 如果不是要移除的值，就保留下來
            if ($num != $val) {
                // 把這個值放到新的位置
                $nums[$index] = $num;
                // 索引往後移一位
                $index++;
            }
            // 如果是要移除的值，就跳過不處理
        }
        
        // 最後 $index 就是新陣列的長度
        return $index;
        
        // 我一開始想用 array_filter，但那樣會重建索引
        // 題目要求原地修改，所以還是用這種方式比較好
    }
}
// 測試一下看看
/*
$nums1 = [3, 2, 2, 3];
$val1 = 3;
$k1 = removeElement($nums1, $val1);
echo "結果長度: $k1\n";
print_r(array_slice($nums1, 0, $k1)); // 應該是 [2, 2]

$nums2 = [0, 1, 2, 2, 3, 0, 4, 2];
$val2 = 2;
$k2 = removeElement($nums2, $val2);
echo "結果長度: $k2\n";
print_r(array_slice($nums2, 0, $k2)); // 應該是 [0, 1, 3, 0, 4]

// 邊界情況
$nums3 = [];
$val3 = 1;
$k3 = removeElement($nums3, $val3);
echo "結果長度: $k3\n"; // 應該是 0

$nums4 = [1, 1, 1];
$val4 = 1;
$k4 = removeElement($nums4, $val4);
echo "結果長度: $k4\n"; // 應該是 0
*/