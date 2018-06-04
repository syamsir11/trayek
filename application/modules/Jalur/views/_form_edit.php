 <form id="form_edit" class="form-horizontal form-add" method="post" >
        <div class="modal-body"> 
          <div class="control-group">
            <label class="col-lg-3 col-sm-3 control-label">Kode Rute</label>
            <div class="controls">
              <input type="text" class="form-control" name="kode_rute" placeholder="Kode Rute" readonly="" value="<?= $model->kode_rute?>">
            </div>
          </div>       <!-- controll Group -->
          <div class="control-group">
            <label class="col-lg-3 col-sm-3 control-label">Tujuan</label>
            <div class="controls">
              <input type="text" class="form-control" name="tujuan" placeholder="Tujuan" value="<?= $model->tujuan ?>">
            </div>
          </div> 
          <?php
          $rute = explode('-',$model->rute);
          ?>
          <div class="control-group">
            <label class="col-lg-3 col-sm-3 control-label">Rute</label>
            <div id="controls" class="controls">
              <?php
              for ($i=0; $i < count($rute); $i++) { 
                ?>
                <input id="rute_noob" type="text" class="form-control" name="rute[]" placeholder="Rute" value="<?= trim($rute[$i]) ?>">
                <?php
              }

              ?>
              <div><button type="button" id="newJalur">+</button></div>
            </div>
          </div>       <!-- controll Group -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" id="save_change"> Ubah&nbsp;</button>
          <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
        </div>
      </form>