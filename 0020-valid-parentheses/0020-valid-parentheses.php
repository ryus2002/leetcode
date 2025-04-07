class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s) {
        // 建立一個空堆疊
        $stack = [];
        
        // 定義括號對應關係
        $pairs = [
            ')' => '(',
            '}' => '{',
            ']' => '['
        ];
        
        // 逐個字元檢查
        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];
            
            // 如果是右括號
            if (isset($pairs[$char])) {
                // 檢查堆疊是否為空或頂部元素是否匹配
                if (empty($stack) || array_pop($stack) !== $pairs[$char]) {
                    return false;
                }
            } else {
                // 如果是左括號，放入堆疊
                $stack[] = $char;
            }
        }
        
        // 最後檢查堆疊是否為空
        return empty($stack);
    }
}