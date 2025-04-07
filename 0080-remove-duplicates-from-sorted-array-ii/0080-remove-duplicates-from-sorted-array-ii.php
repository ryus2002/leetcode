class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        // 處理邊界情況：如果陣列長度小於等於2，不需要處理
        $n = count($nums);
        if ($n <= 2) {
            return $n;
        }
        
        // 使用雙指針法
        // $slow 指向當前有效元素應該放的位置
        // $fast 用來遍歷整個陣列
        $slow = 2; // 從第三個位置開始，因為前兩個元素一定是保留的
        
        // 從第三個元素開始遍歷
        for ($fast = 2; $fast < $n; $fast++) {
            // 檢查當前元素是否應該保留
            // 如果當前元素與前兩個位置的元素不同，則應該保留
            if ($nums[$fast] != $nums[$slow - 2]) {
                $nums[$slow] = $nums[$fast];
                $slow++;
            }
            // 如果當前元素與前兩個位置的元素相同，則跳過
        }
        
        // $slow 是下一個要填入的位置，所以就是新陣列的長度
        return $slow;
        
        // 這題的關鍵是要理解：如果當前元素與倒數第二個保留的元素不同，
        // 那麼當前元素最多只會是第二個重複的，所以應該保留
    }
}
// 測試一下看看
/*
$nums1 = [1, 1, 1, 2, 2, 3];
$k1 = removeDuplicates($nums1);
echo "結果長度: $k1\n"; // 應該是 5
print_r(array_slice($nums1, 0, $k1)); // 應該是 [1, 1, 2, 2, 3]

$nums2 = [0, 0, 1, 1, 1, 1, 2, 3, 3];
$k2 = removeDuplicates($nums2);
echo "結果長度: $k2\n"; // 應該是 7
print_r(array_slice($nums2, 0, $k2)); // 應該是 [0, 0, 1, 1, 2, 3, 3]

// 邊界情況
$nums3 = [1];
$k3 = removeDuplicates($nums3);
echo "結果長度: $k3\n"; // 應該是 1

$nums4 = [1, 1];
$k4 = removeDuplicates($nums4);
echo "結果長度: $k4\n"; // 應該是 2

$nums5 = [1, 1, 1, 1];
$k5 = removeDuplicates($nums5);
echo "結果長度: $k5\n"; // 應該是 2
print_r(array_slice($nums5, 0, $k5)); // 應該是 [1, 1]

*/