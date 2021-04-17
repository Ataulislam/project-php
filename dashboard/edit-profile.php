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
          <form action="profile-update.php" method="post" enctype="multipart/form-data">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                  <input type="text" value="<?php echo $after_assoc['name'] ?>" class="form-control NameErr" name="name" id="exampleInpuName" aria-describedby="emailHelp" placeholder="Enter Name">
                </div>
              </div> 
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                  <input type="email" value="<?php echo $after_assoc['email'] ?>" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
              </div>  
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="profile_image" class="form-control-label">Profile Image: <span class="tx-danger">*</span></label>
                  <input type="file" class="form-control" name="profile_image" id="profile_image" onchange="document.getElementById('ataul').src = window.URL.createObjectURL(this.files[0])">
                </div>
              </div><!-- col-4-->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Profile image preview: <span class="tx-danger">*</span></label>
                  <img id="ataul" width='150' >
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


