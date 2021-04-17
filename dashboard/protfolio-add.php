<?php
require 'inc/header.php';
?>

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Add Protfolio</span>
      </nav>
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Add Protfolio</h5>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <div class="form-layout">
          <form action="protfolio-post.php" method="post" enctype="multipart/form-data">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="tittle" class="form-control-label">Titlle: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control NameErr" name="tittle" id="tittle" aria-describedby="emailHelp" placeholder="Enter tittle">
                </div>
              </div> 
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="category" class="form-control-label">Category: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control NameErr" name="category" id="category" aria-describedby="emailHelp" placeholder="Enter category">
                </div>
              </div> 
              
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="thumbnail" class="form-control-label">Thumbnail: <span class="tx-danger">*</span></label>
                  <input type="file" class="form-control NameErr" name="thumbnail" id="thumbnail" aria-describedby="emailHelp">
                </div>
              </div> 
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="featured_image" class="form-control-label">Featured Image: <span class="tx-danger">*</span></label>
                  <input type="file" class="form-control NameErr" name="featured_image" id="featured_image" aria-describedby="emailHelp">
                </div>
              </div> 
              <div class="col-lg-8">
                <div class="form-group">
                  <label for="summary" class="form-control-label">Summary: <span class="tx-danger">*</span></label>
                  <textarea class="form-control NameErr" name="Summary" id="Summary" ></textarea>
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


