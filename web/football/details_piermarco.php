<?php
include 'php_utils/db_utils.php';

$db_utils = new DbUtils();
$conn = $db_utils->getConnection();
$stmt = $conn->prepare("SELECT * FROM countries WHERE alpha2code='".$_GET['alpha2code']."'");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$country = $stmt->fetch();
  ?>

<div class="row">
<div class="col-lg-12">
    <h1 class="page-header"><?php echo $country['name'] ?></h1>

    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $country['population']; ?></div>
                            <div>Population</div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="panel panel-default">
                <div class="panel-heading">
                  Capital: <?php echo $country['capital']; ?>
                </div>
                <div class="panel-body">
                  <img src="<?php echo $country['flag']; ?>" style="width: 100%;"/>
                </div>
            </div>
            </div>
          </div>
    <br /><br />
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
