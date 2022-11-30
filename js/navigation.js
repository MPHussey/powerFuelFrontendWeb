$(document).ready(function(){
    changeLocation();

    $('#nav-station-register').on('click',function(){
        /*---Panel Handling-----*/
        $('#station-register-page').css('display','block');
        $('#fuel-request-page').css('display','none');
        //make all other pages diplay none

    });

    $('#nav-fuel-request').on('click',function(){
        /*---Panel Handling-----*/
        $('#station-register-page').css('display','none');
        $('#fuel-request-page').css('display','block');
        //make all other pages diplay none

    });


    function changeLocation(){
        switch(window.location.hash){
            case '#register-station':
                $('#station-register-page').css('display','block');
                $('#fuel-request-page').css('display','none');
                break;
            case '#fuel-request':
                /*Add your default view all items section*/
                $('#fuel-request-page').css('display','block');
                $('#station-register-page').css('display','none');
                break;
        }
    }

})