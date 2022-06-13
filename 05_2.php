<?php
$array_strings = [
    "It's worth noting this function is surprisingly fast. I first ran it against a ~500KB string on our web server. It found 6 occurrences of the needle I was looking for in 0.0000 seconds. Yes, it ran faster than microtime() could measure.",
    "There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour",
    "Or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text."
    ];
$one_string = $array_strings[0];

function search_to_strings($string){
    $count = 0;
    $count += substr_count($string, 'in');
    return $count;
}

echo search_to_strings($one_string);