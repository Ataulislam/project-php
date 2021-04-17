<?php
require 'inc/header.php';
$id = $_SESSION['id'];
$partner_select = "SELECT * FROM partners WHERE id = $id";
$partner_q = mysqli_query($db, $partner_select);
$partner_assoc = mysqli_fetch_assoc($partner_q);
?>

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Add Partners</span>
      </nav>
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Add Partners</h5>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <div class="form-layout">
          <form action="partner-post.php" method="post" enctype="multipart/form-data">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="company_name" class="form-control-label">Name: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control NameErr" name="company_name" id="company_name"  placeholder="Enter Company Name">
                </div>
              </div> 
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="logo" class="form-control-label">Logo: <span class="tx-danger">*</span></label>
                  <input type="file" class="form-control NameErr" name="logo" id="logo">
                </div>
              </div> 
 
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


