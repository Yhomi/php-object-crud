<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Font Awesome-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
    <!--Bootsrap CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- datatable for pagination -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#"><i class="fa fa-laptop">&nbsp;</i>Channel</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Service</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li> 
    </ul>
  </div> 
</nav>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
           <h3 class="text-center text-primary font-weight-normal my-3"> CRUD Application Using PDO and Sweetalert</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h4 class="mt-2 text-primary">All Users in DB</h4>
        </div>
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary m-1 float-right"><i class="fas fa-user-plus fa-lg"></i>&nbsp;Add New User</button>
            <a href="#" class="btn btn-success m-1 float-right"><i class="fas fa-table fa-lg"></i>&nbsp;Export to Excel</a>
        </div>
    </div>
    <hr class="my-1">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive" id="user">
                <table class="table table-striped table-sm table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php for($i=1; $i<=100;$i++): ?>
                        <tr class="text-center text-secondary">
                            <td><?php echo $i; ?></td>
                            <td>User <?php echo $i; ?></td>
                            <td>Test <?php echo $i; ?></td>
                            <td>test.<?php echo $i; ?>@test.com</td>
                            <td>081xxxxxxx</td>
                            <td>
                                <a href="#" title="view details" class="text-success"><i class="fas fa-info-circle fa-lg"></i></a>&nbsp;&nbsp;
                                <a href="#" title="edit user" class="text-primary"><i class="fas fa-edit fa-lg"></i></a>&nbsp;&nbsp;
                                <a href="#" title="delete user" class="text-danger"><i class="fas fa-trash-alt fa-lg"></i></a>
                            </td>


                        </tr>
                    <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>










<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    $(document).ready(function(){
        $('table').DataTable();
    });
</script>
</body>
</html>