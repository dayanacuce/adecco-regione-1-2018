<?php

  include '../php_utils/db_utils.php';

   // new DbUtils istance
  $db = new DbUtils();

   // setting up the db connection
  $conn = $db -> getConnection();


  function listTableRow(){

    //using global connection variable
    global $conn;

    //SQL query
    $stmt = $conn->prepare(
    "SELECT game.id, game.name, developer, publishers.name AS publisher, game_genre.name AS genre, multiplayer, singleplayer, launch_date
     FROM game
     INNER JOIN game_genre ON game.genre_id = game_genre.id
     INNER JOIN publishers ON game.publisher_id = publishers.id"
    );

    $stmt->execute();

      //detail page and id passthru
      $commands = '<td><a href="detail_alessandro(external_php).php?id=:id">dettaglio</a></td>';

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll()), '', $commands, 'id') as $k=>$v) {
        echo $v;
    }
  }

  function detailPageField($id){

    //using global connection variable
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
    $result = $stmt->fetch();

    // returning query as array
    return $result;
  }

?>
