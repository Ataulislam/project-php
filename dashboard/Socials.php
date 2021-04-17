<?php
 require 'inc/header.php';
 require_once '../db.php';
$select = "SELECT * FROM socials WHERE status = 'active'"; //where ta deya hoi nai
$query_data = mysqli_query($db, $select);
?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashboard.php">Starlight</a>
        <span class="breadcrumb-item active">All Social link</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
        <h3 class="text-center">All SOCIALS link</h3>
        <div class="text-right">
        <a href="social-add.php"><i class="fa fa-plus"></i> Add</a>
        </div>
      <table class="table table-bordered" id="myTable">
        <thead>
          <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Icon</th>
            <th>Link</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
          foreach ($query_data as $key => $value) { ?>
            <tr>
            <td><?php echo ++$key?></td>
            <td><?php echo $value['name']?></td>
            <td><?php echo $value['icon']?></td>
            <td><?php echo $value['link']?></td>
            <td><?php echo $value['status']?></td>
            <td>
                <a href=""class="btn btn-outline-primary">Edit</a>
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
 require 'inc/footer.php';
?>

