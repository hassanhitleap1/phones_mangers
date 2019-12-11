$(function(){

    $('.modelshow').click(function(){
            $('.modal').modal('show')
                .find('#modelContent')
                .load($(this).attr('value'));
    });

    $('.update-button').click(function(){
        $('.modal').modal('show')
            .find('#modelContent')
            .load($(this).attr('value'));
    });
});