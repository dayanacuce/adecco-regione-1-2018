<?php

  include 'php_utils/db_utils.php';

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
      $commands = '<td><a href="/?page=game/game_detail.php&id=:id">dettaglio</a></td>';

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
    "SELECT game.name, developer, publishers.name AS publisher, game_genre.name AS genre, multiplayer, singleplayer, launch_date, image
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

  function formValidation(){

    function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Name is required
      if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      }
      else {
        $name = test_input($_POST["name"]);
      }

    //Developer is required
      if (empty($_POST["developer"])) {
        $devErr = "Developer is required";
      }
      else {
        $developer = test_input($_POST["developer"]);
      }

    //Publisher is required
      if (empty($_POST["publisher"])) {
        $pubErr = "Publisher is required";
      }
      else {
        $publisher = test_input($_POST["publisher"]);
      }

    //Genre is required
      if (empty($_POST["genre"])) {
        $genErr = "Genre is required";
      }
      else {
        $genre = test_input($_POST["genre"]);
      }

    //Date is required
      if (empty($_POST["date"])) {
        $dateErr = "Date is required";
      }
      else {
        $date = test_input($_POST["date"]);
      }

    }
  }
?>
