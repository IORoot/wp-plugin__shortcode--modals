function setsrc(iframe_name)
{
    var modaliframe = document.querySelector(iframe_name);
    var datasrc  = modaliframe.getAttribute('data-src');
    modaliframe.setAttribute('src', datasrc);
}