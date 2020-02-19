<?php
include "db.php";
$db=new Database();
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $result=$db->selectUser($id);


    }
?>
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
    <div class="container">
        <div class="row justify-content-center mx-auto mt-5">
            <div class="col-md-6">
                <h3 class="text-primary text-center mb-2">Edit User</h3>
                <form method="post" action="" id="edit-form">
                    <input type="hidden" id="edit" name="edit" value="<?php echo $result['id']; ?>">
                    <div class="form-group">
                        <input type="text" name="fname" id="edit-fname" class="form-control" value="<?php echo $result['first_name']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="lname" id="edit-lname" class="form-control" value="<?php echo $result['last_name']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" id="edit-email" class="form-control" value="<?php echo $result['email']; ?>"">
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" id="edit-phone" class="form-control" value="<?php echo $result['phone']; ?>"">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" id="edit-butn" class="btn btn-primary btn-block" value="Edit User">
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