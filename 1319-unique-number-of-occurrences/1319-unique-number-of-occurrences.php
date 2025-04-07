class Solution {

    /**
     * @param Integer[] $arr
     * @return Boolean
     */
    function uniqueOccurrences($arr) {
        if (count($arr) <= 1) {
            return false;
        }

        $size = count($arr);
        $temp_array = [];
        for ($i = 0; $i <= $size - 1; $i++) {
            $value = $arr[$i];
            $temp_array[$value]['count']++;
        }

        $count = [];
        foreach ($temp_array as $index => $value) {
            if ( isset( $count[$temp_array[$index]['count']] ) ) {
                return false;
            }
            else {
                $count[$temp_array[$index]['count']] ++;
            }

        }
        return true;
    }
}