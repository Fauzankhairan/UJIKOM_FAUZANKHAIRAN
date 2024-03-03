<?php 
  include_once 'extends/topbar.php';
  include_once 'extends/sidebar.php';
  ?>
      <div class="content">
        <div class="row">
          <div class="col-md-8 m-auto">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Add Produk</h5>
              </div>
              <div class="card-body">
                <form action="../routers/R_produk.php?aksi=tambah" method="POST" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <input type="text" name="ProdukID" class="form-control" hidden >
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Nama Produk</label>
                        <input type="text" class="form-control"name="NamaProduk" id="NamaProduk" placeholder="Nama Produk" required>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Harga</label>
                        <input type="text" class="form-control" name="harga" id="Harga" placeholder="Harga" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Stok</label>
                        <input type="text" class="form-control" name="stok" id="Stok" placeholder="Stok" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <input type="file" name="thumbnail" id="thumbnail" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name="tambah" id="Tambah" class="btn btn-primary btn-round">Add Produk</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div
  <?php 
  include_once 'extends/footer.php';
  ?>
