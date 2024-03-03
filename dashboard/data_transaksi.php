<?php 
  include_once 'extends/topbar.php';
  include_once 'extends/sidebar.php';

  include_once '../controllers/C_detail.php';

  $detail = new C_detail();

  
  ?>
      <!-- End Navbar -->
      <<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Data Transaksi </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>ID Transaksi</th>
                      <th>ID Produk</th>
                      <th>Nama Produk</th>
                      <th>Harga Produk</th>
                      <th>Jumlah Produk</th>
                      <th>Sub Total</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                    <?php 
                       foreach ($detail->tampil() as $b){

                        $SubTotal = $b->harga * $b->JumlahProduk;
                      ?>
                      <tr>
                        <td><?= $b->DetailID ?></td>
                        <td><?= $b->ProdukID ?></td>
                        <td><?= $b->NamaProduk ?></td>
                        <td><?= $b->harga ?></td>
                        <td><?= $b->JumlahProduk ?></td>
                        <td><?= $SubTotal; ?></td>
                        <td>
                        <a onclick="return confirm('Apakah anda yakin untuk menghapus data ini?')" href="../routers/R_detail.php?DetailID=<?= $b->DetailID ?>&aksi=hapus" class="btn btn-primary btn-round">Hapus</a>
                        </td>
                      </tr>
                      <?php } ?>
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
