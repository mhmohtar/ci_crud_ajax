<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h4>
                    ajax crud
                </h4>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#studentModal">
                    Add
                </button>
            </div>
        </div>
        <div class="card-body">   
            <div class="container">
            </div>
            <!-- Modal -->
            <div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="studentModalLabel">Add Student</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- start form -->
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" class="form-control name" aria-describedby="" placeholder="Enter Full Name">
                                <small id="error_name" class="text-danger ms-3"></small>
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="text" class="form-control email" aria-describedby="" placeholder="Enter Email">
                                <small id="error_email" class="text-danger ms-3"></small>
                            </div>
                            <div class="form-group">
                                <label for="name">Phone</label>
                                <input type="text" class="form-control phone" aria-describedby="" placeholder="Enter Phone">
                                <small id="error_phone" class="text-danger ms-3"></small>
                            </div>
                            <div class="form-group">
                                <label for="name">Course</label>
                                <input type="text" class="form-control course" aria-describedby="" placeholder="Enter Course">
                                <small id="error_course" class="text-danger ms-3"></small>
                            </div>
                        <!-- end form -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary ajaxstudent-save">Save changes</button>
                    </div>
                    </div>
                </div>
            </div>
            <!-- end modal -->
            <!-- view modal -->
            <div class="modal fade" id="studentModalView" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="studentModalLabel">View Student</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h4>ID : <span class="id_view"></span> </h4>
                        <h4>Name : <span class="name_view"></span> </h4>
                        <h4>Email : <span class="email_view"></span> </h4>
                        <h4>Phone : <span class="phone_view"></span> </h4>
                        <h4>Course : <span class="course_view"></span> </h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary ajaxstudent-save">Save changes</button>
                    </div>
                    </div>
                </div>
            </div>
            <!-- end view modal -->
            <!-- start modal edit -->
            <div class="modal fade" id="studentModalEdit" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="studentModalLabel">Edit Student</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- start form -->
                            <input type="hidden" id="stud_id">
                            <div class="form-group">
                                <label for="name">Full Name</label>
                                <input type="text" id="stud_name" class="form-control name" aria-describedby="" placeholder="Enter Full Name">
                                <small id="error_name" class="text-danger ms-3"></small>
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="text" id="stud_email" class="form-control email" aria-describedby="" placeholder="Enter Email">
                                <small id="error_email" class="text-danger ms-3"></small>
                            </div>
                            <div class="form-group">
                                <label for="name">Phone</label>
                                <input type="text" id="stud_phone" class="form-control phone" aria-describedby="" placeholder="Enter Phone">
                                <small id="error_phone" class="text-danger ms-3"></small>
                            </div>
                            <div class="form-group">
                                <label for="name">Course</label>
                                <input type="text" id="stud_course" class="form-control course" aria-describedby="" placeholder="Enter Course">
                                <small id="error_course" class="text-danger ms-3"></small>
                            </div>
                        <!-- end form -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary ajaxstudent-update">Update changes</button>
                    </div>
                    </div>
                </div>
            </div>
            <!-- end modal edit -->
            <!-- start modal delete -->
            <div class="modal fade" id="studentModalDelete" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="studentModalLabel">Delete Student</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="stud_delete_id">
                        <h4>Are you sure want to delete </h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-danger ajaxstudent-delete">Yes, Delete</button>
                    </div>
                    </div>
                </div>
            </div>
            <!-- end modal delete -->
            <table class="table table-bordered">
                <thead>
                    <tr class="bg-primary text-light">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Course</th>
                        <th>Created at</th>
                        <th>Action</th> 
                    </tr>
                </thead>
                <tbody class="studentdata">

                </tbody>
            </table>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- 
        https://www.youtube.com/watch?v=KdEOVN7celI
     -->
    <script>
        $(document).ready(function (){
            loadstudent();
            $(document).on('click', '.view_btn', function(){
                var stud_id = $(this).closest('tr').find('.stud_id').text();
                
                $.ajax({
                    method: "POST",
                    url: "/ajax-student/viewdata",
                    data: {
                        'stud_id': stud_id,
                    },
                    success: function (response) {
                        //console.log(response);
                        $.each(response, function (key, studview) { 
                             //console.log(studview['name']);
                            $('.id_view').text(studview['id']);
                            $('.name_view').text(studview['name']);
                            $('.email_view').text(studview['email']);
                            $('.phone_view').text(studview['phone']);
                            $('.course_view').text(studview['course']);
                            $('#studentModalView').modal('show');
                        });
                    }
                });
            });

            $(document).on('click', '.edit_btn', function () {
                var stud_id = $(this).closest('tr').find('.stud_id').text();
                $.ajax({
                    method: "POST",
                    url: "/ajax-student/editdata",
                    data: {
                        'stud_id': stud_id
                    },
                    success: function (response) {
                        $.each(response, function (key, studvalue) { 
                             $('#stud_id').val(studvalue['id']);
                             $('#stud_name').val(studvalue['name']);
                             $('#stud_email').val(studvalue['email']);
                             $('#stud_phone').val(studvalue['phone']);
                             $('#stud_course').val(studvalue['course']);
                             $('#studentModalEdit').modal('show');
                        });
                    }
                });
            });
            // update student
            $(document).on('click', '.ajaxstudent-update', function(){
                var data = 
                {
                    'stud_id': $('#stud_id').val(),
                    'name': $('#stud_name').val(),
                    'email': $('#stud_email').val(),
                    'phone': $('#stud_phone').val(),
                    'course': $('#stud_course').val(),
                }
                $.ajax({
                    method: "POST",
                    url: "ajax-student/updatedata",
                    data: data,
                    success: function (response) {
                        $('#studentModalEdit').modal('hide');
                        $('.studentdata').html("");
                        loadstudent();
                    }
                });
            });
            // delete student
            $(document).on('click', '.delete_btn', function () {
                var stud_id = $(this).closest('tr').find('.stud_id').text();
                //alert(stud_id);
                $('#stud_delete_id').val(stud_id);
                $('#studentModalDelete').modal('show');
            });

            $(document).on('click', '.ajaxstudent-delete', function () {
                var stud_id = $('#stud_delete_id').val();
                $.ajax({
                    method: "POST",
                    url: "ajax-student/deletedata",
                    data: {
                        'stud_id': stud_id
                    },
                    success: function (response) {
                        $('#studentModalDelete').modal('hide');
                        $('.studentdata').html("");
                        loadstudent();
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: response.status,
                            timer: 1000, // Waktu dalam milidetik (3 detik dalam contoh ini)
                            showConfirmButton: false // Menghilangkan tombol OK
                        });
                    }
                });
            });
        });

        function loadstudent()
        {
            $.ajax({
                method: "GET",
                url: "/ajax-student/getdata",
                success: function (response) {
                    //console.log(response.students);
                    $.each(response.students, function (key, value){
                        $('.studentdata').append('<tr>\
                            <td class="stud_id">'+value['id']+'</td>\
                            <td>'+value['name']+'</td>\
                            <td>'+value['email']+'</td>\
                            <td>'+value['phone']+'</td>\
                            <td>'+value['course']+'</td>\
                            <td>'+value['created_at']+'</td>\
                            <td>\
                                <a href="#" class="btn btn-info view_btn">view</a>\
                                <a href="#" class="btn btn-primary edit_btn">edit</a>\
                                <a href="#" class="btn btn-danger delete_btn">delete</a>\
                            </td>\
                       </tr>');
                    });
                }
            });
        }
    </script>
    <!--  save student -->
    <script>
        $(document).ready(function () {
            $(document).on('click','.ajaxstudent-save', function () {
                // validate name
                if($.trim($('.name').val()).length == 0){
                    error_name ='Please enter full name';
                    $('#error_name').text(error_name);
                }
                else{
                    error_name ='';
                    $('#error_name').text(error_name);
                }
                // validate email
                if($.trim($('.email').val()).length == 0){
                    error_email ='Please enter email';
                    $('#error_email').text(error_email);
                }
                else{
                    error_email ='';
                    $('#error_email').text(error_email);
                }
                // validate phone
                if($.trim($('.phone').val()).length == 0){
                    error_phone ='Please enter phone';
                    $('#error_phone').text(error_phone);
                }
                else{
                    error_phone ='';
                    $('#error_phone').text(error_phone);
                }
                // validate course
                if($.trim($('.course').val()).length == 0){
                    error_course ='Please enter course';
                    $('#error_course').text(error_course);
                }
                else{
                    error_course ='';
                    $('#error_course').text(error_course);
                }

                // if data not null
                if(error_name != '' || error_email != '' || error_phone != '' || error_course != ''){
                    return false;
                }else{
                    var data = {
                        'name': $('.name').val(),
                        'email': $('.email').val(),
                        'phone': $('.phone').val(),
                        'course': $('.course').val(),
                    };
                    $.ajax({
                        method: "POST",
                        url: "/ajax-student/store",
                        data: data,
                        success: function (response) {
                            $('#studentModal').modal('hide');
                            $('#studentModal').find('input').val('');

                            $('.studentdata').html("");
                            loadstudent();
                            Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: response.status,
                            timer: 1000, 
                            showConfirmButton: false 
                        });
                        }
                    });
                }
            });
        });
    </script>
  </body>
</html>