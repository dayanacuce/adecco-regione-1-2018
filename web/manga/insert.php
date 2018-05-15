<?php include 'php_utils/db_utils.php';

$db = new DbUtils();
$conn = $db -> getConnection();

// define variables and set to empty values
$mangaErr = $authorErr = $genre_idErr = $released_dateErr = $frequencyErr = $vote_animeErr = $released_date_animeErr = $coverErr = "";
$manga = $author = $genre_id = $released_date = $frequency = $anime = $vote_anime = $released_date_anime = $cover = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $stmt = $conn->prepare("INSERT INTO manga (manga, author, genre_id, released_date, frequency, cover, anime, vote_anime, released_date_anime)
  VALUES (:manga, :author, :genre_id, :released_date, :frequency, :cover, :anime, :vote_anime, :released_date_anime)");

  include 'form_controls.php';

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

  include 'form_marco.php';

  if(!$formError){
    $stmt->execute();
    echo "<h1>Form Submited Successfully</h1>";
  }
}

?>
