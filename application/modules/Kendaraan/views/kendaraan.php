<div class="row-fluid">
  <div class="block">         <!-- block -->
    <div class="navbar navbar-inner block-header">
      <div class="muted pull-left">Data Kendaraan Pada Kabupaten Bulukumba</div>
      <div class="pull-right">
          <button class="btn" id="addata">Tambah<i class=icon-plus></i></button>
      </div>
    </div>
    <div class="block-content collapse in">
      <table class="table table-striped">
      <thead>
        <tr>
          <th><i class="icon_pin"></i>No</th>
          <th><i class="icon_pin"></i>No DD</th>
          <th><i class="icon_pin"></i>Jenis Kendaraan</th>
          <th><i class="icon_pin"></i>Tujuan</th>
          <th><i class="icon_pin"></i>Tahun Produksi</th>
          <th><i class="icon_cogs"></i> Action</th>
        </tr>
      </thead>
       <tbody>
        </tbody>
      </table>

    <!-- Modal -->
    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Tambah Data</h4>
            </div>
            <form class="form-horizontal form-add" method="post" enctype="multipart/form-data">
              <div class="modal-body">

                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">No DD</label>
                  <div class="controls">
                    <input type="text" class="form-control" name="no_dd" placeholder="No DD Kendaraan">
                  </div>
                </div>
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Jenis Kendaraan</label>
                  <div class="controls">
                    <input type="text" class="form-control" name="j_kendaraan" placeholder="jenis Kendaraan">
                  </div>
                </div>  
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Tujuan</label>
                  <div class="controls">
                    <input type="text" class="form-control" name="tujuan" placeholder="Tujuan Kendaraan">
                  </div>
                </div>
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Tahun Produksi</label>
                  <div class="controls">
                    <input type="text" class="form-control" name="tahun_produksi" placeholder="Tahun Produksi">
                  </div>
                </div>

              </div>
              <div class="modal-footer">
                <button class="btn btn-info" id="addkendaraan"> Simpan&nbsp;</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
              </div>
            </form>
          </div>  <!--end modal content-->
        </div>    <!--end modal dialog-->
      </div>      <!--end Mymodal-->
      <!-- Modal Ubah data -->
      <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-2" id="myEdit" class="modal fade">
      <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Edit Data</h4>
            </div>
            <form class="form-horizontal form-update" method="post" enctype="multipart/form-data">
              <div class="modal-body">

               <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">No DD</label>
                  <div class="controls">
                    <input type="hidden" class="form-control" name="no_id">
                    <input type="text" class="form-control" id="no_dd" name="no_dd" placeholder="No DD Kendaraan">
                  </div>
                </div>
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Jenis Kendaraan</label>
                  <div class="controls">
                    <input type="text" class="form-control" name="j_kendaraan" placeholder="jenis Kendaraan">
                  </div>
                </div>
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Tujuan</label>
                  <div class="controls">
                    <input type="text" class="form-control" name="tujuan" placeholder="Tujuan Kendaraan">
                  </div>
                </div>
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Tahun Produksi</label>
                  <div class="controls">
                    <input type="text" class="form-control" name="tahun_produksi" placeholder="Tahun Produksi">
                  </div>
                </div>


              </div>
              <div class="modal-footer">
                <button class="btn btn-info" id="upkendaraan" data-dismiss="modal"> Update&nbsp;</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
              </div>
            </form>
          </div>  <!--end modal content-->
        </div>    <!--end modal dialog-->
      </div>      <!--end Mymodal-->
    </div>
    </div>
  </div>