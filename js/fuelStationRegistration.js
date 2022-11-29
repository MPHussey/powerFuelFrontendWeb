$(document).ready(function(){

    $('.register-station-modal-pop').on("click",function(){
       $("#stRegister-modal").modal("show");
    });

    $('.form-stationRegister').submit(function(event){

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
                viewAllStationData();
            }

        })

        event.preventDefault();

    })

    viewAllStationData();
    function viewAllStationData(){
        $.ajax({
            type:"POST",
            url:"http://localhost:8080/fuelstation/viewAll",
            data:{},
            crossDomain:true,
            contentType:"application/json",
            success:function(data){
                var temp="";
                for(var i in data){
                    temp+='<tr>\n' +
                        '                                                <td></td>\n' +
                        '                                                <td>'+data[i]["name"]+'</td>\n' +
                        '                                                <td>'+data[i]["address"]+'</td>\n' +
                        '                                                <td>'+data[i]["mobile"]+'</td>\n' +
                        '                                                <td>'+data[i]["email"]+'</td>\n' +
                        '                                                <td>'+data[i]["district"]+'</td>\n' +
                        '                                                <td>'+data[i]["petrolCapacity"]+'</td>\n' +
                        '                                                <td>'+data[i]["dieselCapacity"]+'</td>\n' +
                        '                                            </tr>';
                }

                $('.view-all-stations').html(temp);
            }

        })
    }





})