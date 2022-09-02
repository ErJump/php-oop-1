<?php
    class Movie{
        private $title;
        private $year;
        private $director;

        /**
         * Movie constructor.
         * @param $title
         * @param $year
         * @param $director
         */
        function __construct($_title, $_year, $_director){
            $this->title = $_title;
            $this->year = $_year;
            $this->director = $_director;
        }

        public function getTitle(){
            return $this->title;
        }
        public function getYear(){
            return $this->year;
        }
        public function getDirector(){
            return $this->director;
        }
    }