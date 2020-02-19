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
                        <a href="#" title="view details" class="text-success"><i class="fas fa-info-circle fa-lg"></i></a>&nbsp;&nbsp;
                        <a href="#" title="edit user" class="text-primary"><i class="fas fa-edit fa-lg"></i></a>&nbsp;&nbsp;
                        <a href="#" title="delete user" class="text-danger"><i class="fas fa-trash-alt fa-lg"></i></a>
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

    if(isset($_POST['fname'])&&isset($_POST['lname'])&& isset($_POST['email']) &&isset($_POST['phone'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        // echo $fname;
        $db->insert($fname,$lname,$email,$phone);
            // echo "User added Successfully";
        
    }
?>