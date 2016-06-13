// document.getElementById('toCart').addEventListener('click', function(){
//         var content=document.getElementsByTagName('main')[0];
//         //content.style.display='none';
//
//         var xhr = new XMLHttpRequest();
//
//
//         xhr.onreadystatechange = function() {
//                 if (xhr.readyState == 4) {
//                         alert(xhr.responseText);
//
//                         var newNode = document.createElement('section');
//                         newNode.innerHTML = xhr.responseText;
//
//                         content.replaceChild(newNode,content.firstElementChild);
//
//                         //document.insertAdjacentHTML('afterBegin', xhr.responseText);
//
//                 }
//         };
//
//         xhr.open('GET', '\cart.php', true);
//         xhr.send(null);
//     },false);
//
// $('#catalog').submit(function(){
//
//         $.get('cart.php', function(data) {
//
//                 $('#main').replaceWith(data);
//         })
//
// });
//
// document.getElementById('toCart').addEventListener('click',function(){
//         [].forEach.call(document.querySelectorAll('checkbox'),function(elem){
//                 if(elem.checked='true'){
//                         var product =   
//                 }        
//                 
//                 document.getElementById('main').style.display='none';
//                 document.getElementById('frame').style.display='';
//                 document.getElementById('iframe').setAttribute('src',e.target.id+'.html');
//   
//         });
//        
// },false);

[].forEach.call(document.querySelectorAll('li:not(#cat)'),function(elem){
        elem.addEventListener('click', function(e){
                //document.getElementById('main').style.display='none';
                //document.getElementById('frame').style.display='';
                document.getElementById('iframe').setAttribute('src',e.target.id+'.html');
        },false);
});

document.getElementById('toCart').addEventListener('submit',function(e){
        e.preventDefault();
        //document.getElementById('main').style.display='none';
        //document.getElementById('frame').style.display='';
        document.getElementById('iframe').setAttribute('src','inCart.php');
},false);