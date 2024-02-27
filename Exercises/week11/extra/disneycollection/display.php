<?php
   
    spl_autoload_register(
        function ($class){
            require_once  "model/$class.php";
        }
    );

?>

<!DOCTYPE html>
<html>
    <body>
    <form method="get">
        <?php
            $dao = new DisneyCollectionDAO();
            $movies_obj = $dao->getMovies();

            foreach ($movies_obj as $movie_obj){
                $movie = $movie_obj->getMovie();
                echo "<input type='radio' name='movie' value='$movie'>$movie
                      <br>"; 
            }
        ?>
        <input type="submit" name="submitbtn" value="Find">
        <br><br>
        </form>
    </body>
</html>


<?php
    # display all items in the dao

    if (isset($_GET["submitbtn"])){
        $search_movie = $_GET["movie"];

        $soundtracks = $dao->getSoundTrack($search_movie);

        if ($soundtracks == null){
            echo "<br>No soundtracks available.";
        }
        else{
            echo "<br><table border='1'>
            <tr>
                <th> Movie </th>
                <th> Playlist </th>
                <th> Year </th>
            </tr>";

            foreach ($soundtracks as $soundtrack){
            echo "<tr>
                    <td> {$soundtrack->getMovie()} </td>
                    <td> {$soundtrack->getPlaylist()} </td>
                    <td> {$soundtrack->getYear()} </td>
                </tr>";
        }
        echo "</table>";
        }
    

    }
    
   



?>