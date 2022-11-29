$(document).ready(function(){

    $('.register-station-modal-pop').on("click",function(){
        $('.form-stationRegister').trigger("reset");
        $('#btn-register').val("Register");
        var station_id=$('#station-id').val();
       console.log(station_id);

       $("#stRegister-modal").modal("show");
    });

    $('.form-stationRegister').submit(function(event){

        /*--------Update Trigger id-----*/
        var station_id=$('#station-id').val();
        var station_id_num=parseInt(station_id);

        var fuelStation_name=$('#station-name').val();
        var station_address=$('#station-address').val();
        var mobile_number=$('#mobile-number').val();
        var email_address=$('#email').val();
        var district=parseInt($('#station-district').val());
        var station_status=$('#station-status').val();
        var petrol_cap=parseFloat($('#petrol-capacity').val());
        var diesel_cap=parseFloat($('#diesel-capacity').val());



        if(station_id==""){

            var url="http://localhost:8080/fuelstation/register";

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

        }else{
            var url="http://localhost:8080/fuelstation/update";

            var apiData={
                "id":station_id_num,
                "name":fuelStation_name,
                "address":station_address,
                "mobile":mobile_number,
                "email":email_address,
                "petrol_capacity":petrol_cap,
                "diesel_capacity":diesel_cap,
                "status":station_status,
                "district":district
            }



        }


        $.ajax({
            type:"POST",
            url:url,
            data:JSON.stringify(apiData),
            crossDomain:true,
            contentType:"application/json",
            success:function(data){
                console.log(data);
                viewAllStationData();
                $('.form-stationRegister').trigger("reset");
                $("#stRegister-modal").modal("hide");

            }

        })

        event.preventDefault();

    })

    viewAllStationData();
    /*-----View All Items In the station-------*/
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
                        '                                                <td><img data-options={"id":"'+data[i]["id"]+'"} style="cursor:pointer" class="update-station-img" width="20px" src="./imgs/icons8-edit-20.png" alt="edit"></td>\n' +
                        '                                            </tr>';
                }

                $('.view-all-stations').html(temp);
            }

        })
    }


    /*------Update Station Details------*/
    $('.view-all-stations').on('click','.update-station-img',function(){
        var id=parseInt($(this).data("options").id);
        var apiData={"id":id};

        $.ajax({
           type:"POST",
           url:"http://localhost:8080/fuelstation/getSingleItem",
            data:JSON.stringify(apiData),
            contentType:"application/json",
            crossDomain:true,
            cache:false,
            success:function(data){

                $('#station-id').val(data[0]["id"]);
                $('#station-name').val(data[0]["name"]);
                $('#station-address').val(data[0]["address"]);
                $('#mobile-number').val(data[0]["mobile"]);
                $('#email').val(data[0]["email"]);
                $('#station-district').val(data[0]["district"]);
                $('#station-status').val(data[0]["status"]);
                $('#petrol-capacity').val(data[0]["petrolCapacity"]);
                $('#diesel-capacity').val(data[0]["dieselCapacity"]);
            }

        });

        /*----Get Data By Id---------*/

        $("#stRegister-modal").modal("show");
        $('#btn-register').val("Update");

    })






})