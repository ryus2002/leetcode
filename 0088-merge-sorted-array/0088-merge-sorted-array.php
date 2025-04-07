class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(&$nums1, $m, $nums2, $n) {
        // 我的想法是從後面開始填，這樣就不用擔心覆蓋問題
        // 先定義三個指標，分別指向兩個陣列的尾巴和結果陣列的尾巴
        $i = $m - 1;  // nums1 的有效元素指標
        $j = $n - 1;  // nums2 的指標
        $k = $m + $n - 1;  // 合併後陣列的指標
        
        // 只要還有元素沒處理完就繼續
        while ($i >= 0 && $j >= 0) {
            // 哪個大就放哪個
            if ($nums1[$i] > $nums2[$j]) {
                $nums1[$k] = $nums1[$i];
                $i--;  // 往前移動
            } else {
                $nums1[$k] = $nums2[$j];
                $j--;  // 往前移動
            }
            $k--;  // 結果指標也要往前
        }
        
        // 如果nums2還有剩，就全部搬過來
        // nums1剩的話就不用管了，因為本來就在對的位置上
        while ($j >= 0) {
            $nums1[$k] = $nums2[$j];
            $j--;
            $k--;
        }
        
        // 不用回傳，因為是用參考傳遞的方式
        // 我一開始忘了這點，差點寫了return $nums1
    }
}
// 來測試一下
/*
$nums1 = [1, 2, 3, 0, 0, 0];
$m = 3;
$nums2 = [2, 5, 6];
$n = 3;
merge($nums1, $m, $nums2, $n);
print_r($nums1);  // 應該是 [1, 2, 2, 3, 5, 6]

$nums1 = [1];
$m = 1;
$nums2 = [];
$n = 0;
merge($nums1, $m, $nums2, $n);
print_r($nums1);  // 應該是 [1]

$nums1 = [0];
$m = 0;
$nums2 = [1];
$n = 1;
merge($nums1, $m, $nums2, $n);
print_r($nums1);  // 應該是 [1]
*/