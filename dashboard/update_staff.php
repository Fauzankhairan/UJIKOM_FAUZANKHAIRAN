<?php 
  include_once 'extends/topbar.php';
  include_once 'extends/sidebar.php';

  $staff = new C_login2();
  ?>
      <div class="content">
        <div class="row">
          <div class="col-md-8 m-auto">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Edit Staff</h5>
              </div>
              <div class="card-body">
                <form action="../routers/R_login2.php?aksi=update" method="POST">
                <?php
                     foreach ($staff->edit($_GET['StaffID']) as $b){
                 ?>
                  <div class="row">
                    <div class="col-md-6 pr-1 ">
                      <div class="form-group">
                        <label>ID Staff</label>
                        <input type="text" name="StaffID" id="StaffID" class="form-control" value="<?= $b->StaffID ?>" readonly>
                      </div>
                    </div>
                    <div class="col-md-6 pr-1 ">
                      <div class="form-group">
                        <label>Nama Staff</label>
                        <input type="text" name="NamaStaff" id="NamaStaff" class="form-control" value="<?= $b->NamaStaff ?>" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="<?= $b->email ?>" required>
                      </div>
                    </div>
                    <div class="col-md-6 pl-1">
                      <div class="form-group">
                        <label">Passwords</label>
                        <input type="password" name="password" id="password" class="form-control" value="<?= $b->password ?>" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Role</label>
                        <input type="text" class="form-control" id="role" name="role" value="<?= $b->role?>" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name="update" value="Update" id="update" class="btn btn-primary btn-round">Update Staff</button>
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
