<div class="row">
  <div class="col-lg-6">
    <h1 class="page-header">Form Anime & Manga</h1>
    <form role="form" method="post">
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
          <option value=""  <?php if(isset($_POST['genre_id']) && $_POST['genre_id'] == '')  echo 'selected="selected"'; ?> >Selezionare: - - -</option>
          <?php $db = new DbUtils();
          $conn = $db -> getConnection();
          $query = $conn->prepare("SELECT id, genre
                                  FROM manga_genres");
          $query->execute();

          $result = $query->setFetchMode(PDO::FETCH_ASSOC);
          foreach ($query->fetchAll() as $k=>$lista) {?>
            <option value="<?php echo $lista['id'];?>"
                <?php
                if(isset($_POST['genre_id']) && $_POST['genre_id'] == $lista['id']){
                  echo 'selected="selected"';
                }
                ?> > <?php echo $lista ['genre'];?> </option>;
            <?php
          }
          ?>
        </select>
        <p class="help-block"> <?php echo $genre_idErr;?></p>
      </div>

      <div class="form-group <?php if($released_dateErr != '') echo 'has-error'; ?>">
        <label class="control-label" for="released_date">Released Date: *</label>
        <div class="input-group date" data-provide="datepicker" data-date-format="yyyy/mm/dd" data-date-end-date="0d">
          <input type="text" class="form-control" name="released_date" id="released_date" placeholder="YYYY/MM/DD" value="<?php echo $released_date;?>">
            <div class="input-group-addon">
              <span class="glyphicon glyphicon-th"></span>
            </div>
        </div>
        <p class="help-block"> <?php echo $released_dateErr;?></p>
      </div>

      <div class="form-group <?php if($frequencyErr != '') echo 'has-error'; ?>">
        <label class="control-label" for="frequency">Frequency: *</label>
        <select name="frequency" class="form-control" id="frequency" value="<?php echo $frequency;?>">
          <option value=""            <?php if(isset($_POST['frequency']) && $_POST['frequency'] == '')            echo 'selected="selected"'; ?> >Selezionare: - - -</option>
          <option value="Weekly"      <?php if(isset($_POST['frequency']) && $_POST['frequency'] == 'Weekly')      echo 'selected="selected"'; ?> >Weekly</option>
          <option value="Monthly"     <?php if(isset($_POST['frequency']) && $_POST['frequency'] == 'Monthly')     echo 'selected="selected"'; ?> >Monthly</option>
          <option value="Three-month" <?php if(isset($_POST['frequency']) && $_POST['frequency'] == 'Three-month') echo 'selected="selected"'; ?> >Three-month</option>
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
          <option value=""   <?php if(isset($_POST['vote_anime']) && $_POST['vote_anime'] == '')   echo 'selected="selected"'; ?> >Selezionare: - - -</option>
          <option value="1"  <?php if(isset($_POST['vote_anime']) && $_POST['vote_anime'] == '1')  echo 'selected="selected"'; ?> >1</option>
          <option value="2"  <?php if(isset($_POST['vote_anime']) && $_POST['vote_anime'] == '2')  echo 'selected="selected"'; ?> >2</option>
          <option value="3"  <?php if(isset($_POST['vote_anime']) && $_POST['vote_anime'] == '3')  echo 'selected="selected"'; ?> >3</option>
          <option value="4"  <?php if(isset($_POST['vote_anime']) && $_POST['vote_anime'] == '4')  echo 'selected="selected"'; ?> >4</option>
          <option value="5"  <?php if(isset($_POST['vote_anime']) && $_POST['vote_anime'] == '5')  echo 'selected="selected"'; ?> >5</option>
          <option value="6"  <?php if(isset($_POST['vote_anime']) && $_POST['vote_anime'] == '6')  echo 'selected="selected"'; ?> >6</option>
          <option value="7"  <?php if(isset($_POST['vote_anime']) && $_POST['vote_anime'] == '7')  echo 'selected="selected"'; ?> >7</option>
          <option value="8"  <?php if(isset($_POST['vote_anime']) && $_POST['vote_anime'] == '8')  echo 'selected="selected"'; ?> >8</option>
          <option value="9"  <?php if(isset($_POST['vote_anime']) && $_POST['vote_anime'] == '9')  echo 'selected="selected"'; ?> >9</option>
          <option value="10" <?php if(isset($_POST['vote_anime']) && $_POST['vote_anime'] == '10') echo 'selected="selected"'; ?>>10</option>
        </select>
        <p class="help-block"> <?php echo $vote_animeErr;?></p>
      </div>

      <div class="form-group <?php if($released_date_animeErr != '') echo 'has-error'; ?>" id="slide_date" style="display: none;">
        <label class="control-label" for="released_date_anime">Released Date Anime: *</label>
        <div class="input-group date" data-provide="datepicker" data-date-format="yyyy/mm/dd" data-date-end-date="0d">
          <input type="text" class="form-control" name="released_date_anime" id="released_date_anime" placeholder="YYYY/MM/DD" disabled value="<?php echo $released_date_anime;?>">
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
