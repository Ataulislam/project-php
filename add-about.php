<?php
require 'inc/header.php';
require_once '../db.php';
$id = $_SESSION['id'] ;
$select = "SELECT * FROM about_part WHERE id= $id";
$query = mysqli_query($db, $select);
$after_assoc = mysqli_fetch_assoc($query);


?>

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Add About</span>
      </nav>
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Add About</h5>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <div class="form-layout">
          <form action="about-post.php" method="post" enctype="multipart/form-data">
            <div class="row mg-b-25">
              
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="sub_tittle" class="form-control-label">Sub Tittle: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control NameErr" name="sub_tittle" id="sub_tittle" aria-describedby="emailHelp" placeholder="Enter Sub Tittle">
                </div>
               </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Tittle: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control" name="tittle" id="tittle" aria-describedby="emailHelp" placeholder="Enter tittle">
                </div>
              </div>  
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Paragraph: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control" name="paragraph" id="paragraph" aria-describedby="emailHelp" placeholder="Enter Paragraph">
                </div>
              </div> 
                
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="about_img" class="form-control-label">About Image: <span class="tx-danger">*</span></label>
                  <input type="file" class="form-control" name="about_img" id="about_img" onchange="document.getElementById('about_img').src = window.URL.createObjectURL(this.files[0])">
                </div>
              </div><!-- col-4-->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Profile image preview: <span class="tx-danger">*</span></label>
                  <img id="about_img" src="upload/about_image/<?= $after_assoc['about_img']?>" width='150' >
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


