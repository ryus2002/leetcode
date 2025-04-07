class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t) {
        // 如果長度不同，則不可能同構
        if (strlen($s) != strlen($t)) {
            return false;
        }
        
        // 建立兩個映射表
        $sToT = array(); // s 中字符到 t 中字符的映射
        $tToS = array(); // t 中字符到 s 中字符的映射
        
        // 遍歷字串
        for ($i = 0; $i < strlen($s); $i++) {
            $charS = $s[$i];
            $charT = $t[$i];
            
            // 檢查 s 到 t 的映射
            if (isset($sToT[$charS])) {
                // 如果已有映射，檢查是否一致
                if ($sToT[$charS] !== $charT) {
                    return false;
                }
            } else {
                // 建立新映射
                $sToT[$charS] = $charT;
            }
            
            // 檢查 t 到 s 的映射
            if (isset($tToS[$charT])) {
                // 如果已有映射，檢查是否一致
                if ($tToS[$charT] !== $charS) {
                    return false;
                }
            } else {
                // 建立新映射
                $tToS[$charT] = $charS;
            }
        }
        
        return true;
    }
}
// 測試案例
/*
var_dump(isIsomorphic("egg", "add")); // 應該輸出: true
var_dump(isIsomorphic("foo", "bar")); // 應該輸出: false
var_dump(isIsomorphic("paper", "title")); // 應該輸出: true
*/