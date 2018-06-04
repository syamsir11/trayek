
<div class="row-fluid">
  <div class="block">         <!-- block -->
    <div class="navbar navbar-inner block-header">
      <div class="muted pull-left">Data Rute Kendaraan Kabupaten Bulukumba</div>
      <div class="pull-right">
          <button class="btn" id="addata">Tambah<i class=icon-plus></i></button>
      </div>
    </div>
    <div class="block-content collapse in">
      <table class="table table-striped">
        <thead>
          <tr>
            <th><i class="icon_pin"></i>Kode Rute</th>
            <th><i class="icon_pin"></i>Tujuan</th>
            <th><i class="icon_pin"></i>Rute</th>
            <th><i class="icon_cogs"></i> Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $no=1;
            foreach ($data['jalur'] as $tampil) {
          ?>
          <tr id="<?= $tampil->kode_rute ?>">
            <td><?= $tampil->kode_rute?></td>
            <td><?= $tampil->tujuan?></td>
            <td><?= $tampil->rute?></td>
            <td>
              <div class="btn-group">
                <a class="edit btn btn-success" onclick="editdata('<?php echo $this->trayek->encode('ubah/'.$tampil->kode_rute) ?>')">
                 <i class=icon-edit></i>
                </a>
                <a class="delken btn btn-danger" onclick="hapusdata('<?php echo $this->trayek->encode('hapus/'.$tampil->kode_rute) ?>')">
                  <i class=icon-trash></i>
                </a>
              </div>
            </td>
          </tr>
          <?php
           
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
          <h4 class="modal-title">Tambah Data - Rute</h4>
      </div>
      <form id="form" class="form-horizontal form-add" method="post" >
        <div class="modal-body"> 
          <div class="control-group">
            <label class="col-lg-3 col-sm-3 control-label">Kode Rute</label>
            <div class="controls">
              <input type="text" class="form-control" name="kode_rute" placeholder="Kode Rute">
            </div>
          </div>       <!-- controll Group -->
          <div class="control-group">
            <label class="col-lg-3 col-sm-3 control-label">Tujuan</label>
            <div class="controls">
              <input type="text" class="form-control" name="tujuan" placeholder="Tujuan" >
            </div>
          </div> 
          <div class="control-group">
            <label class="col-lg-3 col-sm-3 control-label">Rute</label>
            <div class="controls">
              <input id="rute_noob" type="text" class="form-control" name="rute[]" placeholder="Rute">
              <div><button type="button" id="addJalur">+</button></div>
            </div>
          </div>       <!-- controll Group -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" id="simpan"> Simpan&nbsp;</button>
          <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
        </div>
      </form>
    </div>  <!--end modal content-->
  </div>    <!--end modal dialog-->
</div>      <!--end Mymodal-->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="EditModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
          <h4 class="modal-title">Ubah Data - Rute</h4>
      </div>
      <div id="body_">
       
      </div>
    </div>  <!--end modal content-->
  </div>    <!--end modal dialog-->
</div>      <!--end Mymodal-->
<script type="text/javascript">
  function editdata(key) {
     $('#EditModal').modal('show');
     $('#body_').html("<img id='animated' src='<?= base_url('assets/images/loading.gif') ?>'>");
     $('#body_').load('<?= base_url('jalur/') ?>'+key,function(par1,par2,par3) {
       $('#save_change').click(function() {
          swal({
            title: "Perhatian",
            text: "Anda yakin data sudah benar ? ",
            type: "warning",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true
          },function() {
            $.ajax({
              url : '<?= base_url('jalur/'.$this->trayek->encode('update')) ?>',
              type : 'POST',
              data : $('#form_edit').serialize(),
              datatype : 'JSON',
              success : function(data) {
                var a = JSON.parse(data);
                if (a.respon[0].execute) {
                  $('#'+a.respon[0].key).remove();
                  $('#EditModal').modal('hide');
                  makeTbl(a.respon[0].message,a.respon[0].key_delete,a.respon[0].key_edit);
                }
              },
              error : function(d,a,t) {
                
              }
            })
          })
       });
       $('#newJalur').click(function() {
          $('#controls #newJalur').before('<input type="text" id="rute_" class="form-control" name="rute[]" placeholder="Rute">');
       })
     })
  }
  function hapusdata(key) {
    swal({
        title: "Perhatian",
        text: "Anda yakin ingin hapus data ? ",
        type: "warning",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true
      },function() {
          $.ajax({
            url : '<?= base_url('jalur/')?>'+key,
            type : 'GET',
            datatype : 'JSON',
            success : function(data) {
              var a = JSON.parse(data);
              if (a.respon[0].execute) {
                swal('Sukses',a.respon[0].message,'success');
                $('#'+a.respon[0].key).remove();
                makeTbl(a.respon[0].message,a.respon[0].key_delete,a.respon[0].key_edit);
                $('#EditModal').modal('hide');
                $('#form_edit')[0].reset();
              }
              else{
                swal('Error',a.respon[0].message,'error');
              }
            },
            error : function(data) {
              alert(data);
            }
          })
      })
  }
  $(document).ready(function() {
    $('#addata').click(function() {
      $('#myModal').modal('show');
    });

    $('#addJalur').click(function() {
      $('div.controls:eq(2) #addJalur').before('<input type="text" id="rute_" class="form-control" name="rute[]" placeholder="Rute">');
    });

    $('#simpan').click(function() {
      swal({
        title: "Perhatian",
        text: "Anda yakin data sudah benar ? ",
        type: "warning",
        showCancelButton: true,
        closeOnConfirm: false,
        showLoaderOnConfirm: true
      },function() {
        $.ajax({
          url : '<?= base_url('jalur/'.$this->trayek->encode('simpan')) ?>',
          type : 'POST',
          data : $('#form').serialize(),
          datatype : 'JSON',
          success : function(data) {
            var a = JSON.parse(data);
            if (a.respon[0].execute) {
               $('#myModal').modal('hide');
              $('#form')[0].reset();
              makeTbl(a.respon[0].message,a.respon[0].key_delete,a.respon[0].key_edit);
            }
            else{
              swal('Error',a.respon[0].message,'error');
            }
          },
          error : function(data) {
            swal('Error',data.responText,'error');
          }
        })
      })
    })
  });
  
  function makeTbl(param,key_del,key_edit) {
    swal('Sukse','Data tersimpan','success');
     $('tbody').prepend('<tr id='+param.kode_rute+'><td>'+param.kode_rute+'</td><td>'+param.tujuan+'</td><td>'+param.rute+'</td><td><div class="btn-group"><a class="edit btn btn-success" onclick="editdata('+"'"+key_edit+"'"+')"><i class=icon-edit></i></a><a class="delken btn btn-danger" onclick="hapusdata('+"'"+key_del+"'"+')"><i class=icon-trash></i></a></div></td></tr>');
  }
</script>

