<?php

include 'php_utils/db_utils.php';

$db_utils = new DbUtils();
$conn = $db_utils->getConnection();

$inserted = false;
// define variables and set to empty values
$alpha2CodeErr = $nameErr = $capitalErr = $populationErr = $flagErr = "";

$alpha2Code = $name = $capital = $population = $flag = '';
$country = array(
  'alpha2Code'=>'',
  'name'=>'',
  'capital'=>'',
  'population'=>'',
  'flag'=>''
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO countries (alpha2Code, name, capital, population, flag)
  VALUES (:alpha2Code, :name, :capital, :population, :flag)");
  $stmt->bindParam(':alpha2Code', $alpha2Code);
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':capital', $capital);
  $stmt->bindParam(':population', $population);
  $stmt->bindParam(':flag', $flag);

  include('form_controls.php');

  if(!$formError){
    if($stmt->execute()){
      $inserted = true;
    }
  }

}

if($inserted){
  ?>
  <p>
    Elemento inserito con successo <a href="/?page=countries/list.php"> Clicca qui per tornare alla lista </a>
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

 ?>
