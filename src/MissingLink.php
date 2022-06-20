<?php

namespace App;

class MissingLink
{

    public function find(array $givenSquence) : mixed
    {
       $correctSequence = range(current($givenSquence), end($givenSquence));
       $missingLink = current(array_diff($correctSequence, $givenSquence));
  
        return $missingLink;

     }
}