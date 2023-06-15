<?php
$userData = [
    'name' => 'Ahmed',
    'job' => 'backend',
    'language' => 'php',
    'framework' => 'laravel',
];
echo "<ul>";
foreach ($userData as $key => $value) {
    echo "<li>$key :: $value </li>";
}
echo "</ul>";