<?php


function containLetters($str1, $str2)
{
    $count = strlen($str2);
    $string1 = strtolower($str1);
    $string2 = strtolower($str2);
    for ($i = 0; $i < $count; $i++) {
        if ($string1[$i] == $string2[$i]) {
            return true;
        }
        return false;
    }
    // return false;
}
var_dump(containLetters('brs', 'BERKATsoft'));
