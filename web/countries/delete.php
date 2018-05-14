<?php

include '../php_utils/db_utils.php';

$db_utils = new DbUtils();
$conn = $db_utils->getConnection();

$id = '';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $formError = false;

  if (empty($_GET["alpha2Code"])) {
    $alpha2CodeErr = "Country is required";
    $formError = true;
  } else {
    $alpha2Code = test_input($_GET["alpha2code"]);
  }

  if(!$formError){
    // prepare sql and bind parameters
    $stmt = $conn->prepare("DELETE FROM countries WHERE alpha2code=:alpha2Code;");
    $stmt->bindParam(':alpha2Code', $alpha2Code);
    $stmt->execute();
  }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
