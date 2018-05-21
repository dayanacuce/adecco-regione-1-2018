<?php

if (empty($_GET["id"]) && empty($_POST["id"])) {
  ?>
  <p>
    L'id è obbligatorio!
  </p>
  <script>
    setTimeout(goBack, 3000);
    function goBack(){
      window.location = '/?page=manga/list.php';
    }
  </script>
  <?php
}else{
  $id = $_GET["id"];


include 'php_utils/db_utils.php';

$db = new DbUtils();
$conn = $db -> getConnection();

$updated = false;
// define variables and set to empty values
$mangaErr = $authorErr = $genre_idErr = $released_dateErr = $frequencyErr = $vote_animeErr = $released_date_animeErr = $coverErr = "";
$manga = $author = $genre_id = $released_date = $frequency = $anime = $vote_anime = $released_date_anime = $cover = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // prepare sql and bind parameters
  $stmt = $conn->prepare("UPDATE manga SET manga=:manga, author=:author,genre_id=:genre_id,
  released_date=:released_date, frequency=:frequency,cover=:cover, anime=:anime,
  vote_anime=:vote_anime, released_date_anime=:released_date_anime
  WHERE id=:id;");

  include 'form_controls.php';

  $stmt->bindParam(':id', $id);
  $stmt->bindParam(':manga', $manga);
  $stmt->bindParam(':author', $author);
  $stmt->bindParam(':genre_id', $genre_id);
  $stmt->bindParam(':released_date', $released_date);
  $stmt->bindParam(':frequency', $frequency);
  $stmt->bindParam(':cover', $cover);
  if ($anime == "") {
    $stmt->bindValue(':anime', NULL);
  }else {
    $stmt->bindParam(':anime', $anime);
  }
  if ($vote_anime == "") {
    $stmt->bindValue(':vote_anime', NULL);
  }else {
    $stmt->bindParam(':vote_anime', $vote_anime);
  }
  if ($released_date_anime == "") {
    $stmt->bindValue(':released_date_anime', NULL);
  }else {
    $stmt->bindParam(':released_date_anime', $released_date_anime);
  }

  if(!$formError){
    if($stmt->execute()){
      $updated = true;
    }
  }

}else{
  $stmt = $conn->prepare("SELECT * FROM manga WHERE id = '$id'");
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $manga_update = $stmt->fetch();
}

if($updated){
  ?>
  <h1>Data Update Successfully</h1>
  <br>
  <a href="/?page=manga/list.php"><span class="fa fa-arrow-circle-left"></span> Click here to go back to list</a>
  <script>
    setTimeout(goBack, 5000);
    function goBack(){
      window.location = '/?page=manga/list.php';
    }
  </script>
  <?php
}else{
  include 'form_marco.php';
}
}

?>
