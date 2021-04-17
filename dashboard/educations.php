<?php
 require 'inc/header.php';
 require_once '../db.php';
$select = "SELECT * FROM educations WHERE status=1"; 
$query_data = mysqli_query($db, $select);
?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashboard.php">Starlight</a>
        <span class="breadcrumb-item active">All Educations</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
        <h3 class="text-center">All Educations</h3>
        <div class="text-right">
        <a href="education-add.php"><i class="fa fa-plus"></i> Add</a>
        </div>
      <table class="table table-bordered" id="myTable">
        <thead>
          <tr>
            <th>SL</th>
            <th>Tittle</th>
            <th>Year</th>
            <th>Progress</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
          foreach ($query_data as $key => $value) { ?>
            <tr>
            <td><?php echo ++$key?></td>
            <td><?php echo $value['tittle']?></td>
            <td><?php echo $value['year']?></td>
            <td><?php echo $value['progress']?></td>
            <td>
                <a href="education-add.php?id=<?= $value['id']?>"class="btn btn-outline-primary">Edit</a>
                <button data-id="" class="btn btn-outline-danger UserDelete">Delete</button>
            </td>
          </tr>
        <?php  }
        ?>
          
        </tbody>
      </table>
            </div><!-- sl-page-title -->

      </div><!-- sl-pagebody -->

<?php
 // require 'inc/footer.php';
?>

 <!-- href="user-delete.php?user_id=<?php //echo $value['id']?>" -->