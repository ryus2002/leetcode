class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return Integer
     */
    function maxVowels($s, $k) {
        // 定義元音字母
        $vowels = ['a', 'e', 'i', 'o', 'u'];
        
        // 計算初始窗口（前k個字符）中的元音數量
        $currentVowels = 0;
        for ($i = 0; $i < $k; $i++) {
            if (in_array($s[$i], $vowels)) {
                $currentVowels++;
            }
        }
        
        // 初始化最大元音數量
        $maxVowels = $currentVowels;
        
        // 滑動窗口，每次向右移動一個字符
        for ($i = $k; $i < strlen($s); $i++) {
            // 移除窗口左側字符，如果是元音則減少計數
            if (in_array($s[$i - $k], $vowels)) {
                $currentVowels--;
            }
            
            // 添加窗口右側新字符，如果是元音則增加計數
            if (in_array($s[$i], $vowels)) {
                $currentVowels++;
            }
            
            // 更新最大元音數量
            $maxVowels = max($maxVowels, $currentVowels);
            
            // 如果已經達到可能的最大值（即窗口大小k），則提前結束
            if ($maxVowels == $k) {
                break;
            }
        }
        
        return $maxVowels;
    }
}