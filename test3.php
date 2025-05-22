<!-- Test C -->
<?php
function countAndSortLetters($input) {
    $result = [];

    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];
        if (ctype_alpha($char)) {
            if (!isset($result[$char])) {
                $result[$char] = 0;
            }
            $result[$char]++;
        }
    }

    ksort($result);
    return $result;
}


print_r(countAndSortLetters("Silakan buat 1 repository terbuka di platform apapun Github/Gitlab/Bitbucket atau
apapun platformnya, silakan lampirkan repository berisi jawaban via email"));
?>

