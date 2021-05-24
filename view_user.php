<?php
include 'db_con.php';

$select_user = "SELECT * FROM users";
$user_query = mysqli_query($con, $select_user);
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>PWU Tarlac Site Users</title>
     <link rel="stylesheet" href="datatables/datatables.min.css">
     <link rel="stylesheet" type="text/css" href="css/materialize.min.css">
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="datatables/datatables.min.js" charset="utf-8"></script>
        <script src="js/materialize.min.js"></script>
        <style media="screen">
          /* .paginate_button{
            background: blue;
          } */
        </style>

   </head>
   <body>
    <?php include 'view_nav.php'; ?>
<div class="container">
  <table  id="user_table" class="display" width="100%" class="stripped highlight responsive-table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Username</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($user = $user_query->fetch_assoc()): ?>
      <tr>
          <td><?php echo $user['fname'] . ' ' . $user['mname'] . ' ' . $user['lname']; ?></td>
          <td><?php echo $user['username']; ?></td>
          <td>
            <a href="update_user.php?upd_user=<?php echo $user['id'] ?>" class="btn waves-effect waves-light btn-small" ><i class="material-icons">edit</i></a>
            <a href="delete_data.php?user=<?php echo $user['id']; ?>" onclick="return confirm('Are you sure you want to delete this record?')" class="btn waves-effect waves-light btn-small red"><i class="material-icons">delete</i></a>
          </td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</div>
<script>
  $('#user_table').DataTable({
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    });

    $('select').formSelect();
</script>
   </body>
 </html>
