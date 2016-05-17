$(document).ready(function(){

    var id = "";

    $('.frt-menu li').on("click", function(e){
        $('.frt-menu li').removeClass('active-menu');
        $(this).addClass('active-menu');
    });

    $("table tr").click(function() {
        $("table tr").removeClass('current');
        $(this).addClass('current')
        id= $(this).attr('id');

        $('button[name="pp"]').val(id);
    });

});