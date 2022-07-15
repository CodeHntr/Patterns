<?php

namespace Patterns\Proxy;

class Lyrics implements Song
{
    public function getSongLyrics(string $songName): string
    {
        $songName = __DIR__ . "/Songs/" . $songName . ".txt";
        return file_exists($songName) ? file_get_contents($songName) : "";
    }

}