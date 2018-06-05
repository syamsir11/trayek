<div class="row-fluid">
  <div class="block">         <!-- block -->
	    <div class="navbar navbar-inner block-header">
	     	<div class="muted pull-left">Data Jenis Kendaraan Pada Kabupaten Bulukumba</div>
	     	<div class="pull-right">
	         	<button class="btn" id="addata">Tambah<i class=icon-plus></i></button>
	      	</div>
	    </div>
	    <div class="block-content collapse in">
	     	<table class="table table-striped">
	     	<thead>
		        <tr>
		          <th><i class="icon_pin"></i>No</th>
		          <th><i class="icon_pin"></i>Kode Jenis</th>
		          <th><i class="icon_pin"></i>Jenis Kendaraan</th>
		          <th><i class="icon_pin"></i>Bahan Bakar</th>
		          <th><i class="icon_cogs"></i> Action</th>
		        </tr>
	      	</thead>
	        <?php
	          $no=1;
	          foreach ($data['jkendaraan'] as $tampil){
	        ?>
	        <tbody>
	        	<tr>
		          	<td><?php echo $no?></td>
		          	<td><?php echo $tampil->kode_jenis?></td>
		          	<td><?php echo $tampil->jenis?></td>
		          	<td><?php echo $tampil->bbm?></td>
		          	<td>
	            		<div class="btn-group">

			              <!-- menambahkan function ubah untuk melakukan get data dari server-->
			              <a class="edit btn btn-success" onclick="edit_jenis_kendaraan('<?php echo $tampil->kode_jenis ?>')">
			               <i class=icon-edit></i>
			              </a>
			              <a class="delken btn btn-danger" onclick="hapusdata('<?php echo $tampil->kode_jenis ?>')">
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
   		</div>
	</div>
 </div>
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
                  <label class="col-lg-3 col-sm-3 control-label">Kode Jenis</label>
                  <div class="controls">
                    <input type="text" class="form-control" name="kode_jenis" placeholder="Kode jenis Kendaraan" required="">
                  </div>
                </div>
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Jenis Kendaraan</label>
                  <div class="controls">
                    <input type="text" class="form-control" name="jenis_kendaraan" placeholder="Jenis Kendaraan" required="">
                  </div>
                </div>  
                <div class="control-group">
                  <label class="col-lg-3 col-sm-3 control-label">Bahan Bakar</label>
                  <div class="controls">
                  	<select name="bahan_bakar" required="">
                  		<option value="" selected="">Pilih jenis Bahan Bakar</option>
                  		<option value="solar">Solar</option>
                  		<option value="bensin">Bensin</option>
                  		<option value="pertamax">Pertamax</option>
                  		<option value="premium">Premium</option>
                  		<option value="pertalite">Pertalite</option>
                  	</select>
                  </div>
                </div>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info" id="add_jenis_kendaraan"> Simpan&nbsp;</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
              </div>
            </form>
          </div>  <!--end modal content-->
        </div>    <!--end modal dialog-->
      </div>      <!--end Mymodal-->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-2" id="myEdit" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Edit Data</h4>
            </div>
            <form class="form-horizontal form-update" method="post" enctype="multipart/form-data">
            <div class="modal-body">
              <div class="control-group">      <!-- control-group -->
               	<label class="col-lg-3 col-sm-3 control-label">Kode Jenis</label>
                	<div class="controls">
                  	<input type="text" class="form-control" name="kode_jenis" placeholder="No DD Kendaraan" readonly="">
                	</div>
              </div>                            <!-- End control-group -->
              <div class="control-group">      <!-- control-group -->
                <label class="col-lg-3 col-sm-3 control-label">Jenis Kendaraan</label>
                  <div class="controls">
                    <input type="text" class="form-control" name="jenis" placeholder="No DD Kendaraan" required="">
                  </div>
              </div>                            <!-- End control-group -->
              <div class="control-group">      <!-- control-group -->
                <label class="col-lg-3 col-sm-3 control-label">Jenis Bahan Bakar</label>
                  <div class="controls">
                   <input type="text" name="bbm">
                  </div>
              </div>                            <!-- End control-group -->
            </div>
            <div class="modal-footer">
                <button class="btn btn-info" id="upkendaraan" data-dismiss="modal"> Update&nbsp;</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
            </div>
            </form>
        </div>  <!--end modal content-->
    </div>    <!--end modal dialog-->
</div>      <!--end Mymodal-->

 <script type="text/javascript">
 	$('#addata').click(function(){
 		$('#myModal').modal('show');
 	})
 	$('#add_jenis_kendaraan').click(function(){
 		var data = $('.form-add').serialize();
	    $.ajax(
	    {
	      url: '<?php echo base_url('c_jkendaraan/'.$this->trayek->encode('tambah_jkendaraan')) ?>',
	      type: 'POST',
	      datatype: 'JSON',
	      data: data,
	      success : function() 
	        {
	        	$('#myModal').modal("hide");
	        	swal('Success','ADD Jenis','success');
	        	go_jenis_kendaraan();
	        }
	    })
 	})
  $('#upkendaraan').click(function() {
    var data = $('.form-update').serialize();
    $.ajax({
      url : '<?php echo base_url('c_jkendaraan/'.$this->trayek->encode('up_jenis_kendaraan'))?>',
      type:'POST',
      datatype:'JSON',
      data:data,
      success:function(data) 
      {
        swal('Success','Update Suksess','success');
        go_jenis_kendaraan();
      }
    })
  })
 	function edit_jenis_kendaraan(param) {
 		$.ajax({
 			url :'<?php echo base_url('c_jkendaraan/'.$this->trayek->encode('edit_jenis'));?>',
 			type:'POST',
 			datatype:'JSON',
 			data:{id:param},
 			success:function(data) 
   			{
   				var hasil = JSON.parse(data);
   				$('#myEdit input[name=kode_jenis]').val(hasil.jenis_ken.jkendaraan[0].kode_jenis);	
          $('#myEdit input[name=jenis]').val(hasil.jenis_ken.jkendaraan[0].jenis);  
          $('#myEdit input[name=bbm]').val(hasil.jenis_ken.jkendaraan[0].bbm); 
   			}
 		})
    $('#myEdit').modal('show');
 	}
  function hapusdata(param) {
    $.ajax({
      url:'<?php echo base_url('c_jkendaraan/'.$this->trayek->encode('hapusdata'));?>',
      type:'POST',
      datatype:'JSON',
      data:{id:param},
      success:function(data) 
      {
        swal("Sukses","Hapus Data","success");
        go_jenis_kendaraan();
      }
    })
  }

 	function go_jenis_kendaraan()
  {
    $('#coba').load('<?= base_url('c_jkendaraan/'.$this->trayek->encode('jkendaraan')) ?>',function(one,two,tree)
    {
      if (tree.status != 200)
      {
        $('#coba').html("<div class='row-fluid'><div class='block'><div class='alert alert-block alert-danger'>Halaman tidak dapat dimuat</div></div></div>")
      }
    });
    history.pushState('..','..','<?= base_url('c_jkendaraan/'.$this->trayek->encode('jkendaraan'));?>')
  }
 </script>
