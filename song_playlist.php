<?php
class Song
{
    public $songTitle;
    public $songId;
}
$numb = new Song;
$numb->songTitle = "Numb Song";
$numb->songId = 1;
$babySong = new Song;
$babySong->songId = 2;
$babySong->songTitle = "Baby Song";
//print_r($numb);

class PlayList
{
    public $name;
    public $songs = array();

    public function addSong($song)
    {
        $this->songs[] = $song;
    }
    public function showPlaylist()
    {
        echo $this->name . PHP_EOL;
        foreach ($this->songs as $item) {
            foreach ($item as $key => $value) {
                echo "{$key}:{$value}\n";
            }
        }
    }
}
$rockPlaylist = new PlayList;
$rockPlaylist->name = "Rock List";
$rockPlaylist->addSong($numb);
$rockPlaylist->addSong($babySong);
$rockPlaylist->showPlaylist();
//print_r($rockPlaylist);
