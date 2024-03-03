<?php 
  include_once 'extends/topbar.php';
  include_once 'extends/sidebar.php';

  include_once '../controllers/C_login.php';

  $customer = new C_login();
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">zz
          <a href="add_customer.php" class="btn btn-primary btn-round">Tambah</a>

            <div class="card">

              <div class="card-header">
                <h4 class="card-title">Data Customer</h4>

              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>ID Customer</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Nomor Telepon</th>
                    </thead>
                    <tbody>
                    <?php 
                    if (empty($customer->tampil())){ ?>
                    <tr>
                      <td colspan="10">
                        <h1>
                            <center>Tidak ada Data</center>
                        </h1>
                      </td>
                     </tr>
                    <?php } else {
                       foreach ($customer->tampil() as $b){
                      ?>
                      <tr>
                        <td><?= $b->CustomerID ?></td>
                        <td><?= $b->nama ?></td>
                        <td><?= $b->alamat ?></td>
                        <td><?= $b->NomorTelepon ?></td>
                      </tr>
                      <?php }} ?>
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
