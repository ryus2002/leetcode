class Solution {

    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies) {
        $size = count($candies); // 計算陣列大小
        $maxCandies = $candies[0]; // 初始化最大值為第一個元素

        // 找出陣列中的最大值
        for ($i = 1; $i < $size; $i++) {
            if ($candies[$i] > $maxCandies) {
                $maxCandies = $candies[$i];
            }
        }

        $answer = []; // 初始化答案陣列

        // 判斷加上額外糖果後是否能達到或超過最多糖果的數量
        for ($i = 0; $i < $size; $i++) {
            if ($candies[$i] + $extraCandies >= $maxCandies) {
                $answer[$i] = true;
            } else {
                $answer[$i] = false;
            }
        }

        return $answer;
    }
}