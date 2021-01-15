<?php

/*
    Open File
*/

// Param 1: File Path
// Param 2: Mode: 
//      r -> read
//      w -> write
//      rw -> read write
//      a -> append

$file = fopen("file.txt", "r");

/*
    Read File
*/
// Param 1: File Variable from fopen
// Param 2: Length of File

$file_read = fread($file, 100);

// Alternatively, you can also pass actual filesize for full file reading
$file_alt = fread($file, filesize("file.txt"));


/*
    Close File
*/
// Param 1: File variable from fopen

fclose($file);



/*
    File Write
*/

// Param 1: File variable from fopen (with "W" flag)
// Param 2: String of text to write

fwrite($file, $string);

// Example
$my_file = fopen("file.txt", "w");
$text = "Hello there!";
fwrite($my_file, $text);
fclose($my_file);
