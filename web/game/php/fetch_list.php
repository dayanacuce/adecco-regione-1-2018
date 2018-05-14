<?php
  include("../php_utils/db_utils.php");

  $db_utils = new DbUtils();
  $conn = $db_utils -> getConnection();
  $query =$conn -> prepare("SELECT * FROM publishers");
  $query -> execute();

  $commands = '<td><a href="detail.php?id=:id">dettaglio</a></td>';

  $result = $query -> setFetchMode(PDO::FETCH_ASSOC);
  foreach (new TableRows(new RecursiveArrayIterator($query -> fetchAll()), ' ', $commands) as $key => $value) {
    // code...
    echo $value;
  }

  $conn = null;
  echo '</table>'
 ?>
