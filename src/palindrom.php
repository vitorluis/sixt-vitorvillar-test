<?php
/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 15/05/18
 * Time: 19:06
 */

class Palindrome
{
    public static function isPalindrome($word)
    {
        $word = strtolower($word);
        return $word == strrev($word);
    }
}

if (Palindrome::isPalindrome('Deleveled')) {
    echo "It is Palindrom word\n";
} else {
    echo "Is NOT a Palindrom word\n";
}
