<?php

$formError = false;

if (empty($_POST["manga"])) {
  $mangaErr = "Manga is required";
  $formError = true;
} else {
  $manga = test_input($_POST["manga"]);
  // check if manga only contains letters and whitespace
  if (!preg_match("/^[A-Za-zÀ-ÖØ-öø-žぁ-ゞ\s]+$/",$manga)) {
    $mangaErr = "Only letters and white space allowed";
    $formError = true;
  }
}

if (empty($_POST["author"])) {
  $authorErr = "Author is required";
  $formError = true;
} else {
  $author = test_input($_POST["author"]);
  // check if author only contains letters and whitespace
  if (!preg_match("/^[A-Za-zÀ-ÖØ-öø-žぁ-ゞ\s]+$/",$author)) {
    $authorErr = "Only letters and white space allowed";
    $formError = true;
  }
}

if (empty($_POST["genre_id"])) {
  $genre_idErr = "Genre is required";
  $formError = true;
} else {
  $genre_id = test_input($_POST["genre_id"]);
}

if (empty($_POST["released_date"])) {
  $released_dateErr = "Date is required";
  $formError = true;
} else {
  $released_date = test_input($_POST["released_date"]);
}

if (empty($_POST["frequency"])) {
  $frequencyErr = "Frequency is required";
  $formError = true;
} else {
  $frequency = test_input($_POST["frequency"]);
}

if (empty($_POST["cover"])) {
  $coverErr = "URL cover is required";
  $formError = true;
} else {
  $cover = test_input($_POST["cover"]);
  // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
  if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$cover)) {
    $coverErr = "Invalid URL";
    $formError = true;
  }
}

if (empty($_POST["anime"])) {
  $_POST["vote_anime"] = "";
  $_POST["released_date_anime"] = "";
} else {
  $anime = test_input($_POST["anime"]);
}

if (isset($_POST['anime']) && empty($_POST["vote_anime"])) {
  $vote_animeErr = "Vote is required";
  $formError = true;
} else {
  $vote_anime = test_input($_POST["vote_anime"]);
}

if (isset($_POST['anime']) && empty($_POST["released_date_anime"])) {
  $released_date_animeErr = "Date is required";
  $formError = true;
} else {
  $released_date_anime = test_input($_POST["released_date_anime"]);
}


function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
