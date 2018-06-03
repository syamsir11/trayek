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
            <th><i class="icon_pin"></i>No</th>
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
          <tr>
            <td><?= $no?></td>
            <td><?= $tampil->kode_rute?></td>
            <td><?= $tampil->tujuan?></td>
            <td><?= $tampil->rute?></td>
            <td>
              <div class="btn-group">
                <a class="edit btn btn-success" onclick="editdata('<?php echo $tampil->kode_rute ?>')">
                 <i class=icon-edit></i>
                </a>
                <a class="delken btn btn-danger" onclick="hapusdata('<?php echo $tampil->kode_rute ?>')">
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

