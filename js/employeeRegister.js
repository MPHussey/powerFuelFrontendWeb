$(document).ready(function(){

    $('.employee-register-modal-pop').on('click',function(){
        $('#ampRegister-modal').modal('show');
    })

    /*----onclick register button----*/
    $('.form-employeeRegister').submit(function(event){
        event.preventDefault();
        var employee_name=$('#employee-name').val();
        var employee_email=$('#employee-email').val();
        var employee_password=$('#emp-password').val();
        var employee_designation=$('#employee-designation').val();
        var status='Active';
        var company_id='1';

        var apiData={
            "name":employee_name,
            "company_id":company_id,
            "user_name":employee_email,
            "password":employee_password,
            "role":employee_designation,
            "status":status
        };



        var url="http://localhost:8080/user/register";

        $.ajax({
            type:"POST",
            url:url,
            data:JSON.stringify(apiData),
            cache:false,
            crossDomain:true,
            contentType:'application/json',
            success:function(data){
                if(data=="Account Already Exist"){
                    $.notify("Account Already Exist","error");
                }
                $('.form-employeeRegister').trigger('reset');
                viewAllEmployees();

            }
        })
    })


    /*-----view all registered employees----*/
    viewAllEmployees();
    function viewAllEmployees(){
        var url='http://localhost:8080/user/viewEmployees';
        var apiData={
            "company_id":"1"
        };

        $.ajax({
            type:"POST",
            url:url,
            data:JSON.stringify(apiData),
            crossDomain: true,
            cache: false,
            contentType: "application/json",
            success:function(data){

                var template='';
                for(var i in data){
                    template+='<tr>\n' +
                        '                                                                <td>'+data[i]['name']+'</td>\n' +
                        '                                                                <td>'+data[i]['userName']+'</td>\n' +
                        '                                                                <td>'+data[i]['role']+'</td>\n' +
                        '                                                                <td>'+data[i]['status']+'</td>\n' +
                        '                                                                <td><span class="employee-edit-btn" data-options={"id":"'+data[i]['id']+'"} style="color:blue;cursor: pointer">edit</span></td>\n' +
                        '                                                            </tr>';
                }

                //
                // template+='<tr>\n' +
                //     '                                                                <td>'+data[i]['name']+'</td>\n' +
                //     '                                                                <td>'+data[i]['userName']+'</td>\n' +
                //     '                                                                <td>'+data[i]['role']+'</td>\n' +
                //     '                                                                <td>'+data[i]['status']+'</td>\n' +
                //     '                                                                <td><span class="employee-edit-btn" data-options={"id":"'+data[i]['id']+'"} style="color:blue;cursor: pointer">edit</span> || <span data-options={"id":"'+data[i]['id']+'"} class="employee-delete-btn" style="color: red;cursor: pointer">delete</span></td>\n' +
                //     '                                                            </tr>';

                $('.view-registered-employees').html(template);
            }

        })

    }

    /*------get single emp data by id-----*/
    $('.view-registered-employees').on('click','.employee-edit-btn',function(){
        $('#empUpdate-modal').modal('show');
        var emp_id=$(this).data('options').id;

        var url='http://localhost:8080/user/viewSingleEmployees';
        var apiData={
            "emp_id":emp_id
        };

        $.ajax({
            type:"POST",
            url:url,
            data:JSON.stringify(apiData),
            crossDomain:true,
            contentType:"application/json",
            success:function(data){

                $('#update-employee-id').val(data[0]['id']);
                $('#update-employee-name').val(data[0]['name']);
                $('#update-employee-email').val(data[0]['userName']);
                $('#update-emp-password').val(data[0]['password']);
                $('#update-employee-designation').val(data[0]['role']);
                $('#update-employee-status').val(data[0]['status']);

            }
        })


    })


    /*---------update employee details---*/
    $('.form-updateEmployee').submit('click',function(event){
        event.preventDefault();
        var emp_id=$('#update-employee-id').val();
        var emp_name=$('#update-employee-name').val();
        var emp_email=$('#update-employee-email').val();
        var emp_role=$('#update-employee-designation').val();
        var emp_password=$('#update-emp-password').val();
        var emp_status=$('#update-employee-status').val();

        var url='http://localhost:8080/user/updateEmployee';
        var apiData={
            "name":emp_name,
            "password":emp_password,
            "role":emp_role,
            "userName":emp_email,
            "id":emp_id,
            "status":emp_status
        };

        $.ajax({
            type:"POST",
            url:url,
            data:JSON.stringify(apiData),
            crossDomain:true,
            contentType:"application/json",
            cache:false,
            success:function(data){

                $('#empUpdate-modal').modal('hide');
                viewAllEmployees();
            }
        })


    })









})