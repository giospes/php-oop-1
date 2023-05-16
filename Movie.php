<?php

    class Movie{
        private string $title;
        private string $director;
        private array $genre;
        private int $releaseYear;

        // Constructor
        public function __construct($title, $director, $genre, $releaseYear) {
            $this->title = $title;
            $this->director = $director;
            $this->genre = $genre;
            $this->releaseYear = $releaseYear;
        }

        public function getTitle() {
            return $this->title;
        }

        public function setTitle($title) {
            $this->title = $title;
        }

        public function getDirector() {
            return $this->director;
        }

        public function setDirector($director) {
            $this->director = $director;
        }

        public function getGenre() {
            return $this->genre;
        }

        public function setGenre($genre) {
            $this->genre = $genre;
        }

        public function getReleaseYear() {
            return $this->releaseYear;
        }

        public function setReleaseYear($releaseYear) {
            $this->releaseYear = $releaseYear;
        }
    }