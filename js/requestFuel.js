$(document).ready(function(){

   $('.request-fuel-modal-pop').on('click',function(){
      $('.receivedAmount-section').css('display','none');
      $('.fuelRequest-status-Section').css('display','none');
      $('#fuel-request-modal').modal("show");



   })

   $('.form-fuelRequest').submit(function(event){
      event.preventDefault();
      var fuel_type=$('#fuel-type').val();
      var request_amount=parseInt($('#requested-amount').val());
      var status="pending";
      var received_quantity=0;

      console.log(fuel_type+" "+request_amount);
   })
});