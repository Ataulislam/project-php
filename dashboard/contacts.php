<?php
 require 'inc/header.php';
 require_once '../db.php';
$select = "SELECT * FROM contacts"; 
$query_data = mysqli_query($db, $select);
?>
    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashboard.php">Starlight</a>
        <span class="breadcrumb-item active">All Messages</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
        <h3 class="text-center">All Messages</h3>
      <table class="table table-bordered" id="myTable">
        <thead>
          <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Email</th>
            <th>message</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php
          foreach ($query_data as $key => $value) { ?>
            <tr
              <?php if ($value['status'] == 1) :?> 
                style="font-weight:bold;"
              <?php endif ?>
            >
            <td><?php echo ++$key?></td>
            <td><?php echo $value['name']?></td>
            <td><?php echo $value['email']?></td>
            <td><?php echo $value['message']?></td>
            <td>
                <?php if ($value['status'] == 1) : ?>
                  <a href="message-status.php?id=<?= $value['id']?>"class="btn btn-outline-primary">Read</a>
                <?php else: ?>
                  <a href="message-status.php?id=<?= $value['id']?>"class="btn btn-outline-info">Unread</a>
                <?php endif ?>
                
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

