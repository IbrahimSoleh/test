<!-- Test A -->
 <?php
function sortMixedArray($arr) {
    $letters = [];
    $numbers = [];

    foreach ($arr as $item) {
        if (is_string($item)) {
            $letters[] = $item;
        } else {
            $numbers[] = $item;
        }
    }

    sort($letters);
    sort($numbers);

    return array_merge($letters, $numbers);
}

$input = [12,9,30,"A","M",99,82,"J","N","B"];
$result = sortMixedArray($input);
print_r($result);
?>
