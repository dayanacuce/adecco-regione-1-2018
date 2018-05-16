<?php

include '../php_utils/db_utils.php';

$db_utils = new DbUtils();
$conn = $db_utils->getConnection();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // prepare sql and bind parameters
  $stmt = $conn->prepare("DELETE FROM countries WHERE id=:id;");
  $stmt->bindParam(':id', $id);

  if (empty($_GET["id"])) {
    $idErr = "ID is required";
    $formError = true;
  } else {
    $id= test_input($_GET["id"]);
    $stmt-> execute();
  }
}

header("location: /index.php?page=progetto_cooperazione/list_cooperazione.php");


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
