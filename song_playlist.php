<?php
class Song
{
    public $songTitle;
    public $songId;
    public $songDuration;
    public function __construct($songTitle, $songId, $songDuration)
    {
        $this->songTitle = $songTitle;
        $this->songId = $songId;
        $this->songDuration = $songDuration;
    }
}
$numbSong = new Song("Numb Song", 1, "2.30");
$babySong = new Song("Baby Song", 2, "3.30");
$rockSong = new Song("Rock Song", 3, "4.00");


class PlayList
{
    private $name;
    public $songs;
    public function __construct($name)
    {
        $this->name = $name;
        $this->songs = array();
    }
    public function getName()
    {
        return $this->name;
    }
    public function addSong($song)
    {
        $this->songs[] = $song;
    }
    public function showPlaylist()
    {
        echo $this->name . PHP_EOL;

        foreach ($this->songs as $item) {
            echo "----------------" . PHP_EOL;
            foreach ($item as $key => $value) {
                echo "{$key}:{$value}\n";
            }
        }
    }
}
$rockPlaylist = new PlayList("Rock List");
$rockPlaylist->addSong($numbSong);
$rockPlaylist->addSong($babySong);
$rockPlaylist->addSong($rockSong);
$rockPlaylist->showPlaylist();
