<?php
  include("../php_utils/db_utils.php");

  $db_utils = new DbUtils();
  $conn = $db_utils -> getConnection();
  $query =$conn -> prepare("SELECT * FROM publishers");
  $query -> execute();

  $result = $query -> setFetchMode(PDO::FETCH_ASSOC);
  foreach (new TableRows(new RecursiveArrayIterator($query -> fetchAll(), ' ', )) as $key => $value) {
    // code...
    echo $value;
  }

  $conn = null;
  echo '</table>'
 ?>
