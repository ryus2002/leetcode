class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {

        if (strlen($s) == 0) {
            return "";
        }

        $str_array = ['a','e','i','o','u','A','E','I','O','U'];
        $temp_array = [];

       $key = 0;
        for ($i = 0; $i < strlen($s); $i++) {
            if ( in_array($s[$i], $str_array) ) {
                $temp_array[$key]['key'] = $i;
                $temp_array[$key]['value'] = $s[$i];
                $key++;
            }
        }

        $keyindex = count($temp_array);
        foreach ($temp_array as $index => $value) {
            $s[$temp_array[$index]['key']] = $temp_array[$keyindex-1]['value'];
            $keyindex--;
        }
        return $s;
    }
}