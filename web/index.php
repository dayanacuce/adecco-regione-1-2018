<!DOCTYPE html>
<html lang="en">
  <head>

  <?php

    $page = isset($_GET['page']) ? $_GET['page'] : null;
    if (!empty($page)) {
      include($page . '.meta');
    }
    else {
      $seo_description = '';
      $seo_keywords = '';
      $html_author = 'Io';
      $page_title = 'Index';
    }

    include 'partials/head.php';
  ?>

  </head>

  <body>

        <div id="wrapper">
            <?php include 'partials/navigation.php' ?>

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                  <?php
                  	if (!empty($page)) {
                  		include($page);
                  	}else{
                      echo '<- scegli una pagina';
                    }
                  ?>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->
  <?php
    include 'partials/javascripts.php';
  ?>
</body>

</html>
