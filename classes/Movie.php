<?php
class Movie
{
    public string $title;
    public string $type;
    public string $language;
    public int $rate;
    public int $year;

    function __construct(
        $_title,
        $_type,
        $_language,
        $_rate,
        $_year,
    ) {
        $this->title = $_title;
        $this->type = $_type;
        $this->language = $_language;
        $this->rate = $_rate;
        $this->year = $_year;
    }

    function getInfoMovie(): string
    {
        $info = "The title of this movie is " . $this->title . ", it is a " . $this->type . " movie and was recorded in the year " . $this->year . ".";

        return $info;
    }
}
