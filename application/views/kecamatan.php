<div class="row-fluid">
  <div class="block">         <!-- block -->
    <div class="navbar navbar-inner block-header">
      <div class="muted pull-left">Data Kecamatan Pada Kabupaten Bulukumba</div>
      <div class="pull-right">
          <button class="btn" id="addata">Tambah<i class=icon-plus></i></button>
      </div>
    </div>
    <div class="block-content collapse in">
      <table class="table table-striped">
      <thead>
                  <tr>
                    <th><i class="icon_pin"></i>No</th>
                    <th><i class="icon_pin_alt"></i>Kecamatan</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  <?php
                    $no=1;
                    foreach ($data['kecamatan'] as $tampil){
                  ?>
                  <tbody>
                  <tr>
                    <td><?php echo $no?></td>
                    <td><?php echo $tampil->nama_kecamatan?></td>
                    <td>
                      <?php
                        $accountId = $tampil->id_kecamatan;
                        $password="/z3m-".base64_encode($accountId)."run";
                        $id=base64_encode($accountId).$password;
                      ?>
                      <div class="btn-group">
                        <a class="edit btn btn-success" title="Add this item" id="<?php echo $tampil->id_kecamatan?>" onclick="editdata('<?php echo $tampil->id_kecamatan ?>')">
                          <i class=icon-edit></i>
                        </a>
                        <a class="btn btn-danger" href="<?php echo base_url('utama/hapuskec/'); echo $id?>"><i class=icon-trash></i></a>
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
            <form class="form-horizontal" action="<?php echo base_url('utama/tkecamatan')?>" method="post" enctype="multipart/form-data" role="form">
              <div class="modal-body">
                <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Nama Kecamatan</label>
                  <div class="col-lg-8">
                    <input type="text" class="form-control" id="nama_kecamatan" name="nama_kecamatan" placeholder="Nama Kecamatan">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-info" type="submit"> Simpan&nbsp;</button>
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
            <form class="form-horizontal" action="<?php echo base_url('utama/upkecamatan')?>" method="post" enctype="multipart/form-data" role="form">
              <div class="modal-body">
                <div class="form-group">
                  <label class="col-lg-3 col-sm-3 control-label">Nama Kecamatan</label>
                  <div class="col-lg-8">
                    <input type="hidden" class="form-control" id="id_kecamatan" name="id_kecamatan">
                    <input type="text" class="form-control" id="nama_kecamatan" name="nama_kecamatan" placeholder="Nama Kecamatan">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn btn-info" type="submit"> Update&nbsp;</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
              </div>
            </form>
          </div>  <!--end modal content-->
        </div>    <!--end modal dialog-->
      </div>      <!--end Mymodal-->


    </div>
    </section>
    <!-- <script src="<?php echo base_url();?>assets/js/jquery.js"></script> -->
    <script type="text/javascript">
      function editdata(id)
      {
        // alert(id);  
        $.ajax({
            url : '<?php echo base_url('utama/edtkec/') ?>'+id,
            //link menuju ke kontroller utama method akbar dengan mengirim parameter id
            type : 'GET',
            datatype : 'JSON',
            success : function(data) {
              //parameter data menangkap outout json yang dikirim dari server
              //proses yang dibawah ini berfungsi untuk konvert isi dari variable data kedalam format JSON.
              var hasil = JSON.parse(data);
              $('#myEdit input[name=nama_kecamatan]').val(hasil.respon.kecamatan[0].nama_kecamatan);
              $('#myEdit input[name=id_kecamatan]').val(hasil.respon.kecamatan[0].id_kecamatan);
              //ket :
              //pada baris pertama peritanh mencari edit text yang bernama no_dd dalam tag yang memiliki id myEdit
              //apabila edit text ditemukan maka akan di set value.nya dari json.
              
            }
          })
         $("#myEdit").modal("show");
      }

      $("#addata").click(function(){
        $("#myModal").modal("show");
      });

    </script>
