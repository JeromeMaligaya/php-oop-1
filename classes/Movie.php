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
}
