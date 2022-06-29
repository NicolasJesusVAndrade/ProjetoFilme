<?php
namespace APP\Model;
class Movie{
    public string $title;
    public int $duration;
    public MovieGender $movieGender;
    public int $yearOfRelease;
    public string $movie;
    public Composer $composer;
    public Director $director;

    public function __construct(
        string $title,
        int $duration,
        MovieGender $movieGender,
        int $yearOfRelease,
        string $movie,
        Composer $composer,
        Director $director
    )
    {
        $this->title = $title;
        $this->duration = $duration;
        $this->movieGender = $movieGender;
        $this->yearOfRelease = $yearOfRelease;
        $this->movie = $movie;
        $this->composer = $composer;
        $this->director = $director;
    }
}