<div class="row-fluid">
  <div class="block">         <!-- block -->
    <div class="navbar navbar-inner block-header">
      <div class="muted pull-left">Data User Izin Trayek</div>
      <div class="pull-right">
          <button class="btn" id="addata">Tambah<i class=icon-plus></i></button>
      </div>
    </div>
    <div class="block-content collapse in">
      <table class="table table-striped">
        <thead>
          <tr>
            <th><i class="icon_pin"></i>No</th>
            <th><i class="icon_pin"></i>Username</th>
            <th><i class="icon_pin"></i>Level</th>
            <th><i class="icon_pin"></i>Akses</th>
            <th><i class="icon_pin"></i>Last Login</th>
            <th><i class="icon_cogs"></i> Action</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            $no=1;
            foreach ($data['akunt'] as $tampil) {
          ?>
          <tr>
            <td><?= $no?></td>
            <td><?= $tampil->username?></td>
            <td><?= $tampil->level?></td>
            <td><?= $tampil->akses?></td>
            <td><?= $tampil->last_login?></td>
            <td>
            <div class="btn-group">

              <!-- menambahkan function ubah untuk melakukan get data dari server-->
              <a class="edit btn btn-success" onclick="editdata('<?php echo $tampil->username ?>')">
               <i class=icon-edit></i>
              </a>
              <a class="delken btn btn-danger" onclick="hapusdata('<?php echo $tampil->username ?>')">
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
  