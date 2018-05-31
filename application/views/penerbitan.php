 <form class="form-horizontal" action="<?php echo base_url('utama/tkendaraan')?>" method="post" enctype="multipart/form-data" role="form">

	<div class="form-group">
		<label class="col-lg-3 col-sm-3 control-label">Nama</label>
		<div class="col-lg-8">
			<input type="text" class="form-control" name="nama" placeholder="Nama">
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-sm-3 control-label">Pekerjaan</label>
		<div class="col-lg-8">
			<input type="text" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-sm-3 control-label">Alamat Rumah</label>
		<div class="col-lg-8">
			<input type="text" class="form-control" name="alamat" placeholder="Alamat Rumah">
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-sm-3 control-label">Jenis Ijin Trayek</label>
		<div class="col-lg-8">
			<select class="form-control" name="jenisijin">
				<option value="baru">Permohonan Ijin Baru</option>
				<option value="perpanjangan">Perpanjangan Ijin</option>
				<option value="perubahan">Perubahan Ijin</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-sm-3 control-label">Nama Perusahaan</label>
		<div class="col-lg-8">
			<input type="text" class="form-control" name="nperusahaan" placeholder="Nama Perusahaan">
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-sm-3 control-label">Nomor Kendaraan</label>
		<div class="col-lg-8">
			<input type="text" class="form-control" name="nokendaraan" placeholder="Nomor Kendaraan">
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-sm-3 control-label">Nomor Uji</label>
		<div class="col-lg-8">
			<input type="text" class="form-control" name="nomoruji" placeholder="Nomor Uji Kendaraan">
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-sm-3 control-label">Merek kendaraan / Tahun Pembuatan</label>
		<div class="col-lg-8">
			<input type="text" class="form-control" name="merek" placeholder="Merek Kendaraan / Tahun Pembuatan">
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-sm-3 control-label">Daya Angkut</label>
		<div class="col-lg-8">
			<input type="text" class="form-control" name="daya" placeholder="Daya angkut">
		</div>
	</div>
	<div class="form-group">
		<label class="col-lg-3 col-sm-3 control-label">Jenis Kendaraan</label>
		<div class="col-lg-8">
			<input type="text" class="form-control" name="jeniskendaraan" placeholder="Jenis Kendaraan">
		</div>
	</div>

</form>