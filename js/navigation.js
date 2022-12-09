$(document).ready(function(){
    changeLocation();

    $('#nav-station-register').on('click',function(){
        /*---Panel Handling-----*/
        $('#station-register-page').css('display','block');
        $('#fuel-request-page').css('display','none');
        $('#fuel-allocation-page').css('display','none');
        $('#fuel-dispatch-page').css('display','none');
        //make all other pages diplay none

    });

    $('#nav-fuel-request').on('click',function(){
        console.log("test");
        /*---Panel Handling-----*/
        $('#station-register-page').css('display','none');
        $('#fuel-request-page').css('display','block');
        $('#fuel-allocation-page').css('display','none');
        $('#fuel-dispatch-page').css('display','none');
        
        //make all other pages diplay none

    });


    $('#nav-fuel-allocation').on('click',function(){
        console.log("test");
        /*---Panel Handling-----*/
        $('#station-register-page').css('display','none');
        $('#fuel-request-page').css('display','none');
        $('#fuel-allocation-page').css('display','block');
        $('#fuel-dispatch-page').css('display','none');
        
        //make all other pages diplay none

    });


    $('#nav-fuel-dispatch').on('click',function(){
        /*---Panel Handling-----*/
        $('#station-register-page').css('display','none');
        $('#fuel-request-page').css('display','none');
        $('#fuel-allocation-page').css('display','none');
        $('#fuel-dispatch-page').css('display','block');
        
        //make all other pages diplay none

    });


    function changeLocation(){
        switch(window.location.hash){
            case '#register-station':
                $('#station-register-page').css('display','block');
                $('#fuel-request-page').css('display','none');
                $('#fuel-allocation-page').css('display','none');
                $('#fuel-dispatch-page').css('display','none');

                break;
            case '#fuel-request':
                /*Add your default view all items section*/
                $('#fuel-request-page').css('display','block');
                $('#station-register-page').css('display','none');
                $('#fuel-allocation-page').css('display','none');
                $('#fuel-dispatch-page').css('display','none');

                break;
            case '#fuel-allocation':
                    /*Add your default view all items section*/
                    $('#fuel-allocation-page').css('display','block');
                    $('#fuel-request-page').css('display','none');
                    $('#station-register-page').css('display','none');
                    $('#fuel-dispatch-page').css('display','none');

                    break;
            case '#fuel-dispatch':
                     /*Add your default view all items section*/
                    $('#fuel-dispatch-page').css('display','block');
                    $('#fuel-allocation-page').css('display','none');
                    $('#fuel-request-page').css('display','none');
                    $('#station-register-page').css('display','none');
                    
    
                    break;
                
        }
    }

})