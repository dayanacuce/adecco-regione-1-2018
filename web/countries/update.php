<?php

  if (empty($_GET["alpha2code"]) && empty($_POST["alpha2code"])) {
    ?>
    <p>
      L'id è obbligatorio
    </p>
    <script>
      setTimeout(goBack, 3000);
      function goBack(){
        window.location = '/?page=countries/list.php';
      }
    </script>
    <?php
  }else{
    $id = $_GET["alpha2code"];


  include 'php_utils/db_utils.php';

  $db_utils = new DbUtils();
  $conn = $db_utils->getConnection();

  $updated = false;
  // define variables and set to empty values
  $alpha2CodeErr = $nameErr = $capitalErr = $populationErr = $flagErr = "";

  $alpha2Code = $name = $capital = $population = $flag = '';

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // prepare sql and bind parameters
    $stmt = $conn->prepare("UPDATE countries SET ".
    "name=:name, capital=:capital, population=:population, flag=:flag".
    " WHERE alpha2code=:alpha2Code;"
    );
    $stmt->bindParam(':alpha2Code', $alpha2Code);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':capital', $capital);
    $stmt->bindParam(':population', $population);
    $stmt->bindParam(':flag', $flag);

    include('form_controls.php');

    if(!$formError){
      if($stmt->execute()){
        $updated = true;
      }
    }

  }else{
    $stmt = $conn->prepare("SELECT * FROM countries WHERE alpha2code = '$id'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $country = $stmt->fetch();
  }

  if($updated){
    ?>
    <p>
      Elemento modificato con successo <a href="/?page=countries/list.php"> Clicca qui per tornare alla lista </a>
    </p>
    <script>
      setTimeout(goBack, 5000);
      function goBack(){
        window.location = '/?page=countries/list.php';
      }
    </script>
    <?php
  }else{
    include 'form.php';
  }

  }


 ?>
