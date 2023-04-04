<?php

namespace Patterns\Proxy;

class CachingLyrics implements Song
{
    /**
     * @var Lyrics
     */
    private Lyrics $lyrics;

    /**
     * @var string[]
     */
    private array $cache;

    public function __construct(Lyrics $lyrics)
    {
        $this->lyrics = $lyrics;
    }

    public function getSongLyrics(string $songName): string
    {
        if (!isset($this->cache[$songName])) {
            echo $songName . " <strong>Не існує в кеші</strong><br />";
            $result = $this->lyrics->getSongLyrics($songName);
            $this->cache[$songName] = $result;
        } else {
            echo $songName . " <strong>існує в кеші</strong><br />";
        }
        return $this->cache[$songName];
    }

}