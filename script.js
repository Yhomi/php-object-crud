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
                    // $('#addNew').modal('hide');
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
});