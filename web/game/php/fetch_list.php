<?php
  include("web\php_utils\db_utils.php")

  $db_utils = new DbUtils();
  $conn = $db_utils -> getConnection();
  $conn -> prepare("SELECT * FROM publishers");
  $conn -> execute();

  $result = $conn -> setFetchMode(PDO::FETCH_ASSOC);
  foreach (new TableRows(new RecursiveIteratorIterator($conn -> fetchAll())) as $key => $value) {
    // code...
    echo $value
  }

  $conn -> null;
  echo '</table>'
 ?>
