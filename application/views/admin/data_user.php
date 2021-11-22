<div class="container">
    <?php if($this->session->flashdata('flash')) : ?>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                Data User Berhasil di <strong><?php echo $this->session->flashdata('flash'); ?></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>
  <h4>DAFTAR USER</h4>
  <table class="table table-bordered">
    <tr>
      <th>NO</th>
      <th>NAMA LENGKAP</th>
      <th>EMAIL</th>
      <th>USERNAME</th>
      <th>LEVEL</th>
      <th>STATUS</th>
      <th class="text-center" colspan="2">AKSI</th>
    </tr> <?php
    $no=1;
     foreach($user as $usr) : ?> <tr>
      <td> <?php echo $no++ ?> </td>
      <td> <?= $usr['nama'] ?> </td>
      <td> <?= $usr['email'] ?> </td>
      <td> <?= $usr['username'] ?> </td>
      <td> <?= $usr['role_id'] ?></td>
      <td><span class="badge bg-success"><i class="fab fa-centercode"></i> Aktif</span>
</td>
            <td>
        <div class="btn btn-primary btn-sm">
          <i class="fas fa-edit"></i>
        </div>
      </td>
         <td> <?php echo anchor('admin/data_user/hapus/'.$usr['id'],'
        <div class="btn btn-danger btn-sm">
          <i class="fas fa-trash"></i>
        </div>') ?> </td>
    </tr> <?php endforeach; ?>
  </table>
</div>