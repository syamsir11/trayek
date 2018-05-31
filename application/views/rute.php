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
          <th><i class="icon_pin"></i>Kode</th>
          <th><i class="icon_pin"></i>Tujuan</th>
          <th><i class="icon_pin"></i>Rute</th>
          <th><i class="icon_cogs"></i> Action</th>
        </tr>
      </thead>
        <?php
          $no=1;
          foreach ($data['rute'] as $tampil){
        ?>
        <tbody>
        <tr>
          <td><?php echo $no?></td>
          <td><?php echo $tampil->kode?></td>
          <td><?php echo $tampil->tujuan?></td>
          <td><?php echo $tampil->rute?></td>
          <td>
            <?php
              $accountId = $tampil->kode;
              $password="/z3m-".base64_encode($accountId)."run";
              $id=base64_encode($accountId).$password;
            ?>
            <div class="btn-group">

              <!-- menambahkan function ubah untuk melakukan get data dari server-->
              <a class="edit btn btn-success" title="Edit this item" id="<?php echo $tampil->kode?>" onclick="editdata('<?php echo $tampil->kode ?>')">
                <i class="icon-edit"></i>
              </a>
              <a class="btn btn-danger" href="<?php echo base_url('utama/hapusrute/'); echo $accountId?>"><i class="icon-trash"></i></a>
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
                  <label class="col-lg-3 col-sm-3 control-label">Kode Rute</label>
                  <div class="control">
                    <input type="text" class="form-control" name="kode" placeholder="Kode Rute Kendaraan" id="kode">
                  </div>
                </div>
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Tujuan</label>
                  <div class="control">
                    <input type="text" class="form-control" name="tujuan" placeholder="Tujuan Kendaraan" id="tujuan">
                  </div>
                </div>
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Rute</label>
                  <div class="control">
                    <input type="text" class="form-control" name="rutee" placeholder="Rute Kendaraan" id="rutee">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-info" id="addrute"> Simpan&nbsp;</button>
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
            <form class="form-horizontal form-update" method="post" enctype="multipart/form-data" role="form">
              <div class="modal-body">

               <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Kode</label>
                  <div class="control">
                    <input type="hidden" class="form-control" name="id">
                    <input type="text" class="form-control" id="kode" name="kode" placeholder="kode Kendaraan" required="">
                  </div>
                </div>
                 <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Tujuan kendaraan</label>
                  <div class="control">
                    <input type="text" class="form-control" id="tujuan" name="tujuan" placeholder="Tujuan Kendaraan" required="">
                  </div>
                </div>
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Rute Kendaraan</label>
                  <div class="control">
                    <input type="text" class="form-control" name="rute" placeholder="Rute Kendaraan">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-info" id="uprute"> Update&nbsp;</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
              </div>
            </form>
          </div>  <!--end modal content-->
        </div>    <!--end modal dialog-->
      </div>      <!--end Mymodal-->

    </div>
  </div>
</div>

   
    <script type="text/javascript">
      function editdata(id)
      {
        // alert(id);  
        $.ajax({
            url : '<?php echo base_url('utama/edtrute/') ?>'+id,
            //link menuju ke kontroller utama method akbar dengan mengirim parameter id
            type : 'GET',
            datatype : 'JSON',
            success : function(data) {
              //parameter data menangkap outout json yang dikirim dari server
              //proses yang dibawah ini berfungsi untuk konvert isi dari variable data kedalam format JSON.
              var hasil = JSON.parse(data);
              $('#myEdit input[name=id]').val(hasil.respon.rute[0].id);
              $('#myEdit input[name=kode]').val(hasil.respon.rute[0].kode);
              $('#myEdit input[name=tujuan]').val(hasil.respon.rute[0].tujuan);
              $('#myEdit input[name=rute]').val(hasil.respon.rute[0].rute);
              //ket :
              //pada baris pertama peritanh mencari edit text yang bernama no_dd dalam tag yang memiliki id myEdit
              //apabila edit text ditemukan maka akan di set value.nya dari json.
              
            }
          })
         $("#myEdit").modal("show");
      }

      $("#addata").click(function()
        {

          $("#myModal").modal("show");
          $modal.find('form')[0].reset();

        });
      $('#rute').click(function() {
          $('#coba').load('<?= base_url('utama/rute')?>')
        }); 

      $('#addrute').click(function() {
        var data = $('.form-add').serialize();
         $.ajax({
            url: '<?php echo base_url('utama/addrute') ?>',
            type: 'POST',
            datatype: 'JSON',
            data: data,
            success : function() {
              $('#myModal').modal("hide");
              $('#coba').load('<?= base_url('utama/rute')?>');        
            }
          })
         return false;
      })
      $('#uprute').click(function () {
        // Code By Zem
        var data = $('.form-update').serialize();
        $.ajax({
          url:'<?php echo base_url('utama/uprute')?>',
          type:'POST',
          datatype:'JSON',
          data:data,
          success:function () {
            $('#myEdit').modal("hide");
            $('#coba').load('<?= base_url('utama/rute')?>');    
          }
        })
        return false;
      })
    </script>