<?php

/*5. Parašykite programą, kuri Jūsų susigalvotus duomenis paimtų iš failo ir atspausdintų terminale. (1.5 balas)*/

function fileContent ($textFile)
{
    $fileList = file_get_contents($textFile);
    return  json_decode($fileList, true);
}
print_r(fileContent(' .task.json'));