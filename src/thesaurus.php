<?php

/**
 * Created by PhpStorm.
 * User: vitor
 * Date: 15/05/18
 * Time: 19:21
 */
class Thesaurus
{
    private $thesaurus;

    /** Sorry but I've changed the constructor to the right way
     * @param $thesaurus
     */
    public function __construct($thesaurus)
    {
        $this->thesaurus = $thesaurus;
    }

    public function getSynonyms($word)
    {
        if (array_key_exists($word, $this->thesaurus)) {
            return json_encode(['word' => $word, "synonyms" => $this->thesaurus[$word]]);
        }
        return json_encode(['word' => $word, "synonyms" => []]);
    }
}

$thesaurus = new Thesaurus([
    "buy" => ["purchase"],
    "big" => ["great", "large"],
    "small" => ["tiny", "little", "short"]
]);
echo $thesaurus->getSynonyms("big");
echo "\n";
echo $thesaurus->getSynonyms("agelast");
echo "\n";
echo $thesaurus->getSynonyms("buy");
echo "\n";
echo $thesaurus->getSynonyms("small");
echo "\n";
echo $thesaurus->getSynonyms("Muchen");
echo "\n";
