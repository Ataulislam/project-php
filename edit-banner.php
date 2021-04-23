<?php
require 'inc/header.php';
require_once '../db.php';
$id = $_GET['id'];
$select = "SELECT * FROM banner_part where id = $id";
$query = mysqli_query($db, $select);
$after_assoc = mysqli_fetch_assoc($query);

?>

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Edit banner</span>
      </nav>
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Edit banner</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <div class="form-layout">
          <form action="banner-update.php" method="post" enctype="multipart/form-data">
          <input type="hidden" value="<?php echo $after_assoc['id']?>" name="id">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="sub_tittle" class="form-control-label">Sub Tittle: <span class="tx-danger">*</span></label>
                  <input type="text" value="<?php echo $after_assoc['sub_tittle'] ?>" class="form-control NameErr" name="sub_tittle" id="sub_tittle" aria-describedby="emailHelp" placeholder="Enter Sub Tittle">
                </div>
              </div> 
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="tittle" class="form-control-label">tittle: <span class="tx-danger">*</span></label>
                  <input type="text" value="<?php echo $after_assoc['tittle'] ?>" class="form-control" name="tittle" id="tittle" aria-describedby="emailHelp" placeholder="Enter tittle">
                </div>
              </div>  
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="paragraph" class="form-control-label">Paragraph: <span class="tx-danger">*</span></label>
                  <input type="text" value="<?php echo $after_assoc['paragraph'] ?>" class="form-control" name="paragraph" id="paragraph" aria-describedby="emailHelp" placeholder="Enter paragraph">
                </div>
              </div>  
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="banner_img" class="form-control-label">Banner Image: <span class="tx-danger">*</span></label>
                  <input type="file" class="form-control" name="banner_img" id="banner_img" onchange="document.getElementById('ataul').src = window.URL.createObjectURL(this.files[0])">
                </div>
              </div><!-- col-4-->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Banner image preview: <span class="tx-danger">*</span></label>
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


