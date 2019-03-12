#!/usr/bin/php
<?php

function title($matches)
{
    $res = 'title="'. strtoupper($matches[1]) . '"';
    return $res;
}

function main_text($matches)
{
    $res = '>'. strtoupper($matches[1]) . '<';
    return $res;
}

if ($argc > 1)
{
    $fd = fopen($argv[1], "r");
    $result = array();
    if ($fd != false)
    {
        while ($line = fgets($fd))
        $result[] = preg_replace_callback("/<a.*a>/", function($matches) {
    $res = preg_replace_callback('/title="(.*)"/', "title", $matches[0]);
    $res = preg_replace_callback('/>(.*?)</', "main_text", $res);
    return $res;}, $line);
    foreach ($result as $b)
        echo $b;
    }
}
fclose($fd);

?>