<?php
require 'inc/header.php';
?>

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Add service</span>
      </nav>
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Add service</h5>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <div class="form-layout">
          <form action="service-post.php" method="post">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control NameErr" name="name" id="exampleInpuName" aria-describedby="emailHelp" placeholder="Enter Name">
                </div>
              </div> 
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="icon" class="form-control-label">Icon: <span class="tx-danger">*</span></label>
                  <select name="icon" id="icon" class="form-control">
                     <option value="">Select</option>
                     <option value="fab fa-react">Creative design</option>
                     <option value="fab fa-free-code-camp">Featutres</option>
                     <option value="fal fa-edit">Edit</option>
                     <option value="fal fa-desktop">Responsive</option>
                  </select>
                  <!-- <input type="text" class="form-control" name="icon" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="fa fa-facebook"> -->
                 </div>
              </div> 
              <div class="col-lg-12">
                <div class="form-group">
                  <label class="form-control-label">Summary: <span class="tx-danger">*</span></label>
                  <textarea class="form-control" name="summary" id="summary"></textarea>
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


