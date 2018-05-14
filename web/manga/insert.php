<?php include 'php_utils/db_utils.php';

 $db = new DbUtils();
  $conn = $db -> getConnection();

  // define variables and set to empty values
  $mangaErr = $authorErr = $genre_idErr = $released_dateErr = $frequencyErr = $vote_animeErr = $released_date_animeErr = $coverErr = "";
  $manga = $author = $genre_id = $released_date = $frequency = $anime = $vote_anime = $released_date_anime = $cover = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $stmt = $conn->prepare("INSERT INTO manga (manga, author, genre_id, released_date, frequency, cover, anime, vote_anime, released_date_anime)
        VALUES (:alpha2Code, :name, :capital, :population, :flag)");
        $stmt->bindParam(':alpha2Code', $alpha2Code);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':capital', $capital);
        $stmt->bindParam(':population', $population);
        $stmt->bindParam(':flag', $flag);

        include('form_controls.php');

        if(!$formError){
          $stmt->execute();
        }

?>

<?php include 'manga/form_marco.php' ?>
