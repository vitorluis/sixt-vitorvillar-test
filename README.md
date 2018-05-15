# Vitor Villar Sixt Test

## Run Composer
You need to run the composer to install the PHPUnit.

`composer install`

## Run the tests

To run the tests you need to run the following commands in the project root:

`phpunit --bootstrap vendor/autoload.php src/invert_binary_tree.php`

And

`phpunit --bootstrap vendor/autoload.php src/odd_numbers.php `


# Final notes

I've committed here on Github, cause you can see the last time I sent the code. Just reminding the test started at 19:00 CEST.

Regarding the exercise number 1, I've used the `strrev()` function, because its the faster and easy method. But an alternative is:

```
...
$word = strtolower($word);
$wordSize = strlen($word) - 1;
$lastLetter = $wordSize;
for ($currentLetter = 0; $currentLetter <= $wordSize; $currentLetter++) {
    if($word[$currentLetter] != $word[$lastLetter]) {
        return false;
    }
    $lastLetter--;
}
return true;
...
```

Thanks for the opportunity guys. :)
