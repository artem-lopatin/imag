[].forEach.call(document.querySelectorAll('li:not(#cat)'),function(elem){
    elem.addEventListener('click', function(e){
        document.getElementById('main').style.display='none';
        document.getElementById('frame').style.display='';
        document.getElementById('iframe').setAttribute('src',e.target.id+'.html');
    },false);
});
