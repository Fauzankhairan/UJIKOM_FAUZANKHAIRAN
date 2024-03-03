<?php 
  include_once 'extends/topbar.php';
  include_once 'extends/sidebar.php';

  include_once '../controllers/C_produk.php';

  $produk = new C_produk();
?>
      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <a href="add_produk.php" class="btn btn-primary btn-round">Tambah</a>
            <div class="card">

              <div class="card-header">
                <h4 class="card-title">Data Produk</h4>

              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>ID Produk</th>
                      <th>Nama Produk</th>
                      <th>Harga</th>
                      <th>Stok</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                    <?php 
                    if (empty($produk->tampil())){ ?>
                    <tr>
                      <td colspan="10">
                        <h1>
                            <center>Tidak ada Data</center>
                        </h1>
                      </td>
                     </tr>
                    <?php } else {
                       foreach ($produk->tampil() as $b){
                      ?>
                      <tr>
                        <td><?= $b->ProdukID ?></td>
                        <td><?= $b->NamaProduk ?></td>
                        <td><?= $b->harga ?></td>
                        <td><?= $b->stok ?></td>
                        <td>
                        <a href="update_barang.php?ProdukID=<?= $b->ProdukID ?>" class="btn btn-primary btn-round">Update</a>
                        <a onclick="return confirm('Apakah anda yakin untuk menghapus produk ini?')" href="../routers/R_produk.php?ProdukID=<?= $b->ProdukID ?>&aksi=hapus" class="btn btn-primary btn-round">Hapus</a>
                        </td>
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
