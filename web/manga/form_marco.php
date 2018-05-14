<?php
// define variables and set to empty values
$mangaErr = $authorErr = $genre_idErr = $released_dateErr = $frequencyErr = $vote_animeErr = $released_date_animeErr = $coverErr = "";
$manga = $author = $genre_id = $released_date = $frequency = $anime = $vote_anime = $released_date_anime = $cover = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["manga"])) {
    $mangaErr = "Manga is required";
  } else {
    $manga = test_input($_POST["manga"]);
    // check if manga only contains letters and whitespace
    if (!preg_match("/^[A-Za-zÀ-ÖØ-öø-žぁ-ゞ\s]+$/",$manga)) {
      $mangaErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["author"])) {
    $authorErr = "Author is required";
  } else {
    $author = test_input($_POST["author"]);
    // check if author only contains letters and whitespace
    if (!preg_match("/^[A-Za-zÀ-ÖØ-öø-žぁ-ゞ\s]+$/",$author)) {
      $authorErr = "Only letters and white space allowed";
    }
  }

  if (empty($_POST["genre_id"])) {
    $genre_idErr = "Genre is required";
  } else {
    $genre_id = test_input($_POST["genre_id"]);
  }

  if (empty($_POST["released_date"])) {
    $released_dateErr = "Date is required";
  } else {
    $released_date = test_input($_POST["released_date"]);
  }

  if (empty($_POST["frequency"])) {
    $frequencyErr = "Frequency is required";
  } else {
    $frequency = test_input($_POST["frequency"]);
  }

  if (empty($_POST["cover"])) {
    $coverErr = "URL cover is required";
  } else {
    $cover = test_input($_POST["cover"]);
    // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$cover)) {
      $coverErr = "Invalid URL";
    }
  }

  if (empty($_POST["anime"])) {
    $anime = "";
  } else {
    $anime = test_input($_POST["anime"]);
  }

  if (isset($_POST['anime']) && empty($_POST["vote_anime"])) {
    $vote_animeErr = "Vote is required";
  } else {
    $vote_anime = test_input($_POST["vote_anime"]);
  }

  if (isset($_POST['anime']) && empty($_POST["released_date_anime"])) {
    $released_date_animeErr = "Date is required";
  } else {
    $released_date_anime = test_input($_POST["released_date_anime"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<div class="row">
  <div class="col-lg-6">
    <h1 class="page-header">Form Anime & Manga</h1>
    <form role="form" action="http://adecco.local/adecco/form_marco.php" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="form-group <?php if($mangaErr != '') echo 'has-error'; ?>">
        <p>* Required field</p>
        <label class="control-label" for="manga">Manga: *</label>      <!--for indica l'id per cui fare il controllo-->
        <input type="text" class="form-control" name="manga" id="manga" placeholder="One Piece" value="<?php echo $manga;?>">
        <p class="help-block"> <?php echo $mangaErr;?></p>
      </div>

      <div class="form-group <?php if($authorErr != '') echo 'has-error'; ?>">
        <label class="control-label" for="author">Author: *</label>
        <input type="text" class="form-control" name="author" id="author" placeholder="Eiichiro Oda" value="<?php echo $author;?>">
        <p class="help-block"> <?php echo $authorErr;?></p>
      </div>

      <div class="form-group <?php if($genre_idErr != '') echo 'has-error'; ?>">
        <label class="control-label" for="genre_id">Genre: *</label>
        <select name="genre_id" class="form-control" id="genre_id" value="<?php echo $genre_id;?>">
          <option value=""  <?php if($_POST['genre_id'] == '')  echo 'selected="selected"' ?> >Selezionare: - - -</option>
          <option value="1" <?php if($_POST['genre_id'] == '1') echo 'selected="selected"' ?> >Arti Marziali</option>
          <option value="2" <?php if($_POST['genre_id'] == '2') echo 'selected="selected"' ?> >Avventura</option>
          <option value="3" <?php if($_POST['genre_id'] == '3') echo 'selected="selected"' ?> >Azione</option>
        </select>
        <p class="help-block"> <?php echo $genre_idErr;?></p>
      </div>

      <div class="form-group <?php if($released_dateErr != '') echo 'has-error'; ?>">
        <label class="control-label" for="released_date">Released Date: *</label>
        <div class="input-group date" data-provide="datepicker" data-date-format="dd/mm/yyyy" data-date-end-date="0d">
          <input type="text" class="form-control" name="released_date" id="released_date" placeholder="DD/MM/YYYY" value="<?php echo $released_date;?>">
            <div class="input-group-addon">
              <span class="glyphicon glyphicon-th"></span>
            </div>
        </div>
        <p class="help-block"> <?php echo $released_dateErr;?></p>
      </div>

      <div class="form-group <?php if($frequencyErr != '') echo 'has-error'; ?>">
        <label class="control-label" for="frequency">Frequency: *</label>
        <select name="frequency" class="form-control" id="frequency" value="<?php echo $frequency;?>">
          <option value=""            <?php if($_POST['frequency'] == '')            echo 'selected="selected"' ?> >Selezionare: - - -</option>
          <option value="Weekly"      <?php if($_POST['frequency'] == 'Weekly')      echo 'selected="selected"' ?> >Weekly</option>
          <option value="Monthly"     <?php if($_POST['frequency'] == 'Monthly')     echo 'selected="selected"' ?> >Monthly</option>
          <option value="Three-month" <?php if($_POST['frequency'] == 'Three-month') echo 'selected="selected"' ?> >Three-month</option>
        </select>
        <p class="help-block"> <?php echo $frequencyErr;?></p>
      </div>

      <div class="form-group <?php if($coverErr != '') echo 'has-error'; ?>">
        <label class="control-label" for="cover">Cover Volume 1: *</label>
        <input type="text" class="form-control" name="cover" id="cover" placeholder="Enter Cover URL" value="<?php echo $cover;?>">
        <p class="help-block"> <?php echo $coverErr;?></p>
      </div>

      <div class="form-group">
        <label class="control-label" for="anime">Anime:</label>
        <label class="checkbox-inline">
          <input type="checkbox" name="anime" id="anime" value="Yes" <?php if (isset($anime) && $anime == "Yes") echo "checked"; ?>>Yes
        </label>
      </div>

      <div class="form-group <?php if($vote_animeErr != '') echo 'has-error'; ?>" id="slide_vote" style="display: none;">
        <label class="control-label" for="vote_anime">Anime Vote: *</label>
        <select name="vote_anime" class="form-control" id="vote_anime" disabled value="<?php echo $vote_anime;?>">   <!-- disabled attributo di default di html degli input che disabilità il campo -->
          <option value=""   <?php if($_POST['vote_anime'] == '')   echo 'selected="selected"' ?> >Selezionare: - - -</option>
          <option value="1"  <?php if($_POST['vote_anime'] == '1')  echo 'selected="selected"' ?> >1</option>
          <option value="2"  <?php if($_POST['vote_anime'] == '2')  echo 'selected="selected"' ?> >2</option>
          <option value="3"  <?php if($_POST['vote_anime'] == '3')  echo 'selected="selected"' ?> >3</option>
          <option value="4"  <?php if($_POST['vote_anime'] == '4')  echo 'selected="selected"' ?> >4</option>
          <option value="5"  <?php if($_POST['vote_anime'] == '5')  echo 'selected="selected"' ?> >5</option>
          <option value="6"  <?php if($_POST['vote_anime'] == '6')  echo 'selected="selected"' ?> >6</option>
          <option value="7"  <?php if($_POST['vote_anime'] == '7')  echo 'selected="selected"' ?> >7</option>
          <option value="8"  <?php if($_POST['vote_anime'] == '8')  echo 'selected="selected"' ?> >8</option>
          <option value="9"  <?php if($_POST['vote_anime'] == '9')  echo 'selected="selected"' ?> >9</option>
          <option value="10" <?php if($_POST['vote_anime'] == '10') echo 'selected="selected"' ?>>10</option>
        </select>
        <p class="help-block"> <?php echo $vote_animeErr;?></p>
      </div>

      <div class="form-group <?php if($released_date_animeErr != '') echo 'has-error'; ?>" id="slide_date" style="display: none;">
        <label class="control-label" for="released_date_anime">Released Date Anime: *</label>
        <div class="input-group date" data-provide="datepicker" data-date-format="dd/mm/yyyy" data-date-end-date="0d">
          <input type="text" class="form-control" name="released_date_anime" id="released_date_anime" placeholder="DD/MM/YYYY" disabled value="<?php echo $released_date_anime;?>">
            <div class="input-group-addon">
              <span class="glyphicon glyphicon-th"></span>
            </div>
        </div>
        <p class="help-block"> <?php echo $released_date_animeErr;?></p>
      </div>

      <br>

      <button type="submit" id="submitBtn" class="btn btn-default">Submit Button</button>
      <button type="reset" class="btn btn-default">Reset Button</button>

    </form>
  </div>
  <!-- /.col-lg-6 -->
</div>
<!-- /.row -->
