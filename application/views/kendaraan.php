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
        <?php
          $no=1;
          foreach ($data['kendaraan'] as $tampil){
        ?>
        <tbody>
        <tr>
          <td><?php echo $no?></td>
          <td><?php echo $tampil->no_dd?></td>
          <td><?php echo $tampil->jkendaraan?></td>
          <td><?php echo $tampil->tujuan?></td>
          <td><?php echo $tampil->tproduksi?></td>
          <td>
            <?php
              $accountId = $tampil->no_dd;
              $password="/z3m-".base64_encode($accountId)."run";
              $id=base64_encode($accountId).$password;
            ?>
            <div class="btn-group">

              <!-- menambahkan function ubah untuk melakukan get data dari server-->
              <a class="edit btn btn-success" onclick="editdata('<?php echo $tampil->no_dd ?>')">
               <i class=icon-edit></i>
              </a>
              <a class="delken btn btn-danger" onclick="hapusdata('<?php echo $tampil->no_dd ?>')">
                <i class=icon-trash></i>
              </a>
            </div>
          </td>
        </tr>
        <?php 
          $no++;
          }
        ?>
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
    </section>


    <script type="text/javascript">
      function editdata(id)
      {
         // alert(id);  
        $.ajax({
            url : '<?php echo base_url('utama/akbar/') ?>'+id,
            //link menuju ke kontroller utama method akbar dengan mengirim parameter id
            type : 'GET',
            datatype : 'JSON',
            success : function(data) {
              //parameter data menangkap outout json yang dikirim dari server
              //proses yang dibawah ini berfungsi untuk konvert isi dari variable data kedalam format JSON.
              var hasil = JSON.parse(data);
              $('#myEdit input[name=no_id]').val(hasil.respon.kendaraan[0].no_dd);
              $('#myEdit input[name=no_dd]').val(hasil.respon.kendaraan[0].no_dd);
              $('#myEdit input[name=j_kendaraan]').val(hasil.respon.kendaraan[0].jkendaraan);
              $('#myEdit input[name=tujuan]').val(hasil.respon.kendaraan[0].tujuan);
              $('#myEdit input[name=tahun_produksi]').val(hasil.respon.kendaraan[0].tproduksi);
              //ket :
              //pada baris pertama peritanh mencari edit text yang bernama no_dd dalam tag yang memiliki id myEdit
              //apabila edit text ditemukan maka akan di set value.nya dari json.
              
            }
          })
         $("#myEdit").modal("show");
      }

      $('#test').click(function() {
        $('#coba').load('<?= base_url('autama/coba') ?>')
      })
      $("#addata").click(function()
        {
          $("#myModal").modal("show");
        })
      $('#addkendaraan').click(function(){
         var data = $('.form-add').serialize();
         $.ajax({
            url: '<?php echo base_url('utama/tkendaraan') ?>',
            type: 'POST',
            datatype: 'JSON',
            data: data,
            success : function() {
              $('#myModal').modal("hide");
              $('#coba').load('<?= base_url('utama/kendaraan')?>');        
            }
          })
         return false;
      })

      function hapusdata(id) {
        // body...
        // alert('hay');
        $.ajax({
            url: '<?php echo base_url('utama/hapusken/') ?>'+id,
            type: 'GET',
            datatype: 'JSON',
            success : function() {
              $('#myModal').modal("hide");
              $('#coba').load('<?= base_url('utama/kendaraan')?>');         
            }
          })
         return false;
      }
      $('#upkendaraan').click(function() {
        var data = $('.form-update').serialize();
        $.ajax({
          url:'<?php echo base_url('utama/upkendaraan')?>',
          type:'POST',
          datatype:'JSON',
          data:data,
          success:function () {
            $('#myEdit').modal("hide");
            $('#coba').load('<?= base_url('utama/kendaraan')?>');
          }
        })
        return false;
      })

    </script>