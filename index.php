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
           <!-- <h1 id="test">Test</h1> -->
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <h4 class="mt-2 text-primary">All Users in DB</h4>
        </div>
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary m-1 float-right" data-toggle="modal" data-target="#addNew"><i class="fas fa-user-plus fa-lg"></i>&nbsp;Add New User</button>
            <a href="action.php?export=excel" class="btn btn-success m-1 float-right" id="export"><i class="fas fa-table fa-lg"></i>&nbsp;Export to Excel</a>
        </div>
    </div>
    <hr class="my-1">
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive" id="user">
                <h3 class="text-center text-success" style="margin-top:150px">Loading...</h3>
            </div>
        </div>
    </div>
</div>

<!-- Add New User -->
  <div class="modal fade" id="addNew">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Add New User</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body px-4">
          <form method="post" action="" id="form">
            <div class="form-group">
                <input type="text" name="fname" id="fname" class="form-control" placeholder="First Name">
            </div>
            <div class="form-group">
                <input type="text" name="lname" id="lname" class="form-control" placeholder="Last Name">
            </div>
            <div class="form-group">
                <input type="text" name="email" id="email" class="form-control" placeholder="E-Mail">
            </div>
            <div class="form-group">
                <input type="tel" name="phone" id="phone" class="form-control" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" id="butn" class="btn btn-primary btn-block" value="Add User">
            </div>
          </form>

        </div>
      </div>
    </div>

    






    








<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- <script src="jquery-3.3.1.min.js"></script> -->
<script src="script.js"></script>
</body>
</html>