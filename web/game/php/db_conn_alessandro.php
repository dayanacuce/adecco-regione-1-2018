<?php

include '../php_utils/db_utils.php'

 // new DbUtils object
$db = new DbUtils();

 // setting up the db connection
$conn = $db -> getConnection();

  function listTableRow(){

    //connection recall
    global $conn;

    //SQL query
    $stmt = $conn->prepare(
    "SELECT game.id, game.name, developer, publishers.name AS publisher, game_genre.name AS genre, multiplayer, singleplayer, launch_date
     FROM game
     INNER JOIN game_genre ON game.genre_id = game_genre.id
     INNER JOIN publishers ON game.publisher_id = publishers.id"
    );

    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
  }

  function detailPageField($id){

    //connection recall
    global $conn;

    //SQL query
    $stmt = $conn->prepare(
    "SELECT game.name, developer, publishers.name AS publisher, game_genre.name AS genre, multiplayer, singleplayer, launch_date
     FROM game
     INNER JOIN game_genre ON game.genre_id = game_genre.id
     INNER JOIN publishers ON game.publisher_id = publishers.id
     WHERE game.id = $id"
    );

    $stmt->execute();

    // set fetch mode to associative
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();

    // returning query as array
    return $result;
  }

?>
