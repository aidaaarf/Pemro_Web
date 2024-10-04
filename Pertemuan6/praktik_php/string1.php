<?php
$loremIpsum = "Lorem ipsum dolor sit amet consectur Morbi posuere quis elit a consequat. Maecenas maximus,
                urna ipsum finibus elit, quis venenatis metus Lorem vitae ante. Etiam ut purus sem. 
                Ut efficitur lectus in ipsum tempor vehicula. Aliquam dapibus lacus sed ligula convallis
                a congue quam maximus. Donec pulvinar est rutrum lacus feugiat.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: " . strlen($loremIpsum) . "<br>";
echo "Panjang Kata: " . str_word_count($loremIpsum) . "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p";
?>