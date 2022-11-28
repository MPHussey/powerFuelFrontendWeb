$(document).ready(function(){

    $('.register-station-modal-pop').on("click",function(){
       $("#stRegister-modal").modal("show");
    });

    $('.form-stationRegister').on('submit',function(event){
        event.preventDefault();
        var fuelStation_name=$('#station-name').val();
        var station_address=$('#station-address').val();
        var mobile_number=$('#mobile-number').val();
        var email_address=$('#email').val();
        var district=parseInt($('#station-district').val());
        var station_status=$('#station-status').val();
        var petrol_cap=parseFloat($('#petrol-capacity').val());
        var diesel_cap=parseFloat($('#diesel-capacity').val());

        var apiData={
            "name":fuelStation_name,
            "address":station_address,
            "mobile":mobile_number,
            "email":email_address,
            "petrol_capacity":petrol_cap,
            "diesel_capacity":diesel_cap,
            "status":station_status,
            "district":district
        }

        $.ajax({
            type:"POST",
            url:"http://localhost:8080/fuelstation/register",
            data:JSON.stringify(apiData),
            crossDomain:true,
            contentType:"application/json",
            success:function(data){
                console.log(data);
            }

        })





    })





})