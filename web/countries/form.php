
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">Country form</h1>

          <form role="form"
                method="post">

                <div class="form-group">
                  <label class="control-label" for="alpha2Code">Alpha Country Code</label>
                    <?php
                      if(isset($id)){
                        echo $id;
                        ?>
                        <input type="hidden"
                               name="alpha2Code"
                              value="<?php echo $id;?>">
                        <?php
                      }else{
                        ?>
                        <input class="form-control" type="text"
                               name="alpha2Code" id="alpha2Code"
                              value="<?php echo $alpha2Code;?>">
                    <span class="error">* <?php echo $alpha2CodeErr;?></span>
                        <?php
                      }
                      ?>
                </div>



                <div class="form-group">
                  <label class="control-label" for="name">Nome</label>
                      <input class="form-control" type="text"
                             name="name" id="name"
                             value="<?php echo $name != '' ? $name : $country['name']; ?>">
                    <span class="error">* <?php echo $nameErr;?></span>
                </div>




                <div class="form-group">
                  <label class="control-label" for="capital">Capitale</label>
                      <input class="form-control" type="text"
                             name="capital" id="capital"
                             value="<?php echo $capital != '' ? $capital : $country['capital']; ?>">
                  <span class="error">* <?php echo $capitalErr;?></span>
                </div>



                <div class="form-group">
                  <label class="control-label" for="population">Popolazione</label>
                      <input class="form-control" type="text"
                             name="population" id="population"
                             value="<?php echo $population != '' ? $population : $country['population'];?>">
                  <span class="error">* <?php echo $populationErr;?></span>
                </div>

                <div class="form-group">
                  <label class="control-label" for="flag">Url Bandiera</label>
                      <input class="form-control" type="text"
                             name="flag" id="flag"
                             value="<?php echo $flag != '' ? $flag : $country['flag'];?>">
                  <span class="error">* <?php echo $flagErr;?></span>
                </div>

              <div>
                <button type="submit" id="submitBtn" class="btn btn-default">Submit</button>
                <button type="reset" class="btn btn-default">Reset Button</button>
              </div>
            </form>

            <br /><br />
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
