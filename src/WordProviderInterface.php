<?php


namespace App;


interface WordProviderInterface
{
    /**
     *  Returns an array of words
     *
     * @return array
     */
    public function getWordList(): array;
}