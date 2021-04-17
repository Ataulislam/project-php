<?php
require 'inc/header.php';
?>

<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <span class="breadcrumb-item active">Add Education</span>
      </nav>
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Add Education</h5>
        </div><!-- sl-page-title -->
        <div class="card pd-20 pd-sm-40">
          <div class="form-layout">
          <form action="education-post.php" method="post">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="tittle" class="form-control-label">Titlle: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control NameErr" name="tittle" id="tittle" aria-describedby="emailHelp" placeholder="Enter tittle">
                </div>
              </div> 
              <div class="col-lg-4">
                <div class="form-group">
                  <label for="year" class="form-control-label">Year: <span class="tx-danger">*</span></label>
                  <input type="text" class="form-control NameErr" name="year" id="year" aria-describedby="emailHelp" placeholder="Enter year">
                </div>
              </div> 

              <style>
                  .slidecontainer {
                    width: 100%;
                  }

                  .slider {
                    -webkit-appearance: none;
                    width: 100%;
                    height: 25px;
                    background: #d3d3d3;
                    outline: none;
                    opacity: 0.7;
                    -webkit-transition: .2s;
                    transition: opacity .2s;
                  }

                  .slider:hover {
                    opacity: 1;
                  }

                  .slider::-webkit-slider-thumb {
                    -webkit-appearance: none;
                    appearance: none;
                    width: 25px;
                    height: 25px;
                    background: #4CAF50;
                    cursor: pointer;
                  }

                  .slider::-moz-range-thumb {
                    width: 25px;
                    height: 25px;
                    background: #4CAF50;
                    cursor: pointer;
                  }
                </style>

              <div class="col-lg-4">
                <div class="form-group">
                  <label for="progress" class="form-control-label">Progress: <span class="tx-danger">*</span></label>
                  <input type="range" name="progress" min="1" max="100" value="50">
                  <!-- <input type="text" class="form-control NameErr" name="progress" id="progress" aria-describedby="emailHelp" placeholder="Enter progress"> -->
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


