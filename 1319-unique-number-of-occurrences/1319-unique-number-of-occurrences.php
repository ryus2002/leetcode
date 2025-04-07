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
        // for ($i = 0; $i <= $size - 1; $i++) {
        //     // $value = $arr[$i];
        //     $temp_array[$arr[$i]]['count']++;
        // }

        // 計算頻率
        foreach ($arr as $num) {
            if (!isset($temp_array[$num])) {
                $temp_array[$num] = 0;
            }
            $temp_array[$num]++;
        }        

        $count = [];
        foreach ($temp_array as $index => $value) {
            if ( isset( $count[$value] ) ) {
                return false;
            }
            else {
                $count[$value] = true;
            }

        }


        
        return true;
    }
}