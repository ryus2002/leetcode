class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        if (strlen(trim($s)) == 0) {
            return "";
        }

        $s = trim($s);

        $temp_array = explode(' ', $s);
        $str = "";
        
        for ($i = count($temp_array); $i >= 0; $i--) {
            if ($temp_array[$i] != "") {
                if ($str == "") {
                    $str .= $temp_array[$i];
                }
                else {
                    $str .= " ".$temp_array[$i];
                }
            }
        }
        return $str;
    }
}