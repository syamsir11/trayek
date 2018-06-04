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
			              <a class="edit btn btn-success" onclick="editdata('<?php echo $tampil->kode_jenis ?>')">
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


 <script type="text/javascript">
 	$('#addata').click(function(){
 		alert('hay');
 	})
 </script>
