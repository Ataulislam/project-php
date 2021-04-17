<?php
require 'inc/header.php';
require_once '../db.php';
$id = $_SESSION['id'] ;
$select = "SELECT * FROM users WHERE id= $id";
$query = mysqli_query($db, $select);
$after_assoc = mysqli_fetch_assoc($query);
?>

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Edit User</span>
      </nav>
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Edit Profile</h5>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <div class="form-layout">
          <form action="password-update.php" method="post">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Current Password: <span class="tx-danger">*</span></label>
                  <input type="password" class="form-control NameErr" name="current_password" id="current_password" aria-describedby="emailHelp" placeholder="Enter current password">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="new_password" class="form-control-label">New Password: <span class="tx-danger">*</span></label>
                  <input type="password" class="form-control" name="new_password" id="new_password" placeholder="Enter New Password">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="confirm_password" class="form-control-label">Confirm Password  <span class="tx-danger">*</span></label>
                  <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Enter Confirm Password">
                </div>
              </div><!-- col-4 -->
              
              
            </div><!-- row -->

            <div class="form-layout-footer">
              <input style="cursor:pointer" type="submit" class="btn btn-info mg-r-5" value="Submit Form"></input>
            </div><!-- form-layout-footer -->
          </form>
          </div><!-- form-layout -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->


<?php
 require 'inc/footer.php';
?>


