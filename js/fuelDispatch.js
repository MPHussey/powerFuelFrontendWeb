getAllAllocations();
function getAllAllocations(){
    

    $.ajax({
        method:"GET",
        url:"http://localhost:8080/fuelAllocation/getFuelAllocations2",
        async:true,
       
        success:function(data){

            if(data.code==="00"){
                $('allocationTbl').empty();

                for(let allocationtbl of data.content){
                    let allocationId=allocationtbl.allocationId
                    let requestID=allocationtbl.requestID
                    let allocatedDate=allocationtbl.allocatedDate
                    let stationId=allocationtbl.stationId
                    let status=allocationtbl.status
                    let fuelType=allocationtbl.fuelType
                    let requested_quantity=allocationtbl.requested_quantity
                    let allocated_quantity=allocationtbl.allocated_quantity

                    var row=`<tr><td>${allocationId}</td><td>${allocatedDate}</td><td>${allocated_quantity}</td>
                    <td>${fuelType}</td><td>${requestID}</td><td>${stationId}</td><td>${status}</td></tr>`

                    $("#allocationTbl").append(row);

                }

               
            }

        },
        error:function(xhr,exception){
            alert("Error")
        }


    })
    
}


$(document).ready(function () {
    $(document).on('click', '#allocationTbl tr', function () {
        var col0 = $(this).find('td:eq(0)').text();
        var col2 = $(this).find('td:eq(2)').text();
        var col3 = $(this).find('td:eq(3)').text();
        var col5 = $(this).find('td:eq(5)').text();
       
        
        $('#dispatch-allocation-id').val(col0);
        $('#dispatch-Fuel-Quantity').val(col2);
        $('#dispatch-fuelType').val(col3);
        $('#dispatch-stationId').val(col5);
        

    })
})




function dispatchFuel(){

    let allocationId = $('#dispatch-allocation-id').val();
    let dispatchDate = $('#dispatch-date').val();
    let deliveryTime = $('#dispatch-deliveryTime').val();
    let fuelQty = $('#dispatch-Fuel-Quantity').val();
    let dispatchStatus = $('#dispatch-status').val();
    let transportUnit = $('#dispatch-transportUnit').val();
    let dispatchStationId = $('#dispatch-stationId').val();
    let dispatchFuelType= $('#dispatch-fuelType').val();


    console.log(dispatchDate);



    
    $.ajax({
        method:"POST",
        contentType:"application/json",
        url:"http://localhost:8080/fuelDispatch/saveFuelDispatch2",
        async:true,
        data:JSON.stringify({

            

            "dispatchID":"",
            "allocationID":allocationId,
            "dispatchDate":dispatchDate,
            "transportUnit":transportUnit,
            "expectedDeliveryTime":deliveryTime,
            "fuelQty":fuelQty,
            "status":dispatchStatus,
            "stationId":dispatchStationId,
            "fuelType":dispatchFuelType

        }),
        success:function(data){
            alert("Fuel dispatched to the station id "+dispatchStationId)
        },
        error:function(xhr,exception){
            alert("Error")
        }


    })
    
}








