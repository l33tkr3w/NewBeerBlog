<?php
try
{
    $pdo = new PDO("mysql:host=localhost;dbname=beer_db;",'root','');
    session_start();
}
catch (PDOException $e)
{
    echo "Could not connect to database <br>".$e->getMessage();
    
}

?>


