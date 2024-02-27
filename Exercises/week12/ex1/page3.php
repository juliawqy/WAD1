<!DOCTYPE html>
<html>
    <body>
        <form method="post" action="summary.php">
            Hobby: <input type="text" name="hobby"/>
            <?php
                # Echo hidden input fields for name and age
                echo "<input type='hidden' name='name' value='{$_POST['name']}'>";
                echo "<input type='hidden' name='age' value='{$_POST['age']}'>";
            ?>
            <input type="submit" value="Next"/>
        </form>
    </body>
</html>