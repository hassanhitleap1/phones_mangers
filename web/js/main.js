// $(function(){
//     // $('.modelshow').click(function(){
//     //         $('.modal').modal('show')
//     //             .find('#modelContent')
//     //             .load($(this).attr('value'));
//     // });

//     // $('.update-button').click(function(){
//     //     $('.modal').modal('show')
//     //         .find('#modelContent')
//     //         .load($(this).attr('value'));
//     // });
// });


$(document).on("click",".modelshow",function(){
    $('.modal').modal('show')
        .find('#modelContent')
        .load($(this).attr('value'));
});


$(document).on("click",".update-button",function(){
    $('.modal').modal('show')
        .find('#modelContent')
        .load($(this).attr('value'));
});