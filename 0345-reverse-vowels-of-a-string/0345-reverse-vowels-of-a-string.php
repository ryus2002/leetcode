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
        $temp_array = [];

        $key = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            if (in_array($s[$i], $vowels)) {
                $temp_array[$key]['key'] = $i;
                $temp_array[$key]['value'] = $s[$i];
                $key++;
            }
        }

        $result = str_split($s);
        $total = count($temp_array);
        
        for ($i = 0; $i < $total; $i++) {
            $result[$temp_array[$i]['key']] = $temp_array[$total - 1 - $i]['value'];
        }
        
        return implode('', $result);
    }
}