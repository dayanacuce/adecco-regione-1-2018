<?php
include 'php_utils/db_utils.php';

$db_utils = new DbUtils();
$conn = $db_utils->getConnection();
$stmt = $conn->prepare("SELECT * FROM campionato WHERE id='".$_GET['id']."'");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$campionato = $stmt->fetch();
?>

<div class="row">
<div class="col-lg-12">
    <h1 class="page-header"><?php echo $campionato['name'] ?></h1>

    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                          
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php echo $campionato['Team1']; ?></div>
                            <div>Team1</div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="panel">
                <div class="panel-heading">
                  <div>Team2</div>
                   <?php echo $campionato['Team2']; ?>
                </div>
                <div class="panel-body">
                  <img src="<?php echo $campionato['stemma']; ?>" style="width: 100%;"/>
                </div>
            </div>
            </div>
          </div>
    <br /><br />
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
