<!-- Test B -->
<?php
function pattern_count($text, $pattern) {
    $textLength = strlen($text);
    $patternLength = strlen($pattern);
    $count = 0;

    if ($patternLength == 0) return 0;

    for ($i = 0; $i <= $textLength - $patternLength; $i++) {
        $match = true;
        for ($j = 0; $j < $patternLength; $j++) {
            if ($text[$i + $j] !== $pattern[$j]) {
                $match = false;
                break;
            }
        }
        if ($match) $count++;
    }

    return $count;
}


echo pattern_count("ababab", "aaaaaaaa"); 
echo pattern_count("aaaaaa", "aaa"); 
echo pattern_count("kucing", "iuuiu"); 
echo pattern_count("terima kasih", "eeeaaaiiii"); 
?>
