<?php
$fileContents = file_get_contents('simple.txt');
$charCount = strlen($fileContents);
$words = preg_split('/\s+/', $fileContents);
$pWords = array_filter($words, function($word) {
    return strpos(strtolower($word), 'p') === 0;
});
$resultFile = fopen('result.txt', 'w');
if ($resultFile) {
    foreach ($pWords as $word) {
        fwrite($resultFile, $word . "\n");
    }
    fclose($resultFile);
    echo "Matching words have been written to result.txt.";
} else {
    echo "Error opening or writing to the result.txt file.";
}

echo "Number of characters in simple.txt: $charCount";
?>
