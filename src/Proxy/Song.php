<?php

namespace Patterns\Proxy;

interface Song
{
    public function getSongLyrics(string $songName): string;
}