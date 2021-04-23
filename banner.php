<?php
 require 'inc/header.php';
 require_once '../db.php';
$select = "SELECT * FROM banner_part"; 
$query_data = mysqli_query($db, $select);
$select_count = "SELECT COUNT(*) as total FROM banner_part"; 
$query_count = mysqli_query($db, $select_count);
$assoc = mysqli_fetch_assoc($query_count);
?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashboard.php">Starlight</a>
        <span class="breadcrumb-item active">Banner</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
        <h3 class="text-center">Banner</h3>
        <div class="text-right">
       <?php if ($assoc['total']>0) :?>
        <a href="edit-banner.php"><i class="fa fa-plus"></i> Edit</a>
       <?php else : ?>
        <a href="add-banner.php"><i class="fa fa-plus"></i> Add</a>
        <?php endif ?>

        </div>
      <table class="table table-bordered" id="myTable">
        <thead>
          <tr>
            <th>SL</th>
            <th>sub_tittle</th>
            <th>tittle</th>
            <th>paragraph</th>
            <th>Banner Image</th>

          </tr>
        </thead>
        <tbody>
        <?php
          foreach ($query_data as $key => $value) { ?>
            <tr>
            <td><?php echo ++$key?></td>
            <td><?php echo $value['sub_tittle']?></td>
            <td><?php echo $value['tittle']?></td>
            <td><?php echo $value['paragraph']?></td>
            <td><img width="100" src="upload/banner_image/<?=$value['banner_img']?>"></td>
            <td>
                <a href="edit-banner.php?id=<?php echo $value['id']?>"class="btn btn-outline-primary">Edit</a>
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