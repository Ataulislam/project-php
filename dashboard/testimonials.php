<?php
 require 'inc/header.php';
 require_once '../db.php';
$select = "SELECT * FROM testimonials"; 
$query_data = mysqli_query($db, $select);
?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashboard.php">Starlight</a>
        <span class="breadcrumb-item active">Testimonials</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          
  <div class="text-right">
        <a href="testimonial-add.php"><i class="fa fa-plus"></i> Add</a>
  </div>
  <table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th>SL</th>
        <th>Tittle</th>
        <th>Test Image</th>
        <th>paragraph</th>
        <th>Name</th>
        <th>position</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
      foreach ($query_data as $key => $value) { ?>
        <tr>
        <td><?= ++$key?></td>
        <td><?= $value['tittle']?></td>
        <td><img width="50" src="upload/testimonial_image/<?= $value['test_img']?>"></td>
        <td><?= $value['paragraph']?></td>
        <td><?= $value['name']?></td>
        <td><?= $value['position']?></td>
        <td>
            <a href="testimonial-edit.php?id=<?php echo $value['id']?>"class="btn btn-outline-primary">Edit</a>
            <button data-id="<?php echo $value['id']?>" class="btn btn-outline-danger UserDelete">Delete</button>
        </td>
      </tr>
    <?php  }
    ?>
      
    </tbody>
  </table>
        </div><!-- sl-page-title -->

      </div><!-- sl-pagebody -->

    <script type="text/javascript">
      $('.UserDelete').click(function(){
        var id = $(this).attr("data-id");
        

        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this imaginary file!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              swal("Poof! Your data has been deleted!", {
                icon: "success",
              });
              window.setTimeout(function(){
                window.location.href = 'user-delete.php?user_id='+id;
              }, 5000);
            } else {
              swal("Your data is safe!");
            }
          });

      });
    </script>
<!-- <script>
    $(document).ready( function () {
    $('#myTable').DataTable();
    } );
</script> -->


<?php

 require 'inc/footer.php'; 
?>
