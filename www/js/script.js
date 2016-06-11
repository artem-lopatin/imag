[].forEach.call(document.querySelectorAll('li:not(#cat)'),function(elem){
    elem.addEventListener('click', function(e){
        var content=document.getElementsByTagName('main')[0];
        //content.style.display='none';

        var xhr = new XMLHttpRequest();

        xhr.open('GET', e.target.id+'.html', false);
        xhr.send();

        var newNode = document.createElement('section');
        newNode.innerHTML = xhr.responseText;
        
        content.replaceChild(newNode,content.firstElementChild);

    },false);
});



