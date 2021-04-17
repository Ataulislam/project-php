<?php
require 'inc/header.php';

$select_count = "SELECT * FROM settings ORDER BY id DESC limit 1"; 
$query_count = mysqli_query($db, $select_count);
$assoc = mysqli_fetch_assoc($query_count);
?>
?>
 
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Edit settings</span>
      </nav>
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Edit settings</h5>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <div class="form-layout">
          <form action="setting-post.php" method="post" >
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Copyright: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control NameErr" name="copyright" id="copyright" aria-describedby="emailHelp" placeholder="Enter copyright">
                </div>
              </div> 
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">About: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control NameErr" name="about" id="about" aria-describedby="emailHelp" placeholder="Enter about">
                </div>
              </div> 
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Tagline: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control NameErr" name="tagline" id="tagline" aria-describedby="emailHelp" placeholder="Enter tagline">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
              </div>  
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Phone: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control" name="phone" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter phone">
                </div>
              </div> 
               
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Office Address: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control" name="office_address" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Office Address">
                </div>
              </div> 
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="profile_image" class="form-control-label">Profile Image: <span class="tx-danger">*</span></label>
                  <input type="file" class="form-control" name="logo" id="logo" onchange="document.getElementById('ataul').src = window.URL.createObjectURL(this.files[0])">
                </div>
              </div><!-- col-4-->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Logo preview: <span class="tx-danger">*</span></label>
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


