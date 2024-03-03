<?php 
  include_once 'extends/topbar.php';
  include_once 'extends/sidebar.php';

  include_once '../controllers/C_login2.php';

  $login2 = new C_login2();
  ?>
      <!-- End Navbar -->
      <<div class="content">
        <div class="row">
          <div class="col-md-12">
          <a href="add_staff.php" class="btn btn-primary btn-round">Tambah</a>
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Data Staff </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>ID Staff</th>
                      <th>Nama Staff</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Aksi</th>
                    </thead>
                    
                    <tbody>
                    <?php 
                    if (empty($login2->tampil())){ ?>
                    <tr>
                    <td colspan="10">
                        <h1>
                            <center>Tidak ada Data</center>
                        </h1>
                    </td>
                </tr>
                <?php }else{
                       foreach ($login2->tampil() as $b){
                      ?>
                      <tr>
                        <td><?= $b->StaffID ?></td>
                        <td><?= $b->NamaStaff ?></td>
                        <td><?= $b->email ?></td>
                        <td>******</td>

                        <td>
                        <a href="update_staff.php?StaffID=<?= $b->StaffID ?>" class="btn btn-primary btn-round">Update</a>
                        <a onclick="return confirm('Apakah anda yakin untuk menghapus staff ini?')" href="../routers/R_login2.php?StaffID=<?= $b->StaffID ?>&aksi=hapus" class="btn btn-primary btn-round">Hapus</a>
                        </td>
                      </tr>
                      <?php }}?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  <?php 
  include_once 'extends/footer.php';
  ?>
