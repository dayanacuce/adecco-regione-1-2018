<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Manga & Anime</h1>
    <div class="row">
      <div class="col-lg-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h5 class="pull-left">List</h5>
            <a class="btn btn-default pull-right" href="?page=manga/insert.php">Insert New Record</a>
            <div class="clearfix"></div>
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

                    $commands = '<td><a href="/?page=manga/detail.php&id=:id" style="color:#5bc0de;"><span class="fas fa-info fa-fw"></a> - ';
                    $commands .= '<a href="/?page=manga/update.php&id=:id"><span class="fas fa-pencil-alt fa-fw"></span></a> - ';
                    $commands .= '<a href="#" style="color:#d9534f;" data-toggle="modal" data-target="#:id"><span class="far fa-trash-alt fa-fw"></span></a></td>
                                  <div class="modal fade" id=":id" tabindex="-1" role="dialog" aria-labelledby=":idLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                          <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
                                        </div>
                                        <div class="modal-body">
                                          <p>You are about to delete data from table, this procedure is irreversible.</p>
                                          <p>Do you want to proceed?</p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-outline btn-default" data-dismiss="modal">Cancel</button>
                                          <a href="/manga/delete.php?id=:id" class="btn btn-danger">Yes</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>';

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
