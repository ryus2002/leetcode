class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function moveZeroes(&$nums) {
        if (count($nums) == 0) {
            return;
        }

        $zero_time = 0;
        foreach ($nums as $index => $value) {
            if ($value == 0) {
                $zero_time ++;
                unset($nums[$index]);
            }
        }

        if ($zero_time > 0) {
            for ($i = 0; $i < $zero_time; $i++) {
                $nums[] = 0;
            }
        }
    }
}