
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Contact form</h1>
                          <div class="row">
                              <div class="col-lg-12">
                                  <div class="panel panel-default">
                                      <div class="panel-heading">
                                          Progetto cooperazione
                                      </div>
                                      <!-- /.panel-heading -->
                                      <div class="panel-body">
                                          <div class="table-responsive">
                                              <table class="table table-striped table-bordered table-hover"
                                                     width="100%">
                                                  <thead>
                                                      <tr>
                                                          <th>#</th>

                                                          <th>country_code</th>
                                                          <th>project_type</th>
                                                          <th>city_name</th>
                                                          <th>project_manager</th>
                                                          <th>comunity_name</th>
                                                          <th>dettaglio</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>

                                                      <?php
                                                       include 'php_utils/db_utils.php';
                                                       $connect = new DbUtils ();
                                                       $conn= $connect -> getConnection();

                                                       $stmt = $conn->prepare("SELECT id, country_code, project_type, city_name, project_manager, comunity_name FROM progetto_cooperazione");
                                                       $stmt->execute();

                                                       $commands = '<td><a href="/?page=progetto_cooperazione/dettaglio_cooperazione.php&id=:id">dettaglio</a></td>';

                                                        // set the resulting array to associative
                                                        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

                                                        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll()), '', $commands, 'id') as $k=>$v) {
                                                            echo $v;
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
                        <br /><br />
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
