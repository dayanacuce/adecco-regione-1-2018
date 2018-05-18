<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Manga & Anime</h1>
    <div class="row">
      <div class="col-lg-8">
        <div class="panel panel-default">
          <div class="panel-heading">
              <a class="btn btn-default pull-right" href="?page=manga/insert.php">Insert New Record</a>
              <h5>List</h5>
          </div>
          <!-- /.panel-heading -->
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                      <th>#</th>
                      <th>Manga</th>
                      <th>Author</th>
                      <th>Genre</th>
                      <th>Released Date</th>
                      <th>Commands</th>
                  </tr>
                </thead>
                <tbody>
                  <?php include 'php_utils/db_utils.php';
                    $db = new DbUtils();  //
                    $conn = $db -> getConnection();
                    $stmt = $conn->prepare("SELECT manga.id, manga, author, manga_genres.genre, released_date
                                            FROM manga
                                            INNER JOIN manga_genres ON manga.genre_id = manga_genres.id");
                    $stmt->execute(); //richiamo il metodo execute che esegue la query

                    $commands = '<td><a href="/?page=manga/detail.php&id=:id">detail</a> - ';
                    $commands .= '<a href="/?page=manga/update.php&id=:id">edit</a> - ';
                    $commands .= '<a href="/manga/delete.php?id=:id">delete</a></td>';

                    // set the resulting array to associative
                    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); //fetch assoc associa i nomi dei campi ai dati che estrae
                    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll()), '', $commands) as $k=>$v) {  //fetch all restituisce tutti i record con tutti i campi
                    echo $v;                                                                                          //' ' è l'inizio della liena - $commands è la fine della linea
                    }
                  ?>
                </tbody>
              </table>
            </div>
              <!-- /.table-responsive -->
          </div>
            <!-- /.panel-body -->
        </div>
          <!-- /.panel -->
      </div>
      <!-- /.col-lg-6 -->
    </div>
  <!-- /.col-lg-12 -->
  </div>
<!-- /.row -->
</div>
