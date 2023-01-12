function allocateFuel(){
    let allocationDate = $('#allocation-date').val();
    let allocationQty=$('#allocation-qty').val();
    let allocationFuelType=$('#allocation-fuelType').val();
    let allocationReqId=$('#allocation-requestId').val();
    let allocationReqQty=$('#allocation-requestQty').val();
    let allocationStationId=$('#allocation-stationId').val();
    let allocationStatus=$('#allocation-status').val();

    console.log(allocationDate)
   


    $.ajax({
        method:"POST",
        contentType:"application/json",
        url:"http://localhost:8080/fuelAllocation/saveFuelAllocation2",
        async:true,
        data:JSON.stringify({

            "allocationId":"",
            "requestID":allocationReqId,
            "allocatedDate":allocationDate,
            "stationId":allocationStationId,
            "status":allocationStatus,
            "fuelType":allocationFuelType,
            "requested_quantity":allocationReqQty,
            "allocated_quantity":allocationQty


        }),
        success:function(data){
            alert("Fuel allocated to the station id "+allocationStationId)
        },
        error:function(xhr,exception){
            alert("Error")
        }


    })
    
}




