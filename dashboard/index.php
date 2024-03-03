<?php 
  include_once 'extends/topbar.php';
  include_once 'extends/sidebar.php';

  include_once '../controllers/C_login.php';
  include_once '../controllers/C_transaksi.php';
  include_once '../controllers/C_produk.php';

  $customer = new C_login();
  $store = new C_penjualan();
  $produk = new C_produk();
  ?>
      <div class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Penjualan</h5>
              </div>
              <div class="card-body">
                <form action="../routers/R_penjualan.php?aksi=penjualan" method="POST">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                        <input type="text" class="form-control" name="PenjualanID" id="PenjualanID" hidden >
                        <label>Tanggal Penjualan</label>
                        <input type="date" class="form-control" name="TanggalPenjualan" id="TanggalPenjualan" required >
                        <input type="number" class="form-control" name="TotalHarga" id="TotalHarga" value="0" hidden>
                      </div>
                    </div>

                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Customer</label>
                        <select class="form-control" name="CustomerID" id="CustomerID">
                        <?php
                            foreach ($customer->tampil() as $a){
                            ?>
                            <option value="<?= $a->CustomerID ?>"><?= $a->nama ?></option>
                            <?php } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name="tambah" id="Tambah" class="btn btn-primary btn-round">Add Penjualan</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Transaksi</h5>
              </div>
              <div class="card-body">
                <form action="../routers/R_detail.php?aksi=detail" method="POST">
                  <div class="row">
                    <div class="col-md-12 pr-1">
                      <div class="form-group">
                        <input type="text" class="form-control" name="DetailID" id="DetailID" hidden >
                        <div class="form-group">
                        <label>Customer</label>
                        <select class="form-control" name="PenjualanID" id="PenjualanID">
                        <?php
                            foreach ($store->tampil() as $a){
                            ?>
                            <option value="<?= $a->PenjualanID  ?>"><?= $a->nama  ?></option>
                            <?php } ?>
                        </select>
                      </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md pr-1">
                      <div class="form-group">
                        <label>Nama Produk</label>
                        <select class="form-control" name="ProdukID" id="ProdukID">
                        <?php
                            foreach ($produk->tampil() as $a){
                            ?>
                            <option value="<?= $a->ProdukID  ?>"><?= $a->NamaProduk  ?></option>
                            <?php } ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>JumlahProduk</label>
                        <input type="number" class="form-control" name="JumlahProduk" id="JumlahProduk" placeholder="Jumlah Produk" required>
                        <input type="number" class="form-control" name="SubTotal" id="SubTotal" value="0.00" hidden>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name="tambah" value="Tambah" id="tambah" class="btn btn-primary btn-round">Add Detail</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
                            </div>

      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> List Penjualan </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>ID Penjualan</th>
                      <th>Tanggal Penjualan</th>
                      <th>Total Penjualan</th>
                      <th>ID Customer</th>
                      <th>Nama Customer</th>
                      <th>Aksi</th>
                    </thead>
                    <tbody>
                    <?php 
                       foreach ($store->tampil() as $b){
                      ?>
                      <tr>
                        <td><?= $b->PenjualanID ?></td>
                        <td><?= $b->TanggalPenjualan ?></td>
                        <td><?= $b->TotalHarga ?></td>
                        <td><?= $b->CustomerID ?></td>
                        <td><?= $b->nama ?></td>
                        <td>
                        <a onclick="return confirm('Apakah anda yakin untuk menghapus produk ini?')" href="../routers/R_penjualan.php?PenjualanID=<?= $b->PenjualanID ?>&aksi=hapus" class="btn btn-primary btn-round">Hapus</a>
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
      <
  <?php 
  include_once 'extends/footer.php';
  ?>
