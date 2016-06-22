/*------------добавление в корзину------------------*/
$('#toCart').submit(function(){
       event.preventDefault();
       var params = $('#toCart input').not("#toCart input[type='submit']").serializeArray();
       $.get('inCart.php', params, function(data) {
           $('#comments').css('display', 'none');
           $('#main').html(data);
       })

});

/*------------показ комментов----------------*/

// $(document).ready(function(){
//
//        //var params = $('#addComment input').not("#addComment input[type='submit']").serializeArray();
//        $.ajax('showComments.php', {
//            cache: false, success: function (data) {
//                $('.coment').html(data);
//            }
//         });
// });



/*--------навигация --------*/
$('li:not(#cat)').click(function(){
       $('#comments').css('display', 'none');
       $('#main').load('pages/'+event.target.id+'.html');
});
