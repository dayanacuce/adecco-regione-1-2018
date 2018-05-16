<?php

include '../php_utils/db_utils.php';

$db = new DbUtils();
$conn = $db -> getConnection();

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  // prepare sql and bind parameters
  $stmt = $conn->prepare("DELETE FROM MANGA WHERE id=:id;");
  $stmt->bindParam(':id', $id);

  if (empty($_GET["id"])) {
    $idErr = "ID is required";
    $formError = true;
  } else {
    $id = test_input($_GET["id"]);
    $stmt->execute();
  }
}

header("location: /index.php?page=manga/list.php");

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
