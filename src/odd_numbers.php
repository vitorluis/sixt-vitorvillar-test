<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 15/05/18
 * Time: 19:31
 */
require_once("../vendor/autoload.php");

use PHPUnit\Framework\TestCase;

/**
 * get the number which occurs odd times in the source array
 *
 * @param $srcValues
 * @return int
 */
function getOddNumber($srcValues)
{
    $grouped_numbers = group_numbers($srcValues);
    foreach ($grouped_numbers as $number => $times_found) {
        if ($times_found % 2 == 1) {
            return $number;
        }
    }
    /** If fails into find an Odd number, return 0 */
    return 0;
}

function group_numbers($values)
{
    $grouped_numbers = [];
    foreach ($values as $value) {
        if (!isset($grouped_numbers[$value])) {
            $grouped_numbers[$value] = 1;
        } else {
            $grouped_numbers[$value]++;
        }
    }
    return $grouped_numbers;
}

class OddNumberTest extends TestCase
{
    public function testOddNumber()
    {
        $result = getOddNumber([2, 5, 9, 1, 5, 1, 8, 2, 8]);
        $this->assertEquals(9, $result);
        $result = getOddNumber([2, 3, 4, 3, 1, 4, 5, 1, 4, 2, 5]);
        $this->assertEquals(4, $result);
    }
}