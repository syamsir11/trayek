<div class="row-fluid">
  <div class="block">         <!-- block -->
    <div class="navbar navbar-inner block-header">
      <div class="muted pull-left">Data User Ijin Trayek</div>
      <div class="pull-right">
          <button class="btn" id="addata">Tambah<i class=icon-plus></i></button>
      </div>
    </div>
    <div class="block-content collapse in">
      <table class="table table-striped">
      <thead>
        <tr>
          <th><i class="icon_pin"></i>No</th>
          <th><i class="icon_pin"></i>Nama</th>
          <th><i class="icon_pin"></i>Email</th>
          <th><i class="icon_pin"></i>user</th>
          <th><i class="icon_cogs"></i> Action</th>
        </tr>
      </thead>
        <?php
          $no=1;
          foreach ($data['user'] as $tampil){
        ?>
        <tbody>
        <tr>
          <td><?php echo $no?></td>
          <td><?php echo $tampil->nama?></td>
          <td><?php echo $tampil->email?></td>
          <td><?php echo $tampil->username?></td>
          <td>
            <?php
              $accountId = $tampil->id;
              $password="/z3m-".base64_encode($accountId)."run";
              $id=base64_encode($accountId).$password;
            ?>
            <div class="btn-group">

              <!-- menambahkan function ubah untuk melakukan get data dari server-->
              <a class="edit btn btn-success" title="Add this item" id="<?php echo $tampil->id?>" onclick="editdata('<?php echo $tampil->id ?>')">
               <i class=icon-edit></i>
              </a>
              <a class="btn btn-danger" href="<?php echo base_url('utama/hapusken/'); echo $id?>"><i class=icon-trash></i></a>
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