<?php
  include 'php_utils/db_utils.php';

  $db_utils = new DbUtils();
  $conn = $db_utils->getConnection();

  // define variables and set to empty values
  $nameCodeErr = $officeErr = $programmersErr = $foundation_dateErr = "";

  $name = $office = $programmers = $foundation_date = '';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO publishers(name, office, programmers, foundation_date) VALUES ");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':office', $office);
    $stmt->bindParam(':programmers', $programmers);
    $stmt->bindParam(':foundation_date', $foundation_date);

    include('form_server.php');

    if(!$formError){
      $stmt->execute();
    }
  }
  
  include 'patrick_form.php';
 ?>
