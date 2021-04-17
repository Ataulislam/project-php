<?php
 require 'inc/header.php';
 require_once '../db.php';
$select = "SELECT * FROM settings"; 
$query_data = mysqli_query($db, $select);
$select_count = "SELECT COUNT(*) as total FROM settings"; 
$query_count = mysqli_query($db, $select_count);
$assoc = mysqli_fetch_assoc($query_count);
?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashboard.php">Starlight</a>
        <span class="breadcrumb-item active">Settings</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
        <h3 class="text-center">SyStem Settings</h3>
        <div class="text-right">
       <?php if ($assoc['total']>0) :?>
        <a href="social-add.php"><i class="fa fa-plus"></i> Edit</a>
       <?php else : ?>
        <a href="add-settings.php"><i class="fa fa-plus"></i> Add</a>
        <?php endif ?>

        </div>
      <table class="table table-bordered" id="myTable">
        <thead>
          <tr>
            <th>SL</th>
            <th>tagline</th>
            <th>about</th>
            <th>logo</th>
            <th>office_address</th>
            <th>email</th>
            <th>Copyright</th>
            <th>phone</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
          foreach ($query_data as $key => $value) { ?>
            <tr>
            <td><?php echo ++$key?></td>
            <td><?php echo $value['tagline']?></td>
            <td><?php echo $value['about']?></td>
            <td><?php echo $value['logo']?></td>
            <td><?php echo $value['office_address']?></td>
            <td><?php echo $value['email']?></td>
            <td><?php echo $value['copyright']?></td>
            <td><?php echo $value['phone']?></td>
            <td>
                <a href="edit-settings.php"class="btn btn-outline-primary">Edit</a>
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