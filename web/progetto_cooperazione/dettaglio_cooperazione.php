  <?php
   include 'php_utils/db_utils.php';
   $connect = new DbUtils ();
   $conn= $connect -> getConnection();

   $stmt = $conn->prepare("SELECT* FROM progetto_cooperazione WHERE id ='".$_GET[id]."'");
   $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $progetto_cooperazione = $stmt->fetch();
    ?>


        <!-- Page Content -->
                        <div class= "row">
                          <div class= "col-lg-12">
                            <h1 class="page-header">Lista</h1>
                          </div>
                        </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge"> <?php echo $progetto_cooperazione['country_code']; ?> </div>
                                                    <div>Paese d'intervento</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge"><?php echo $progetto_cooperazione['project_type']; ?> </div>
                                                    <div>Tipologia di progetto</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge"> <?php echo $progetto_cooperazione['city_name']; ?> </div>
                                                    <div>Città</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge"> <?php echo $progetto_cooperazione['project_manager']; ?> </div>
                                                    <div>Capo progetto</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                        </a>
                                    </div>
                                </div>




                               <div class="row">
                                <div class="col-lg-3 col-md-6">
                                    <div class="panel panel-green">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div class="huge"> <?php echo $progetto_cooperazione['comunity_name']; ?> </div>
                                                    <div>Nome comunità</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#">
                                          </a>
                                    </div>
                                </div>



                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge"> <?php echo $progetto_cooperazione['number_of_families']; ?></div>
                                                <div>Numero famiglie</div>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="#">
                                    </a>
                                </div>
                            </div>


                        <div class="col-lg-3 col-md-6">
                            <div class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge"> <?php echo $progetto_cooperazione['class_transport']; ?> </div>
                                            <div>Tipologia trasporto</div>
                                        </div>
                                    </div>
                                </div>
                                <a href="#">
                                </a>
                            </div>
                          </div>
                      </div>
