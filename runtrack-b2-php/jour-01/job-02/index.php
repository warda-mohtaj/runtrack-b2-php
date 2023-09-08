<?php
function my_str_reverse(string $string) : string {

    $reverseWords = '';

    $i = 0;

    while (isset($string[$i])) {
        $reverseWords = $string[$i] . $reverseWords;
        $i++;
    }

    echo $reverseWords;
    return $reverseWords;

}

my_str_reverse('Hello');