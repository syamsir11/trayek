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
          <th><i class="icon_pin"></i>No Plat</th>
          <th><i class="icon_pin"></i>Kode Pemilik</th>
          <th><i class="icon_pin"></i>No Mesin</th>
          <th><i class="icon_pin"></i>jenis Kendaraan</th>
          <th><i class="icon_pin"></i>Tahun Buat</th>
          <th><i class="icon_pin"></i>Uji Kir</th>
          <th><i class="icon_pin"></i>Kode Rute</th>
          <th><i class="icon_pin"></i>Daya Angkut</th>
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
          <td><?php echo $tampil->no_plat?></td>
          <td><?php echo $tampil->kode_pemilik?></td>
          <td><?php echo $tampil->no_mesin?></td>
          <td><?php echo $tampil->jenis_kendaraan?></td>
          <td><?php echo $tampil->thn_buat?></td>
          <td><?php echo $tampil->uji_kir?></td>
          <td><?php echo $tampil->kode_rute?></td>
          <td><?php echo $tampil->daya_angkut?></td>
          <td>
            <div class="btn-group">

              <!-- menambahkan function ubah untuk melakukan get data dari server-->
              <a class="edit btn btn-success" onclick="editdata('<?php echo $tampil->no_plat ?>')">
               <i class=icon-edit></i>
              </a>
              <a class="delken btn btn-danger" onclick="hapusdata('<?php echo $tampil->no_plat ?>')">
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
                    <input type="text" class="form-control" name="no_plat" placeholder="No DD Kendaraan" required="">
                  </div>
                </div>
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Kode Pemilik</label>
                  <div class="controls">
                    <input type="text" class="form-control" name="kode_pemilik" placeholder="No KTP / SIM" required="">
                  </div>
                </div>  
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">NO Mesin</label>
                  <div class="controls">
                    <input type="text" class="form-control" name="no_mesin" placeholder="NO Mesin" required="">
                  </div>
                </div>
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Jenis Kendaraan</label>
                  <div class="controls">
                    <select name="jenis_kendaraan">
                      <option value="" selected="">Pilih Jenis Kendaraan</option>
                      <option>DD</option>
                    </select>
                  </div>
                </div>
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Tahun Buat</label>
                  <div class="controls">
                    <input type="text" class="form-control" name="tahun_buat" placeholder="Tahun Buat">
                  </div>
                </div>       <!-- controll Group -->
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Uji Kir</label>
                  <div class="controls">
                    <input type="text" class="form-control" name="uji_kir" placeholder="Tanggal Uji Kir" required="">
                  </div>
                </div>       <!-- controll Group -->
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Kode Rute</label>
                  <div class="controls">
                    <input type="text" class="form-control" name="kode_rute" placeholder="Kode Rute" required="">
                  </div>
                </div>       <!-- controll Group -->
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Daya Angkut</label>
                  <div class="controls">
                    <input type="text" class="form-control" name="daya_angkut" placeholder="Daya Angkut">
                  </div>
                </div>       <!-- controll Group -->
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
                    <input type="text" class="form-control" name="no_plat" placeholder="No DD Kendaraan" required="">
                  </div>
                </div>
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Kode Pemilik</label>
                  <div class="controls">
                    <input type="text" class="form-control" name="kode_pemilik" placeholder="No KTP / SIM" required="">
                  </div>
                </div>  
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">NO Mesin</label>
                  <div class="controls">
                    <input type="text" class="form-control" name="no_mesin" placeholder="NO Mesin" required="">
                  </div>
                </div>
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Jenis Kendaraan</label>
                  <div class="controls">
                    <select name="jenis_kendaraan">
                      <option value="" selected="">Pilih Jenis Kendaraan</option>
                      <option>DD</option>
                    </select>
                  </div>
                </div>
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Tahun Buat</label>
                  <div class="controls">
                    <input type="text" class="form-control" name="tahun_buat" placeholder="Tahun Buat">
                  </div>
                </div>       <!-- controll Group -->
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Uji Kir</label>
                  <div class="controls">
                    <input type="text" class="form-control" name="uji_kir" placeholder="Tanggal Uji Kir" required="">
                  </div>
                </div>       <!-- controll Group -->
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Kode Rute</label>
                  <div class="controls">
                    <input type="text" class="form-control" name="kode_rute" placeholder="Kode Rute" required="">
                  </div>
                </div>       <!-- controll Group -->
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Daya Angkut</label>
                  <div class="controls">
                    <input type="text" class="form-control" name="daya_angkut" placeholder="Daya Angkut">
                  </div>
                </div>       <!-- controll Group -->


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

<script type="text/javascript">
  $("#addata").click(function()
  {
    $("#myModal").modal("show");
  })
  $('#addkendaraan').click(function(){
    var data = $('.form-add').serialize();
    $.ajax(
    {
      url: '<?php echo base_url('kendaraan/'.$this->trayek->encode('tkendaraan')) ?>',
      type: 'POST',
      datatype: 'JSON',
      data: data,
      success : function() 
        {
          $('#myModal').modal("hide");
              
        }
    })
  })


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