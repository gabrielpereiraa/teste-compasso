$(document).ready(function() {

    $('.custom-file-input').on('change',function(e){
        var fileName = e.target.files[0].name;

        $(this).next('.custom-file-label').html(fileName);
    });

    setTimeout(function(){
        $(".message-alert").fadeOut('slow');
    }, 5000);

    $(function () {
        $('[data-toggle="popover"]').popover()
    });

    $('[data-toggle="popover"]').on('click', function(){
        $('[data-toggle="popover"]').popover('hide');
    });

    mouse_is_inside = false;
    $('.popover').on('click', function(){
        console.log(true);
    }, function(){
        console.log(false);
    });

    $("body").mouseup(function(){
        if(! mouse_is_inside) $('.form_wrapper').hide();
    });

    $('.is-invalid').on('change', function(){
        $(this).removeClass('is-invalid');
    });



    /* card drop */
    $('.card-drop-icon').on('click', function(){

        icon = $(this).children('svg');
        console.log($(icon).get(0));
        header = $(this).parent();
        card = $(header).parent();
        body = $(card).children('.card-drop-body');

        $(body).removeClass('card-drop-body-hide');
        $(body).fadeIn('slow');

        $(icon).remove();
    });
});

function next(){
    $('#card-register').removeClass('d-none');
    $('#btnnext').hide();

    $('html, body').animate({
        scrollTop: $("#card-register").offset().top
    }, 2000);
}

$(document).on('click', function (e) {
    if ($(e.target).closest(".popover").length === 0 && $(e.target).closest(".btn-icon").length === 0) {
        $(".popover").hide();
    }else{
        $(".popover").show();
    }

    $(".money-mask").mask('#.##0,00', {reverse: true});
});

