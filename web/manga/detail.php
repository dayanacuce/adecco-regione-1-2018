<?php include 'php_utils/db_utils.php';

 $db = new DbUtils();
      $conn = $db -> getConnection();
      $stmt = $conn->prepare("SELECT manga, author, manga_genres.genre AS genre, released_date, frequency, cover, anime, vote_anime, released_date_anime
                              FROM manga
                              INNER JOIN manga_genres ON manga.genre_id = manga_genres.id
                              WHERE manga.id='".$_GET['id']."'");
      $stmt->execute();

      // set the resulting array to associative
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $manga_detail = $stmt->fetch();  //fetch restituisce un record compresi di tutti i campi
?>
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <h1 class="page-header">Details</h1>
  </div>
</div>

<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-default">
      <div class="panel-body text-center">
        <h1><?php echo $manga_detail ['manga'] ?>
            <small>by <?php echo $manga_detail ['author'] ?></small>
        </h1>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-4 col-md-5">
    <div class="panel panel-default">
      <div class="panel-body">
        <img src="<?php echo $manga_detail ['cover'] ?>"
          alt="Copertina Manga" style="max-width: 100%;height: auto;"/>
      </div>
    </div>
  </div>
  <div class="col-lg-8 col-md-7">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left:0px; padding-right:0px;">
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4" style="padding-left:0px; padding-right:0px;">
            <strong>Genre: </strong>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 text-center" style="padding-left:0px; padding-right:0px;">
            <?php echo $manga_detail ['genre'] ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8 col-md-7">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left:0px; padding-right:0px;">
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4" style="padding-left:0px; padding-right:0px;">
            <strong>Released Date: </strong>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 text-center" style="padding-left:0px; padding-right:0px;">
            <?php echo $manga_detail ['released_date'] ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8 col-md-7">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left:0px; padding-right:0px;">
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4" style="padding-left:0px; padding-right:0px;">
            <strong>Frequency: </strong>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 text-center" style="padding-left:0px; padding-right:0px;">
            <?php echo $manga_detail ['frequency'] ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8 col-md-7">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left:0px; padding-right:0px;">
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4" style="padding-left:0px; padding-right:0px;">
            <strong>Anime: </strong>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 text-center" style="padding-left:0px; padding-right:0px;">
            <?php if ($manga_detail ['anime'] == "")
                echo "none..";
                else {
                echo $manga_detail ['anime'];
                }?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8 col-md-7">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left:0px; padding-right:0px;">
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4" style="padding-left:0px; padding-right:0px;">
            <strong>Vote: </strong>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 text-center" style="padding-left:0px; padding-right:0px;">
            <?php if ($manga_detail ['vote_anime'] == "")
                echo "none..";
                else {
                echo $manga_detail ['vote_anime'];
                } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-8 col-md-7">
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding-left:0px; padding-right:0px;">
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-4" style="padding-left:0px; padding-right:0px;">
            <strong>Released Date Anime: </strong>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 text-center" style="padding-left:0px; padding-right:0px;">
            <?php if ($manga_detail ['released_date_anime'] == "")
                echo "none..";
                else {
                echo $manga_detail ['released_date_anime'];
                } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
