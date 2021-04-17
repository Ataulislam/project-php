<?php
require 'inc/header.php';
$id = $_SESSION['id'];
$testimonial_select = "SELECT * FROM testimonials WHERE id = $id";
$testimonial_q = mysqli_query($db, $testimonial_select);
$partner_assoc = mysqli_fetch_assoc($testimonial_q);
?>

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Add Testimonial</span>
      </nav>
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Add Testimonial</h5>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <div class="form-layout">
          <form action="testimonial-post.php" method="post" enctype="multipart/form-data">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="tittle" class="form-control-label">Tittle: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control NameErr" name="tittle" id="tittle"  placeholder="Enter Tittle">
                </div>
              </div> 
              
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="test_img" class="form-control-label">Test Image: <span class="tx-danger">*</span></label>
                  <input type="file" class="form-control NameErr" name="test_img" id="test_img">
                </div>
              </div> 

              <div class="col-lg-4">
                <div class="form-group">
                  <label for="paragraph" class="form-control-label">Paragraph: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control NameErr" name="paragraph" id="paragraph"  placeholder="Enter Paragraph">
                </div>
              </div> 
 
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="name" class="form-control-label">Name: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control NameErr" name="name" id="name"  placeholder="Enter Name">
                </div>
              </div> 
 
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="position" class="form-control-label">Position: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control NameErr" name="position" id="position"  placeholder="Enter Position">
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


