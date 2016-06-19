$('#toCart').submit(function(){
       event.preventDefault();
       var params = $('#toCart input').not("#toCart input[type='submit']").serializeArray();
       $.get('inCart.php', params, function(data) {
       $('#main').html(data);
       })

});

$('li:not(#cat)').click(function(){

        $('#main').load('pages/'+event.target.id+'.html');
});
