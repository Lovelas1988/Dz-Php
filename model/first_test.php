<?php

    require_once("utils.php");

    /**
     * Function receives an array with integer numbers,
     * should return its sum. It is not alowed to use built-in php functions.
     *
     * Функция получает на вход массив чисел, должна вернуть сумму этих чисел.
     * Не использовать встроенные функции суммирования php.
     *
     * @param array $arr
     * @return integer
     */
    function my_sum($arr) {
        $sum = array_sum($arr);
    foreach($arr as $child) {
        $sum += is_array($child) ? array_multisum($child) : 0;
    }
    return $sum;
    }


    /**
     * Function receives a long string with many words.
     * It should return the same string, but words,
     * larger then 6 symbols, should be changed, symbols
     * after the sixth one should be replaced by symbol *
     *
     * Функция получает на вход длинную строку с множеством слов.
     * Она должна вернуть ту же строку, но в словах, которые длиннее 6 символов,
     * функция должна вместо всех символов после шестого поставить одну звездочку.
     * Пример: Из слова 'verwijdering' должно получиться 'verwij*'
     *
     * @param string $shortMe
     * @return string
     */
    function shortener($shortMe) {
        $shortMe = str_replace( ["\n","\r","\x09"] , "\x20" , $shortMe );
            while(strpos($shortMe , "\x20\x20") !== false ) {$shortMe = str_replace( "\x20\x20" , "\x20" , $s ); }
            $shortMe = trim($shortMe);
            $a=explode("\x20",$shortMe);
            foreach($a as &$sr) {
                if ( strlen($sr) > 6 ) {
                    $sr = substr($sr,0,6)."*";
                }
            }
            return trim(implode("\x20",$a));
        }

    /**
     * Function receives an array of strings.
     * Please return number of strings, which
     * length is at least 2 symbols and first character
     * is equal to the last character
     *
     * Функция получает на вход массив строк. Вернуть надо количество строк,
     * которые не короче двух символов и у которых первый и последний
     * символ совпадают.
     *
     * @param array $arr
     * @return number
     */
    function compare_ends($arr) {
        { return count(preg_grep('#^(.).*\1$#', $arr)); }
    }



    /**
     * Function receives a string, should return this string reversed.
     *
     * Функция получает на вход строку, должна вернуть ее перевернутой.
     *
     * @param string $str
     * @return string
     */
    function reverse_string($str) {
        for($i=strlen($str)-1, $j=0; $j<$i; $i--, $j++) 
        {
            $temp = $str[$i];
            $str[$i] = $str[$j];
            $str[$j] = $temp;
        }
        return $str;
    }


test_shortener();

test_compare_ends();

test_my_sum();

test_reverse_string();










