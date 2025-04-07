class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t) {
        $sLen = strlen($s);
        $tLen = strlen($t);
        
        // 如果s為空字串，則一定是t的子序列
        if ($sLen == 0) {
            return true;
        }
        
        // 如果s的長度大於t，則s不可能是t的子序列
        if ($sLen > $tLen) {
            return false;
        }
        
        $sIndex = 0; // 指向s的指針
        
        // 遍歷字串t
        for ($tIndex = 0; $tIndex < $tLen; $tIndex++) {
            // 如果當前字符匹配，s的指針向前移動
            if ($s[$sIndex] == $t[$tIndex]) {
                $sIndex++;
                
                // 如果s已經全部匹配完，返回true
                if ($sIndex == $sLen) {
                    return true;
                }
            }
        }
        
        // 如果遍歷完t後，s還沒有匹配完，則返回false
        return false;
    }
}
// 測試案例
/*
var_dump(isSubsequence("abc", "ahbgdc")); // 應該輸出 true
var_dump(isSubsequence("axc", "ahbgdc")); // 應該輸出 false
*/