<?php

function myFileRead($file)
{
    if (file_exists($file)) {
        $handler = fopen($file, 'r');
        $size = filesize($file);
        $data = fread($handler, $size);
    }else {
        throw new Exception("This file does not exits");
    }
}
