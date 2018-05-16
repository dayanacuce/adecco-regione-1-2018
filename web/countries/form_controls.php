<?php

      $formError = false;

      if (empty($_POST["alpha2Code"])) {
        $alpha2CodeErr = "Country is required";
        $formError = true;
      } else {
        $alpha2Code = test_input($_POST["alpha2Code"]);
      }

      if (empty($_POST["name"])) {
        $nameErr = "Project type is required";
        $formError = true;
      } else {
        $name = test_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name )) {
          $nameErr  = "Only letters and white space allowed";
          $formError = true;
        }
      }

      if (empty($_POST["capital"])) {
        $capitalErr = "City name is required";
        $formError = true;
      } else {
        $capital = test_input($_POST["capital"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $capital )) {
          $capitalErr  = "Only letters and white space allowed";
          $formError = true;
        }
      }

      if (empty($_POST["population"])) {
        $populationErr = "City name is required";
        $formError = true;
      } else {
        $population = test_input($_POST["population"]);
      }

      if (empty($_POST["flag"])) {
        $flagErr = "Project manager's name is required";
        $formError = true;
      } else {
        $flag = test_input($_POST["flag"]);
      }


      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

 ?>
