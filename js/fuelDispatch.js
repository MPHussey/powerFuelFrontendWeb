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