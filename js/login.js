$(document).ready(function(){

    $('#form-login').submit(function(event){
        event.preventDefault();
        var userName=$('#email').val();
        var password=$('#password').val();
        var company_id=$('#login-location').val();

        var url='http://localhost:8080/user/uservalidate';
        var apiData={
            "user_name":userName,
            "password":password,
            "company_id":company_id
        }

        $.ajax({
            type:"POST",
            url:url,
            data:JSON.stringify(apiData),
            crossDomain:true,
            cache:false,
            contentType:"application/json",
            success:function(data){
                $('#form-login').trigger('reset');
                if(data.length!=0){
                    console.log(data[0]);
                    localStorage.setItem('loginData',JSON.stringify(data[0]));
                    window.location.replace("http://localhost/powerFuelFrontendWeb/index.php");

                }
            }
        })


    });

})