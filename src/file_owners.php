<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 15/05/18
 * Time: 19:14
 */

class FileOwners
{
    public static function groupByOwners($files)
    {
        $grouped_files = [];
        foreach ($files as $filename => $owner) {
            if (!isset($grouped_files[$owner])) {
                $grouped_files[$owner] = [$filename];
            } else {
                $grouped_files[$owner][] = $filename;
            }
        }
        return $grouped_files;
    }
}

$files = [
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy",
    "Test.php" => "Carl",
    "Test2.php" => "Carl",
    "Test.py" => "Stan",
    "AnotherInput.txt" => "Randy",
];
var_dump(FileOwners::groupByOwners($files));