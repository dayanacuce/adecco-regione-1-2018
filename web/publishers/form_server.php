<?php
  // Define variables and set to empty
  $nameError = $officeError = $publishedError = $messageErr = $programmersError = $dateError = "";
  $name = $office = $published = $programmers = $message = $date = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameError = "First name required";
    } else {
      $name = test_input($_POST["name"]);
      // Check if name contains only letters an whitespaces
      if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $nameError = "Only letters and white whitespaces allowed.";
      }
    }

    if (empty($_POST["office"])) {
      $officeError = "Office required";
    } else {
      $office = test_input($_POST["office"]);
      // Check if name contains only letters an whitespaces
      if (!preg_match("/^[a-zA-Z ]*$/", $office)) {
        $officeError = "Only letters and white whitespaces allowed.";
      }
    }

    if ($_POST["programmers"] == "nessuno") {
      $programmersError = "Number programmers required";
    } else {
      $programmers = test_input($_POST["programmers"]);
    }

    if (empty($_POST["foundation_date"])) {
      $dateError = "Date is required";
    } else {
      $date = test_input($_POST["foundation_date"]);
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
 ?>
