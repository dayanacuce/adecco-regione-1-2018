<?php

include '../php_utils/db_utils.php';

$db_utils = new DbUtils();
$conn = $db_utils->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // prepare sql and bind parameters
  $stmt = $conn->prepare("DELETE FROM countries WHERE alpha2code=:alpha2Code;");
  $stmt->bindParam(':alpha2Code', $alpha2Code);

  if (empty($_GET["alpha2code"])) {
    $alpha2CodeErr = "ID is required";
    $formError = true;
  } else {
    $alpha2Code = test_input($_GET["alpha2code"]);
    $stmt->execute();
  }
}

header("location: /index.php?page=countries/list.php");


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
