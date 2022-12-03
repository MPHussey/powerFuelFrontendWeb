$(document).ready(function(){

   $('.request-fuel-modal-pop').on('click',function(){
      $('.receivedAmount-section').css('display','none');
      $('.fuelRequest-status-Section').css('display','none');
      $('#fuel-request-modal').modal("show");



   })

   $('.form-fuelRequest').submit(function(event){
      event.preventDefault();
      var station_id=5;
      var requested_date=new Date().toISOString().slice(0, 10);
      var status="pending";
      var batch_num = Math.ceil(new Date().getTime() / 1000);
      var request_amount=parseInt($('#requested-amount').val());
      var received_quantity=0;
      var dispatch_quantity=0;
      var unit_price=12.50;
      var fuel_type=$('#fuel-type').val();

      var apiData={
         "station_id":6,
         "request_date":requested_date,
         "request_status":status,
         "batch_num":batch_num,
         "requested_quantity":request_amount,
         "received_quantity":received_quantity,
         "dispatched_quantity":dispatch_quantity,
         "unit_price":unit_price,
         "fuel_type":fuel_type
      };

      var url="http://localhost:8080/fuelRequest/insert";

      $.ajax({
         type:"POST",
         url:url,
         data:JSON.stringify(apiData),
         crossDomain:true,
         contentType:"application/json",
         success:function(data){
            console.log(data);

            $('.form-fuelRequest').trigger("reset");
            $("#fuel-request-modal").modal("hide");

         }

      })

   })
});