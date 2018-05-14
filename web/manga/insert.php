<?php include 'php_utils/db_utils.php';

$db = new DbUtils();
$conn = $db -> getConnection();

// define variables and set to empty values
$mangaErr = $authorErr = $genre_idErr = $released_dateErr = $frequencyErr = $vote_animeErr = $released_date_animeErr = $coverErr = "";
$manga = $author = $genre_id = $released_date = $frequency = $anime = $vote_anime = $released_date_anime = $cover = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $stmt = $conn->prepare("INSERT INTO manga (manga, author, genre_id, released_date, frequency, cover, anime, vote_anime, released_date_anime)
  VALUES (:manga, :author, :genre_id, :release, :frequency, :cover, :anime, :vote_anime, :released_date_anime)");
  $stmt->bindParam(':manga', $manga);
  $stmt->bindParam(':author', $author);
  $stmt->bindParam(':genre_id', $genre_id);
  $stmt->bindParam(':release_date', $released_date);
  $stmt->bindParam(':frequency', $frequency);
  $stmt->bindParam(':cover', $cover);
  $stmt->bindParam(':anime', $anime);
  $stmt->bindParam(':vote_anime', $vote_anime);
  $stmt->bindParam(':released_date_anime', $released_date_anime);

  include('form_controls.php');

  if(!$formError){
    $stmt->execute();
  }
}

include 'form_marco.php';?>
