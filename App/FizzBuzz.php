<?php

namespace App;

class FizzBuzz 
{
    public function getResult(int $value) :string
    {
        $multiple3 = $value%3 === 0;
        $multiple5 = $value%5 === 0;
        
        if ($multiple3 && $multiple5) {
            return 'FizzBuzz';
        } else if ($multiple3) {
            return 'Fizz';
        } else if ($multiple5) {
            return 'Buzz';
        } else {
            return strval($value);
        }
    }
}