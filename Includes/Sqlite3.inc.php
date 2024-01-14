<?php
spl_autoload("Load_All");

function Load_All($file) {
    $folder = "Classes/";
    $extension = ".class.php";
    $full_file= $folder.$file.$extension;
    
    include_once $full_file;
}

?>