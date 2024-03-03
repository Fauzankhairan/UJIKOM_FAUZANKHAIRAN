<?php 
  include_once 'extends/topbar.php';
  include_once 'extends/sidebar.php';

  include_once '../controllers/C_produk.php';

    $produk = new C_produk();
  ?>
      <div class="content">
        <div class="row">
          <div class="col-md-8 m-auto">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Produk</h5>
              </div>
              <div class="card-body">
                <form action="../routers/R_produk.php?aksi=update" method="POST" enctype="multipart/form-data">
                <?php
                     foreach ($produk->edit($_GET['ProdukID']) as $b){
                 ?>
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>ID Produk (disabled)</label>
                        <input type="text" class="form-control" name="ProdukID" id="ProdukID" readonly value="<?= $b->ProdukID ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" name="NamaProduk" id="NamaProduk" class="form-control"  value="<?= $b->NamaProduk ?>" required>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" id="harga" class="form-control" value="<?= $b->harga ?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Stok</label>
                        <input type="text" name="stok" id="stok" class="form-control"  value="<?= $b->stok ?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <input type="file" name="thumbnail" id="thumbnail" class="form-control"  value="<?= $b->thumbnail ?>" required>
                    </div>
                  </div>
                  <div class="row">
                      <div class="update ml-auto mr-auto">
                          <button type="submit" value="Update" id="tambah" name="update" class="btn btn-primary btn-round">Update Produk</button>
                        </div>
                    </div>
                <?php } ?>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div
  <?php 
  include_once 'extends/footer.php';
  ?>
