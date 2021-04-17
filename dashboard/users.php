<?php
 require 'inc/header.php';
 require_once '../db.php';
$select = "SELECT * FROM users WHERE status = 1"; //where ta deya hoi nai
$query_data = mysqli_query($db, $select);
?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashboard.php">Starlight</a>
        <span class="breadcrumb-item active">All users</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <?php
    if (isset($_SESSION['delete_user'])) { ?>
      <div class="alert alert-danger">
        <?php
          echo $_SESSION['delete_user'];
          unset($_SESSION['delete_user']);
        ?>
      </div>
  <?php
    }
    if (isset($_SESSION['update_user'])) { ?>
      <div class="alert alert-success">
        <?php
          echo $_SESSION['update_user'];
          unset($_SESSION['update_user']);
        ?>
      </div>
  <?php
    }
  ?>        
  <table class="table table-bordered" id="myTable">
    <thead>
      <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Email</th>
        <th>Image</th>
        <th>User role</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
      foreach ($query_data as $key => $value) { ?>
        <tr>
        <td><?php echo ++$key?></td>
        <td><?php echo $value['name']?></td>
        <td><?php echo $value['email']?></td>
        <td><img width="50" src="upload/<?php echo $value['profile_image']?>"></td>
        
        
        <td class="text-center">
        
        <?php 
          if ($value['role'] == 1 ) {
            echo 'User';
          } 
          elseif ($value['role'] == 2) {
            echo 'Employee';
          }
          else {
            echo 'Admin';
          }
        ?>
        
        </td>
        <td>
            <a href="user-edit.php?user_id=<?php echo $value['id']?>"class="btn btn-outline-primary">Edit</a>
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
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
    } );
</script>


<?php

 require 'inc/footer.php'; 
?>

 <!-- href="user-delete.php?user_id=<?php echo $value['id']?>" -->