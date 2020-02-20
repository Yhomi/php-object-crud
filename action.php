<?php
    include "db.php";
    $db=new Database();
    // echo "Connected";
    if(isset($_POST['action'])){
        $output='';
        $data=$db->read();
        // print_r($data);
        if($db->totalRow()>0){
            $output .='
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
            <tbody>';
            foreach($data as $row){
                $output .='
                <tr class="text-center text-secondary">
                    <td>'.$row['id'].'</td>
                    <td>'.$row['first_name'].'</td>
                    <td>'.$row['last_name'].'</td>
                    <td>'.$row['email'].'</td>
                    <td>'.$row['phone'].'</td>
                    <td>
                        <a href="#" id="'.$row['id'].'" title="view details" class="text-success infoBtn" ><i class="fas fa-info-circle fa-lg"></i></a>&nbsp;&nbsp;
                        <a href="edit.php?id='.$row['id'].'" title="edit user" class="text-primary editBtn"><i class="fas fa-edit fa-lg"></i></a>&nbsp;&nbsp;
                        <a href="#" id="'.$row['id'].'" title="delete user" class="text-danger delBtn"><i class="fas fa-trash-alt fa-lg"></i></a>
                    </td>
                </tr> ';
            }
            $output .='
            </tbody></table>';
        echo $output;
        }else{
            echo '<h3 class="text-center text-secondary mt-5>No User Present in the database</h3>';
        }
    }

    // Add New User

    if(isset($_POST['fname'])&&isset($_POST['lname'])&& isset($_POST['email']) &&isset($_POST['phone'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        // echo $fname;
        $db->insert($fname,$lname,$email,$phone);
            // echo "User added Successfully";
        
    }


    // Edit a User

    if(isset($_POST['fn']) && isset($_POST['ln']) && isset($_POST['e_mail']) && isset($_POST['e_phone'])){
        $new_email=$_POST['e_mail'];
        $new_fn=$_POST['fn'];
        $new_ln=$_POST['ln'];
        $new_phone=$_POST['e_phone'];
        $up_id=$_POST['up_id'];
        // echo $up_id;
         $db->update($up_id,$new_fn,$new_ln,$new_email,$new_phone);
    }

    // Delete a User

    if(isset($_POST['del_id'])){
        $delete=$_POST['del_id'];
        // echo "The user to be deleted is user $delete";
         if($db->deleteUser($delete)){
             echo "User deleted successfully!";
         }else{
             echo "Unable to delete user!";
         }
        
    }
?>