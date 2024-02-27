<?php

    class DisneyCollectionDAO {
       
       // To retrieve the all $movies as an indexed array of Disney objects.
       // Return as an array of Disney objects
        public function getMovies() {
            
            $sql = "select * from disney"; 
           
            # your code goes here
           

        
        }

        # retrieve data from the database which are from $movie
        # and return as an indexed array of Soundtrack objects
        # else return null
        # $movie is a string
        public function getSoundTrack($movie) {

            $sql = "select * from soundtrack where movie = :movie"; 

            # your code goes here
            




        }



}   



?>