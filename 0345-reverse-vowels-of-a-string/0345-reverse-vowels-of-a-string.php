class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {

        if (strlen($s) == 0) {
            return "";
        }

        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $chars = str_split($s);
        $left = 0;
        $right = strlen($s) - 1;

        while ($left < $right) {
            // 找到左邊的元音字母
            while ($left < $right && !in_array($chars[$left], $vowels)) {
                $left++;
            }
            
            // 找到右邊的元音字母
            while ($left < $right && !in_array($chars[$right], $vowels)) {
                $right--;
            }
            
            // 交換這兩個元音字母
            if ($left < $right) {
                // 使用臨時變數交換
                $temp = $chars[$left];
                $chars[$left] = $chars[$right];
                $chars[$right] = $temp;
                
                $left++;
                $right--;
            }
        }

        return implode('', $chars);
    }
}