function remove(id)
{
  var node = document.getElementById(id);
  if (node.parentNode) {
    node.parentNode.removeChild(node);
  }
}


var fix_button = "<div id='fix_button' style='background:#fff; border:5px solid #ccc; padding:20px 20px 0px 20px; width:360px; position:fixed;z-index:10000000; top: 10px; right:50%; margin-right:-200px;'><a style='position:absolute;top:5px;right:5px;background:url(http://remedia.la/images/close.png) no-repeat; width:11px; height:11px; display:block; text-indent:-9999999px;' href=javascript:remove('fix_button');>cerrar</a><iframe src='http://remedia.la/services/bookmarklet?url=" + window.location.href + "' scrolling='no' frameborder='0' style='border:none; overflow:hidden;width:360px;' allowTransparency='true'></iframe></div>";
document.body.innerHTML += fix_button;
