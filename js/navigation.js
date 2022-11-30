$(document).ready(function(){
    changeLocation();

    $('#nav-station-register').on('click',function(){
        /*---Panel Handling-----*/
        $('#station-register-page').css('display','block');
        //make all other pages diplay none

    });


    function changeLocation(){
        switch(window.location.hash){
            case '#register-station':
                $('#station-register-page').css('display','block');
                break;
            case '':
                /*Add your default view all items section*/
                $('#station-register-page').css('display','none');
                break;
        }
    }

})