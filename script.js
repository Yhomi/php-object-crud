$(document).ready(function() {


    showAllUsers();

    function showAllUsers() {
        $.ajax({
            url: 'action.php',
            type: 'POST',
            data: { action: "view" },
            success: function(res) {
                // console.log(res)
                $('#user').html(res);
                $('table').DataTable({
                    order: [0, 'desc']
                });
            }
        })
    }

    // insert user to database
    $('#butn').click(function(e) {
        e.preventDefault();
        let fname = $('#fname').val();
        let lname = $('#lname').val();
        let email = $('#email').val();
        let phone = $('#phone').val();

        if (fname == '' || lname == '' || email == '' || phone == "") {
            console.log("Fields can not be empty");
        } else {
            $.ajax({
                url: 'action.php',
                type: 'POST',
                data: { fname: fname, lname: lname, email: email, phone: phone },
                success: function(res) {
                    // console.log(res);
                    swal.fire({
                        title: 'User added successfully',
                        icon: 'success'
                    });
                    $('#addNew').modal('hide');
                    $('#form')[0].reset();
                    showAllUsers();
                }
            })
        }
    })

    // edit user
    $('body').on('click', '.editBtn', function(e) {
        console.log('working')
    })
    $('#edit-butn').click(function(e) {
        e.preventDefault()
        let up_id = $("#edit").val()
        let fn = $('#edit-fname').val()
        let ln = $('#edit-lname').val()
        let e_mail = $('#edit-email').val()
        let e_phone = $('#edit-phone').val()
        if (fn == "" || ln == "" || e_mail == "" || e_phone == "") {
            console.log("Fields Can not be empty")
        } else {
            $.ajax({
                url: 'action.php',
                type: "POST",
                data: { fn: fn, ln: ln, e_mail: e_mail, e_phone: e_phone, up_id: up_id },
                success: function(response) {
                    swal.fire({
                        title: "User changed successfully!",
                        icon: 'success'
                    }).then(function() {
                        location.href = "index.php"
                    })

                }
            })
        }
    })

    //delete user
    $('body').on('click', '.delBtn', function() {
        // console.log('delete button clicked')
        let del_id = $(this).attr('id');
        // console.log(del_id)
        swal.fire({
            title: "Are You Sure You want to Delete this User?",
            text: "You won't be able able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    url: 'action.php',
                    type: "POST",
                    data: { del_id: del_id },
                    success: function(response) {
                        swal.fire({
                                title: "User",
                                text: response
                            }).then(() => {
                                location.reload(true)
                            })
                            // showAllUsers()
                    }
                })
            }
        })
    })
});