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

        console.log(apiData);

        var url="http://localhost:8080/user/register";

        $.ajax({
            type:"POST",
            url:url,
            data:JSON.stringify(apiData),
            cache:false,
            crossDomain:true,
            contentType:'application/json',
            success:function(data){
                console.log(data);
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
                console.log(data);
                var template='';
                for(var i in data){
                    template+='<tr>\n' +
                        '                                                                <td>'+data[i]['name']+'</td>\n' +
                        '                                                                <td>'+data[i]['userName']+'</td>\n' +
                        '                                                                <td>'+data[i]['role']+'</td>\n' +
                        '                                                                <td>'+data[i]['status']+'</td>\n' +
                        '                                                                <td><span class="employee-edit-btn" data-options={"id":"'+data[i]['id']+'"} style="color:blue;cursor: pointer">edit</span> || <span data-options={"id":"'+data[i]['id']+'"} class="employee-delete-btn" style="color: red;cursor: pointer">delete</span></td>\n' +
                        '                                                            </tr>';
                }

                $('.view-registered-employees').html(template);
            }

        })

    }

    /*------get single emp data by id-----*/
    $('.view-registered-employees').on('click','.employee-edit-btn',function(){
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
                console.log(data);
            }
        })


    })


})