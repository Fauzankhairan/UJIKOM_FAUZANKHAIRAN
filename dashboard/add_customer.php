<?php 
  include_once 'extends/topbar.php';
  include_once 'extends/sidebar.php';
  ?>
      <div class="content">
        <div class="row">
          <div class="col-md-10 m-auto">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Add Customer</h5>
              </div>
              <div class="card-body">
                <form action="../routers/R_login.php?aksi=register" method="POST">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Nama Customer</label>
                        <input type="text" name="CustomerID" id="CustomerID" class="form-control" hidden>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Customer" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Nomor Telepon</label>
                        <input type="number" name="NomorTelepon" id="NomorTelepon" class="form-control" placeholder="Nomor Telepon" required>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name="register" value="Register" id="register" class="btn btn-primary btn-round">Add Customer</button>
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
