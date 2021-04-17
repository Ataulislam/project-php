<?php
require 'inc/header.php';
$id = $_SESSION['id'];
$counter_select = "SELECT * FROM counters WHERE id = $id";
$counter_q = mysqli_query($db, $counter_select);
$counter_assoc = mysqli_fetch_assoc($counter_q);
?>

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Add Counter</span>
      </nav>
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Add Counter</h5>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <div class="form-layout">
          <form action="counter-post.php" method="post">
            <div class="row mg-b-25">
 
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="name" class="form-control-label">Name: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control" name="name" id="name"  placeholder="Enter Name">
                </div>
              </div> 
 
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="icon" class="form-control-label">Icon: <span class="tx-danger">*</span></label>
                  <select name="icon" id="icon" class="form-control">
                    <option value="">Select Work</option>
                     <option value="flaticon-award">award</option>
                     <option value="flaticon-event">event</option>
                     <option value="flaticon-like">like</option>
                     <option value="flaticon-woman">woman</option>
                  </select>
                  <!-- <input type="text" class="form-control NameErr" name="icon" id="icon"  placeholder="Enter icon"> -->
                </div>
              </div> 
 
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="number" class="form-control-label">Number: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control" name="number" id="number"  placeholder="Enter Number">
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


