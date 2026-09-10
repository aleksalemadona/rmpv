<?php

// $dir = getcwd();

// echo $dir . "<br>";

echo "__DIR__" . __DIR__. "<br><br>";

echo "__DIR__" . __FILE__. "<br><br>";

define('DS', DIRECTORY_SEPARATOR);

echo "DIRECTORY_SEPARATOR: " . DS . "<br><br>";

//$file = "img";
//$file = "./img";
// $file = $dir . "/img";

if (file_exists($file)) {
	echo "$file exists";
}else{
	echo "File: $file not found <br>";
}


$dir = __DIR__ . '/new_dir';

echo "PHP file directory: " . __DIR__ . "<br>";
echo "Directory to create: " . $dir . "<br>";
echo "Parent writable: " . (is_writable(__DIR__) ? 'YES' : 'NO') . "<br>";

if (is_dir($dir)) {
    echo "Directory already exists";
} else {
    $result = mkdir($dir, 0777, true);

    if ($result) {
        echo "SUCCESS! Directory created.";
    } else {
        echo "FAILED!<br>";
        var_dump(error_get_last());
    }
}