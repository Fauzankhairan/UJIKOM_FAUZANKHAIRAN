<?php 
  include_once 'extends/topbar.php';
  include_once 'extends/sidebar.php';
  ?>
      <div class="content">
        <div class="row">
          <div class="col-md-8 m-auto">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Add Staff</h5>
              </div>
              <div class="card-body">
                <form action="../routers/R_login2.php?aksi=register" method="POST">
                  <div class="row">
                    <div class="col-md-12 ">
                      <div class="form-group">
                        <label>Nama Staff</label>
                        <input type="text" name="StaffID" id="StaffID" class="form-control" hidden>
                        <input type="text" name="NamaStaff" id="NamaStaff" class="form-control" placeholder="Nama Staff" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Role</label>
                        <input type="text" class="form-control" id="role" name="role" placeholder="Home Address" value="staff" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name="register" value="Register" id="register" class="btn btn-primary btn-round">Add Staff</button>
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
