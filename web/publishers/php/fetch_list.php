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
    "SELECT * FROM publishers"
    );

    $stmt->execute();

      //detail page and id passthru
      $commands = '<td><a href="/?page=publishers/detail.php&id=:ID">dettaglio</a></td>';

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll()), '', $commands, 'ID') as $k=>$v) {
        echo $v;
    }
  }

  function detailPageField($id){

    //using global connection variable
    global $conn;

    //SQL query
    $stmt = $conn->prepare(
    "SELECT * FROM publishers WHERE ID = $id;"
    );

    $stmt->execute();

    // set fetch mode to associative
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetch();

    // returning query as array
    return $result;
  }

?>
