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




$(document).ready(function () {
    $(document).on('click', '#view-all-requests tr', function () {
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